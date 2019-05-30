<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\Category;
use App\Http\Requests\BackEnd\Categories\StoreRequest;
use Illuminate\Support\Facades\Auth;
class Categories extends BackEndController
{



    public function __construct(Category $model)
    {
        parent::__construct($model);
    }




    public function store(StoreRequest $request){

        $this->model->create($request->all()+['user_id'=>Auth::user()->id]);
        return redirect()->route('Categories.index')->with('success', 'Data saved!');
    }



    public function update(StoreRequest $request , $id){


        $this->model->findorfail($id)->update($request->all()+['user_id'=>Auth::user()->id]);
        return redirect()->route('Categories.index')->with('success', 'Data Updated!');


    }

}
