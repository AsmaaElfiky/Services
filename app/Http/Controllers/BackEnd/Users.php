<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Users\StoreRequest;
use App\Http\Requests\BackEnd\Users\UpdateRequest;
use App\Models\User;
use Hash;



class Users extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }




    public function store(StoreRequest $request){

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if ($request->hasFile('image')) {

            $name = str_replace('.','k',str_replace('/','2',Hash::make(time())));
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $full_name = $name.'.'.$ext;

            $image->move($destinationPath, $full_name);
            $input['image'] ='/images/'.$full_name;

        }

        $this->model->create($input);
        return redirect('admin/Users')->with('success', 'Data saved!');
    }



    public function update(UpdateRequest $request , $id){
        $input =  $request->except(['_token']);
        $input['password'] = bcrypt($input['password']);
        if ($request->hasFile('image')) {

            $name = str_replace('.','k',str_replace('/','2',Hash::make(time())));
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $full_name = $name.'.'.$ext;

            $image->move($destinationPath, $full_name);
            $input['image'] ='/images/'.$full_name;

        }
        $this->model->findorfail($id)->update($input);
        return redirect('admin/Users')->with('success', 'Data Updated!');


    }






}
