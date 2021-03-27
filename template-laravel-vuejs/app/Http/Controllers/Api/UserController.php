<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use App\Http\Resources\UserResource;
use App\Http\Resources\BaseResource;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;

class UserController
{
    private $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function login(LoginRequest $request)
    {
        return new UserResource($this->service->login($request->filter()));
    }

    public function logout(Request $request)
    {
        return new BaseResource($this->service->logout($request->bearerToken()));
    }
}
