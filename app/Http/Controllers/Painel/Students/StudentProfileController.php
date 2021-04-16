<?php

namespace App\Http\Controllers\Painel\Students;

use App\Http\Controllers\Controller;
use App\Models\StudentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    public function index()
    {
        $studentProfiles = StudentProfile::where('user_id', Auth::user()->id)->get();
        return view('frontend.pages.students.student-profiles.index', compact('studentProfiles'));
    }

    public function create()
    {
        return view('frontend.pages.students.student-profiles.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $studentProfile = StudentProfile::create($data);


        if ($request->input('photo', false)) {
            $studentProfile->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }


        return redirect()->route('students.student-profiles.index')
            ->with('message', trans('Portfolio cadastrado com sucesso!'));
    }

    public function edit($id)
    {
        $studentProfile = StudentProfile::find($id);

        return view('frontend.pages.students.student-profiles.edit', compact('studentProfile'));
    }

    public function update(Request $request, $id)
    {
        $studentProfile = StudentProfile::find($id);

        $studentProfile->update($request->all());

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

        return redirect()->route('students.student-profiles.index')
            ->with('message', trans('Portfolio atualizado com sucesso!'));
    }

    public function destroy($id)
    {
        $job = StudentProfile::find($id);
        $job->delete();

        return redirect()->route('students.student-profiles.index')
            ->with('message', trans('Portfolio removido com sucesso!'));
    }
}
