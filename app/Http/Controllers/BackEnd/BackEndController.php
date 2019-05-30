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
        $this->middleware('auth');
    }



    public  function  index(){

        $moduleName =$this->getClassName();

        $pageDesc = "Add / Edit /Delete ".$moduleName;
        $SmoduleName=$this->getClassNameSingle();
        $routeName =$this->getClassName();
        $rows = $this->model;
        $rows=$this->filter($rows);
        $rows =$rows->paginate(10);

        return view('back-end.'.$this->getClassName().'.index',
            compact('rows','moduleName','pageDesc','SmoduleName','routeName'));
    }


    public function create(){
        $moduleName ='Create ' .$this->getClassNameSingle();
        $pageDesc ="Here You Can " .$moduleName;
        $routeName =$this->getClassName();
        $folderName =$routeName;
        $categories = DB::table('categories')->get();
        $trips = DB::table('trips')->get();
        $hotels = DB::table('hotels')->get();
        $array=['hotels'=>[]];
        if(request()->route()->parameter('Trip')){
            $array['hotels'] = $this->model->find(request()->route()->parameter('Trip'))->hotels()->get()->pluck('id')->toArray();
            $array =$array['hotels'];

        }
        return view('back-end.'.$this->getClassName().'.add',compact('moduleName','pageDesc','trips','hotels','array','categories','routeName','folderName'));

    }


    public function edit($id){
        $routeName =$this->getClassName();
        $folderName =$routeName;
        $moduleName ='Update ' .$this->getClassNameSingle();
        $pageDesc = "Here You Can ".$moduleName;
        $row = $this->model->findorfail($id);
        $categories = DB::table('categories')->get();
        $trips = DB::table('trips')->get();
        $hotels = DB::table('hotels')->get();
        $array=['hotels'=>[]];
        if(request()->route()->parameter('Trip')){
          $array['hotels'] = $this->model->find(request()->route()->parameter('Trip'))->hotels()->get()->pluck('id')->toArray();
           $array =$array['hotels'];
          }

        return view('back-end.'.$this->getClassName().'.edit')->with(compact('row','moduleName','array','hotels','trips','categories','pageDesc','routeName','folderName'));
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

