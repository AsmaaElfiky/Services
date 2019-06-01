<?php

namespace App\Http\Controllers\FrontEnd;


use App\Models\Service;


class Services extends FrontEndController

{


    public function __construct(Service $model)
    {
        parent::__construct($model);
    }





}
