<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;

class CompanieService
{


    public static function createUserCompanie($request, $company)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $company->user_id = $user->id;
        $company->save();

        $user->roles()->attach(Role::ROLE_COMPANY);
    }
}
