<?php

namespace App\Http\Controllers\BackEnd;



use App\Http\Requests\BackEnd\Hotels\StoreRequest;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
class Hotels extends BackEndController
{

    public function __construct(Hotel $model)
    {
        parent::__construct($model);
    }




    public function store(StoreRequest $request){

        $this->model->create($request->all()+['user_id'=>Auth::user()->id]);
        return redirect()->route('Hotels.index')->with('success', 'Data saved!');
    }



    public function update(StoreRequest $request , $id){


        $this->model->findorfail($id)->update($request->all()+['user_id'=>Auth::user()->id]);
        return redirect()->route('Hotels.index')->with('success', 'Data Updated!');


    }
}
