@extends('back-end.layout.app')

@section('title')
   {{$moduleName}}
@endsection


@section('content')
    @component('back-end.layout.nav-bar',['nav_title'=>'Users'])
    @endcomponent
    @if(session()->get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b>  {{ session()->get('success') }} </b> </span>
    </div>
    @endif
@component('back-end.shared.table',['moduleName'=>$moduleName ,'pageDesc'=>$pageDesc])
    @slot('AddButton')
    <div class="col-md-4 text-right">
        <a href="{{route($routeName.'.create')}}" class="btn btn-white btn-round">Add {{$SmoduleName}}</a>
    </div>
    @endslot
    <div class="table-responsive">
        <table class="table">
            <thead class=" text-primary">
            <tr><th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th style="text-align:center">
                    Action
                </th>

            </tr></thead>
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
                        {{$row->email}}
                    </td>
                    <td class="td-actions text-center">
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
