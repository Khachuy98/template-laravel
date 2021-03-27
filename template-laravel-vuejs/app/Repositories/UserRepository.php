<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\UserUnauthorizedException;

class UserRepository
{
    public function login($inputs)
    {
        try {
            return User::where([
                'email' => $inputs['email'],
                'password' => $inputs['password'] // hash('sha256', $inputs['password'])
            ])->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            throw new UserUnauthorizedException;
        }
    }
}
