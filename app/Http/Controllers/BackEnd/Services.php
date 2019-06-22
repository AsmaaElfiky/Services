<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

use App\Http\Requests\BackEnd\Services\StoreRequest;
use App\Http\Requests\BackEnd\Services\updateRequest;
use App\Models\Service;
use Hash;
use App\Models\ServiceCategory;

class Services extends Controller
{
    private $model;
    private $modelDependent;
    public function __construct(Service $model , ServiceCategory $modelDependent)
    {

        $this->model = $model;
        $this->modelDependent = $modelDependent;
    }


    public  function  index(){

        $SmoduleName=$this->getClassNameSingle();
        $routeName ='Services';
        $folderName ='Services';
        $rows = $this->model;
        $rows=$this->filter($rows);
         $rows =$rows->paginate(10);
        return view('back-end.Services.index',
            compact('rows','SmoduleName','folderName','routeName'));
    }



    public function create(){

        $routeName =$this->getClassName();
        $folderName =$routeName;
        $ServiceCategories =$this->modelDependent::get(['id','category_name']);
        return view('back-end.'.$this->getClassName().'.add',compact('routeName','folderName' ,'ServiceCategories'));

    }


    public function edit($id){
        $routeName =$this->getClassName();
        $folderName =$routeName;

        $row = $this->model->findorfail($id);

        $ServiceCategories =$this->modelDependent::get(['id','category_name']);
        return view('back-end.'.$this->getClassName().'.edit')->with(compact('row','ServiceCategories','routeName','folderName'));
    }


    public function destroy($id){

        $this->model->findorfail($id)->delete();

        return redirect()->route($this->getClassName().'.index')->with('success', 'Data Deleted!');

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
    protected function filter($rows){

        return $rows;
    }

    protected function getClassName(){

     return  str_plural(class_basename($this->model));
    }

    protected function getClassNameSingle(){

        return  str_singular(class_basename($this->model));
    }

}
