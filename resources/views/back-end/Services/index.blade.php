@extends('back-end.layout.app')

@section('title')
   {{$moduleName}}
@endsection

@section('content')

    @if(session()->get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i  class="icon ion-close"></i>
        </button>
        <span>
            <b>  {{ session()->get('success') }} </b> </span>
    </div>
    @endif
@component('back-end.shared.table',['moduleName'=>$moduleName ,'pageDesc'=>$pageDesc])
    @slot('AddButton')
    <div class="col-md-4 text-right">
        <a href="{{route($routeName.'.create')}}" class="btn btn-primary btn-block mg-b-10">Add {{$SmoduleName}}</a>

    </div>
    @endslot

    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table table-striped mg-b-0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>image</th>
                <th>Order</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($rows as $row)
            <tr>
                <td>
                    {{$row->id}}
                </td>
                <td>
                    {{$row->name}}
                </td>
                <td>
                  <img src="{{url($row->image)}}" width="80px" height="80px">
                </td>
                <td>
                    {{$row->order}}
                </td>
                <td class="td-actions">
                    @include('back-end.shared.buttons.edit')
                    @include('back-end.shared.buttons.delete')

                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $rows->links() !!}
    </div>
    @endcomponent
@endsection
