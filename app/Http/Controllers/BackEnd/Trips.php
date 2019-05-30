<?php

namespace App\Http\Controllers\BackEnd;



use App\Http\Requests\BackEnd\Trips\StoreRequest;


use App\Models\Trip;
use Illuminate\Support\Facades\Auth;


class Trips extends BackEndController
{

    public function __construct(Trip $model)
    {
        parent::__construct($model);

    }



    public function store(StoreRequest $request){

       $requestArray = $request->all();
       $row = $this->model->create($requestArray+['user_id'=>Auth::user()->id]);

      if(isset($requestArray['hotels'])&&!empty($requestArray['hotels']))
        {
         $row->hotels()->sync($requestArray['hotels']);
        }
        return redirect()->route('Trips.index')->with('success', 'Data saved!');
    }



    public function update(StoreRequest $request , $id){

        $requestArray = $request->all();
        $row = $this->model->findorfail($id);
        $row->update($requestArray +['user_id'=>Auth::user()->id]);
        if(isset($requestArray['hotels'])&&!empty($requestArray['hotels']))
        {
            $row->hotels()->sync($requestArray['hotels']);
        }
        return redirect()->route('Trips.index')->with('success', 'Data Updated!');


    }
}
