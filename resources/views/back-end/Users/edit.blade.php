@extends('back-end.layout.app')

@section('title')
 @@lang('page_title.users')
@endsection


@section('content')



@section('content')

    @PageHeader([

    'pageTitle' => 'page_title.user',
    'pageDescription' => 'page_description.update',

    'back'=>['page_title'=>'page_title.users','route'=>route('Users.index')]
    ])
    @endPageHeader


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

            <form method="post" action="{{route('Users.update',$row->id)}}" enctype="multipart/form-data">
                @method('PATCH')
            @include('back-end.Users.form')

            @Button(['type'=>'update',
            'Single_title'=>'page_title.user'
            ])
            @endButton
                <div class="clearfix"></div>
            </form>



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
