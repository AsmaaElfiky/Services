@extends('back-end.layout.app')

@section('title')
    {{$moduleName}}
@endsection

@section('content')
    @component('back-end.layout.nav-bar')
        @slot('nav_title')
            {{$moduleName}}
            @endslot
    @endcomponent

    <div class="container-fluid">
        <div class="row">

            @component('back-end.shared.create',['moduleName'=>$moduleName,'pageDesc'=>$pageDesc])
                <form method="post" action="{{route($routeName.'.store')}}" enctype="multipart/form-data">
                           @include('back-end.'.$folderName.'.form')

                            <button type="submit" class="btn btn-primary pull-right"> {{$moduleName}}</button>
                            <div class="clearfix"></div>
                        </form>
            @endcomponent


        </div>
    </div>

    <script>


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
