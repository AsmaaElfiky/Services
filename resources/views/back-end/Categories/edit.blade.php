@extends('back-end.layout.app')

@section('title')
  Categories
@endsection


@section('content')
    @component('back-end.layout.nav-bar')
        @slot('nav_title')
            {{$moduleName}}
            @endslot
    @endcomponent

    @component('back-end.shared.edit',['moduleName'=>$moduleName,'pageDesc'=>$pageDesc])



            <form method="post" action="{{route($routeName.'.update',$row->id)}}">
                @method('PATCH')
            @include('back-end.'.$folderName.'.form')

                <button type="submit" class="btn btn-primary pull-right"> {{$moduleName}} </button>
                <div class="clearfix"></div>
            </form>

        @endcomponent

@endsection
