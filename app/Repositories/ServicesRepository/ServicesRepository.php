<?php

namespace App\Repositories\ServicesRepository;

use App\Models\Service;


class ServicesRepository
{
    public function __construct(Service $model)
    {
        $this->model = $model;
    }

     public function GetServices()
    {
         $rows = $this->model;
         $rows =$rows->paginate(10);

        return $rows ;
    }


     public function GetService($id)
    {
       $row = $this->model::findOrfail($id);

        return $row ;
    }


     public function GetServiceImage($id)
    {
       $row = $this->model::findOrfail($id);

        return $row->image ;
    }

     public function updateService($id , $attributes)
    {

        return $this->model::findOrFail($id)->update($attributes);

    }
     public function updateServiceImage($id , $path)
    {

        return $this->model::findOrFail($id)->update(['image'=>$path]);

    }




}
