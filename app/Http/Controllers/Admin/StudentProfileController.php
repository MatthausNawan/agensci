<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStudentProfileRequest;
use App\Http\Requests\StoreStudentProfileRequest;
use App\Http\Requests\UpdateStudentProfileRequest;
use App\Models\StudentProfile;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class StudentProfileController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('student_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = StudentProfile::query()->select(sprintf('%s.*', (new StudentProfile)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'student_profile_show';
                $editGate      = 'student_profile_edit';
                $deleteGate    = 'student_profile_delete';
                $crudRoutePart = 'student-profiles';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('couse_name', function ($row) {
                return $row->couse_name ? $row->couse_name : "";
            });
            $table->editColumn('period', function ($row) {
                return $row->period ? $row->period : "";
            });
            $table->editColumn('university_name', function ($row) {
                return $row->university_name ? $row->university_name : "";
            });
            $table->editColumn('lattes_link', function ($row) {
                return $row->lattes_link ? $row->lattes_link : "";
            });
            $table->editColumn('photo', function ($row) {
                if ($photo = $row->photo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'photo']);

            return $table->make(true);
        }

        return view('admin.studentProfiles.index');
    }

    public function create()
    {
        abort_if(Gate::denies('student_profile_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.studentProfiles.create');
    }

    public function store(StoreStudentProfileRequest $request)
    {
        $studentProfile = StudentProfile::create($request->all());

        if ($request->input('resume', false)) {
            $studentProfile->addMedia(storage_path('tmp/uploads/' . $request->input('resume')))->toMediaCollection('resume');
        }

        if ($request->input('photo', false)) {
            $studentProfile->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $studentProfile->id]);
        }

        return redirect()->route('admin.student-profiles.index');
    }

    public function edit(StudentProfile $studentProfile)
    {
        abort_if(Gate::denies('student_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.studentProfiles.edit', compact('studentProfile'));
    }

    public function update(UpdateStudentProfileRequest $request, StudentProfile $studentProfile)
    {
        $studentProfile->update($request->all());

        if ($request->input('resume', false)) {
            if (!$studentProfile->resume || $request->input('resume') !== $studentProfile->resume->file_name) {
                if ($studentProfile->resume) {
                    $studentProfile->resume->delete();
                }

                $studentProfile->addMedia(storage_path('tmp/uploads/' . $request->input('resume')))->toMediaCollection('resume');
            }
        } elseif ($studentProfile->resume) {
            $studentProfile->resume->delete();
        }

        if ($request->input('photo', false)) {
            if (!$studentProfile->photo || $request->input('photo') !== $studentProfile->photo->file_name) {
                if ($studentProfile->photo) {
                    $studentProfile->photo->delete();
                }

                $studentProfile->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($studentProfile->photo) {
            $studentProfile->photo->delete();
        }

        return redirect()->route('admin.student-profiles.index');
    }

    public function show(StudentProfile $studentProfile)
    {
        abort_if(Gate::denies('student_profile_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.studentProfiles.show', compact('studentProfile'));
    }

    public function destroy(StudentProfile $studentProfile)
    {
        abort_if(Gate::denies('student_profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $studentProfile->delete();

        return back();
    }

    public function massDestroy(MassDestroyStudentProfileRequest $request)
    {
        StudentProfile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('student_profile_create') && Gate::denies('student_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new StudentProfile();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
