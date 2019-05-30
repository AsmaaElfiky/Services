<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;

class Home extends BackEndController
{


    public function __construct(User $model)
    {
        parent::__construct($model);
    }
    public function home(){

    return view('back-end.home');
    }
}
