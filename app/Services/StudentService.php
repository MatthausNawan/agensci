<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;

class StudentService
{


    public static function createUserStudent($request, $student)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $student->user_id = $user->id;
        $student->save();

        $user->roles()->attach(Role::ROLE_STUDENT);
    }
}
