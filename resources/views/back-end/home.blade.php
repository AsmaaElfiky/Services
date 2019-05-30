@extends('back-end.layout.app')

@section('title')
    Home Page
@endsection


@section('content')
    @component('back-end.layout.nav-bar',['nav_title'=>'Home Page'])
@endcomponent

    <h1>Home Page</h1>

@endsection
