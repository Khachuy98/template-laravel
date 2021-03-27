<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Facades\App\Libraries\Session;

class UserService
{
    private $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }

    public function login($inputs)
    {
        $user = $this->user->login($inputs);
        $user->token = Session::set($user);
        return $user;
    }

    public function logout($token)
    {
        return Session::destroy($token);
    }
}
