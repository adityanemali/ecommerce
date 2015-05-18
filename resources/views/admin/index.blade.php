@extends('layouts/master')
@section('title')
    Admin Panel
@stop

@section('content')
    <h3>Admin Panel</h3>
    {!!link_to_route('NewCategory', "Add Category")!!}
    <h4>Hola!!</h4>
@stop