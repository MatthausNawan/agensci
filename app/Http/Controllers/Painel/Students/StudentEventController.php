<?php

namespace App\Http\Controllers\Painel\Students;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Illuminate\Http\Request;
use App\Models\StudentEvent;
use Illuminate\Support\Facades\Auth;

class StudentEventController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $studentEvents = StudentEvent::where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.students.student-events.index', compact('studentEvents'));
    }

    public function create()
    {
        return view('frontend.pages.students.student-events.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;
        $data['enabled'] = true;

        $studentEvent = StudentEvent::create($data);
        
        if ($request->input('banner', false)) {
            $studentEvent->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
        }

        return redirect()->route('students.student-events.index');
    }

    public function edit($id)
    {
        $studentEvent = StudentEvent::findOrFail($id);

        return view('frontend.pages.students.student-events.edit', compact('studentEvent'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;
        $data['enabled'] = true;

        $studentEvent = StudentEvent::find($id);

        $studentEvent->update($data);

        if ($request->input('banner', false)) {
            if (!$studentEvent->banner || $request->input('banner') !== $studentEvent->banner->file_name) {
                if ($studentEvent->banner) {
                    $studentEvent->banner->delete();
                }

                $studentEvent->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
            }
        } elseif ($studentEvent->banner) {
            $studentEvent->banner->delete();
        }


        return redirect()->route('students.student-events.index');
    }
}
