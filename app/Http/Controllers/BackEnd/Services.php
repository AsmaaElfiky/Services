<?php

namespace App\Http\Controllers\BackEnd;



use App\Http\Requests\BackEnd\Services\StoreRequest;
use App\Http\Requests\BackEnd\Services\updateRequest;
use App\Models\Service;
use Hash;
class Services extends BackEndController
{

    public function __construct(Service $model)
    {
        parent::__construct($model);
    }


    public function store(StoreRequest $request){

        $input = $request->all();

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
        return redirect('admin/Services')->with('success', 'Data saved!');
    }



    public function update(updateRequest $request , $id){
        $input =  $request->except(['_token']);

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
        return redirect('admin/Services')->with('success', 'Data Updated!');


    }

}
