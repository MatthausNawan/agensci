<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advert;
use App\Models\Company;
use App\Models\Contest;
use App\Models\Event;
use App\Models\Job;
use App\Models\Post;
use App\Models\StudentProfile;
use App\Models\Teacher;
use App\Models\User;

class HomeController
{
    public function index()
    {
        $students = StudentProfile::all()->count();
        $companies = Company::all()->count();
        $teachers = Teacher::all()->count();
        $events = Event::all()->count();
        $adversitments = Advert::latest()->take(10)->get();
        $posts = Post::latest()->take(5)->get();
        $users = User::all()->count();
        $contests = Contest::all()->count();
        $stages = Job::whereIn('type', [Job::TYPE_ESTAGIO,Job::TYPE_TRAINEE])->count();
        $jobs = Job::whereNotIn('type', [Job::TYPE_ESTAGIO,Job::TYPE_TRAINEE])->count();

        return view('home', compact('students', 'companies', 'teachers', 'events', 'adversitments', 'posts', 'users', 'stages', 'jobs', 'contests'));
    }
}
