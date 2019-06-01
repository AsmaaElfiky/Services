@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Services</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="bd bd-gray-300 rounded table-responsive">
                                <table class="table table-striped mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>image</th>
                                        <th>Order</th>

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


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $rows->links() !!}
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
