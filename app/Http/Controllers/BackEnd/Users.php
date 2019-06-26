<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Http\Requests\BackEnd\Users\StoreRequest;
use App\Http\Requests\BackEnd\Users\UpdateRequest;
use App\Models\User;

use Illuminate\Support\Facades\DB;



class Users extends Controller
{

    public function __construct(User $model)
    {

        $this->model = $model;
    }


    public  function  index(){

        $rows = $this->model;
        $rows =$rows->paginate(10);
        return view('back-end.Users.index',compact('rows'));
    }



    public function create(){

     $roles = DB::table('roles')->get();
     return view('back-end.Users.add',compact('roles'));

    }


    public function edit($id){

        $roles = DB::table('roles')->get();
        $row = $this->model->findorfail($id);
        return view('back-end.Users.edit')->with(compact('row','roles'));
    }




    public function store(StoreRequest $request){

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAs(
                'Users', $request->name.'-user.'.$request->image->extension()
            );

            $input['image'] =$path;

        }

        $group = $input['group'];
        $this->model->create($input)->assignRole($group);
        return redirect('admin/Users')->with('success', 'Data saved!');
    }



    public function update(UpdateRequest $request , $id){
        $input =  $request->except(['_token']);
        $input['password'] = bcrypt($input['password']);
        if ($request->hasFile('image')) {

            $path = $request->file('image')->storeAs(
                'Users', $request->name.'-user.'.$request->image->extension()
            );
            $input['image'] =$path;

        }
        $group = $input['group'];
        $user = $this->model->findorfail($id);
        $user->syncRoles($group);
        $user->update($input);
        return redirect('admin/Users')->with('success', 'Data Updated!');


    }


    public function destroy($id){

        $this->model->findorfail($id)->delete();

        return redirect()->route('Users.index')->with('success', 'Data Deleted!');

    }




}
