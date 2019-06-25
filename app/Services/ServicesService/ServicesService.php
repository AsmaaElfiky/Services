<?php

namespace App\Services\ServicesService;
use App\Http\Requests\BackEnd\Services\updateRequest;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ServicesRepository\ServicesRepository;


class ServicesService
{
    public function __construct(ServicesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getServices()
    {
      return  $this->repo->GetServices();

    }

    public function getService($id)
    {

      return  $this->repo->GetService($id);

    }
    public function updateService(updateRequest $request ,$id)
    {

      if ($request->hasFile('image')) {
        Storage::delete($this->repo->GetServiceImage($id));
        $path = $request->file('image')->storeAs(
            'Services', $request->name.'-service.'.$request->image->extension()
        );

        $this->repo->updateServiceImage($id ,$path);
    }

            $attributes =[
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'order'=>$request->order,
            'user_id'=>Auth::user()->id
        ];

        return  $this->repo->updateService($id ,$attributes);



    }







}
