<?php

namespace App\Http\Controllers\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $id = $this->verifyId('id', null);
    }
}
