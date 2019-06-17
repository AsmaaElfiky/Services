@extends('back-end.layout.app')

@section('title')
    @lang('page_title.services')
@endsection


@section('content')


    @component('back-end.shared.edit',['moduleName'=>$moduleName,'pageDesc'=>$pageDesc])



            <form method="post" action="{{route($routeName.'.update',$row->id)}}" enctype="multipart/form-data">
                @method('PATCH')
            @include('back-end.Services.form')

                <button type="submit" class="btn btn-primary pull-right">Update Service</button>
                <div class="clearfix"></div>
            </form>

        @endcomponent

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
