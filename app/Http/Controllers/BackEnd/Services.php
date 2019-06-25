<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\ServicesService\ServicesService;
use App\Http\Requests\BackEnd\Services\StoreRequest;
use App\Http\Requests\BackEnd\Services\updateRequest;


use App\Models\ServiceCategory;

class Services extends Controller
{

    private $modelDependent;
    public function __construct(ServicesService $service ,Service $model, ServiceCategory $modelDependent)
    {

        $this->service = $service;
        $this->model = $model;
        $this->modelDependent = $modelDependent;
    }


    public  function  index(){

        $rows = $this->service->getServices();

        return view('back-end.Services.index',
            compact('rows'));
    }



    public function create(){

        $ServiceCategories =$this->modelDependent::get(['id','category_name']);
        return view('back-end.Services.add',compact('ServiceCategories'));

    }


    public function edit($id){

        $row = $this->service->getService($id);
        $ServiceCategories =$this->modelDependent::get(['id','category_name']);
        return view('back-end.Services.edit')->with(compact('row','ServiceCategories'));
    }


    public function destroy($id){

        $this->service->getService($id)->delete();

        return redirect()->route('Services.index')->with('success', 'Data Deleted!');

    }




    public function store(StoreRequest $request){

        if ($request->hasFile('image')) {

            $path = $request->file('image')->storeAs(
                'Services', $request->name.'-service.'.$request->image->extension()
            );
        }

        $this->model->create(
            [
            'name'=>$request->name,
            'order'=>$request->order,
            'category_id'=>$request->category_id,
            'image'=>$path,
            'user_id'=>Auth::user()->id
            ]);
        return redirect('admin/Services')->with('success', 'Data saved!');
    }



    public function update(updateRequest $request ,$id){

        $this->service->updateService($request,$id);

        return redirect('admin/Services')->with('success', 'Data Updated!');

    }



}
