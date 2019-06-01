<?php
namespace App\Http\Controllers\BackEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BackEndController extends controller{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;

    }




    public  function  index(){

        $moduleName =$this->getClassName();

        $pageDesc = "Add / Edit /Delete ".$moduleName;
        $SmoduleName=$this->getClassNameSingle();
        $routeName =$this->getClassName();
        $folderName =$routeName;
        $rows = $this->model;
        $rows=$this->filter($rows);
        $rows =$rows->paginate(10);

        return view('back-end.'.$this->getClassName().'.index',
            compact('rows','moduleName','pageDesc','SmoduleName','folderName','routeName'));
    }


    public function create(){
        $moduleName ='Create ' .$this->getClassNameSingle();
        $pageDesc ="Here You Can " .$moduleName;
        $routeName =$this->getClassName();
        $folderName =$routeName;


        return view('back-end.'.$this->getClassName().'.add',compact('moduleName','pageDesc','routeName','folderName'));

    }


    public function edit($id){
        $routeName =$this->getClassName();
        $folderName =$routeName;
        $moduleName ='Update ' .$this->getClassNameSingle();
        $pageDesc = "Here You Can ".$moduleName;
        $row = $this->model->findorfail($id);


        return view('back-end.'.$this->getClassName().'.edit')->with(compact('row','moduleName','pageDesc','routeName','folderName'));
    }


    public function destroy($id){

        $this->model->findorfail($id)->delete();

        return redirect()->route($this->getClassName().'.index')->with('success', 'Data Deleted!');

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

























?>

