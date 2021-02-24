<?php

namespace App\Services;

use App\Models\User;

class CompanieService {


    public static function createUserCompanie($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->roles()->attach(3);
    }
}
