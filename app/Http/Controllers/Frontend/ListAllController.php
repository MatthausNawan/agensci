<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contest;
use App\Models\EventCall;
use App\Models\Job;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\PublishCall;
use App\Models\Speaker;
use App\Models\StudentProfile;
use Illuminate\Http\Request;


class ListAllController extends Controller
{
    public function viewAllPosts(Request $request)
    {        
        $posts = Post::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.posts-list',compact('posts'));
    }

    public function viewAllSpeakers(Request $request)
    {
        $speakers = Speaker::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.speakers-list',compact('speakers'));
    }

    public function viewAllFomentCalls(Request $request)
    {
        $promotions = Promotion::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.foment-calls-list',compact('promotions'));
    }

    public function viewAllPublishCalls(Request $request)
    {
        $publishCalls = PublishCall::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.publish-call-list',compact('publishCalls'));
    }

    public function viewAllStudentProfiles(Request $request)
    {
        $studentProfiles = StudentProfile::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.student-profiles-list',compact('studentProfiles'));
    }

    public function viewAllJobs(Request $request)
    {
        $jobs = Job::filteredData($request)->paginate(20);
        
        return view('frontend.pages.viewAll.jobs-list',compact('jobs'));
    }

    public function viewAllContests(Request $request)
    {
        $contests = Contest::filteredData($request)->paginate(10);
        
        return view('frontend.pages.viewAll.contests-list',compact('contests'));
    }

    public function viewAllEventCalls(Request $request)
    {
        $eventCalls = EventCall::filteredData($request)->paginate(10);

        return view('frontend.pages.viewAll.event-calls-list',compact('eventCalls'));
    }
}
