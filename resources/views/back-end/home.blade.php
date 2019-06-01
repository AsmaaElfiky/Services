@extends('back-end.layout.app')

@section('title')
    Home Page
@endsection



@section('content')


    <h2>Welcome {{Auth::user()->name}}</h2>

    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample User details</h2>
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-striped mg-b-0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        @elseif(isset($message))
            <p>{{ $message }}</p>
        @endif
    </div>

@endsection

