<?php

namespace App\Http\Controllers\BackEnd;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;

class ServiceCategories extends Controller
{

    protected $model;

    public function __construct(ServiceCategory $model)
    {
        $this->model = $model;

    }


    public  function  index(){


        $rows = $this->model;
        $rows=$this->filter($rows);
        $rows =$rows->paginate(10);

        return view('back-end.ServiceCategories.index',
            compact('rows'));
    }


    public function create(){


        return view('back-end.ServiceCategories.add');

    }


    public function store(Request $request){

        $input = $request->all();

        $this->model->create($input);
        return redirect('admin/Services/Categories')->with('success', 'Data saved!');
    }





    public function edit($id){

        $row = $this->model->findorfail($id);

        return view('back-end.ServiceCategories.edit')->with(compact('row'));
    }



    public function update(Request $request , $id){
        $input =  $request->except(['_token']);

        $this->model->findorfail($id)->update($input);
        return redirect('admin/Services/Categories')->with('success', 'Data Updated!');


    }



    public function destroy($id){

        $this->model->findorfail($id)->delete();

        return redirect()->route('Categories.index')->with('success', 'Data Deleted!');

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
