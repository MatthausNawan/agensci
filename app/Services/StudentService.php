<?php

namespace App\Services;

use App\Models\User;

class StudentService {


    public static function createUserStudent($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->roles()->attach(4);
    }
}
