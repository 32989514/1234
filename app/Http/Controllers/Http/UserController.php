<?php

namespace App\Http\Controllers\Http;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $id = $this->verifyId('id', null);
    }

    public function info()
    {
        $user = UserService::getInstance()->getUserInfo();
        return $this->success($user);
    }
}
