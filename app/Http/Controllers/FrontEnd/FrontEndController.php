<?php
namespace App\Http\Controllers\FrontEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class FrontEndController extends controller{

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

        return view('front-end.'.$this->getClassName().'.index',
            compact('rows'));
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

