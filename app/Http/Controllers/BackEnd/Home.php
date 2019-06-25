<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

use App\Models\User;

class Home extends Controller
{


    public function __construct(User $model)
    {
        $this->model = $model;
    }


    public function home(){

    return view('back-end.home');
    }


    public function index(){

        return view('front-end.Services.index');
    }
}
