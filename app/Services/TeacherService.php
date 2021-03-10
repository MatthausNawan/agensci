<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;

class TeacherService {


    public static function createUserTeacher($request, $teacher)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $teacher->user_id = $user->id;
        $teacher->save;

        $user->roles()->attach(Role::ROLE_TEACHER);
    }
}
