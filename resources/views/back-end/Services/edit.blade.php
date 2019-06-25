@extends('back-end.layout.app')

@section('title')
    @lang('page_title.services')
@endsection


@section('content')

    @PageHeader([

    'pageTitle' => 'page_title.service',
    'pageDescription' => 'page_description.update',

    'back'=>['page_title'=>'page_title.services','route'=>route('Services.index')]
    ])
    @endPageHeader


    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

            <form method="post" action="{{route('Services.update',$row->id)}}" enctype="multipart/form-data">
                @method('PATCH')
            @include('back-end.Services.form')

                @Button(['type'=>'update',
                'Single_title'=>'page_title.service'
                ])
                @endButton
                <div class="clearfix"></div>
            </form>
                </div>
            </div>

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
