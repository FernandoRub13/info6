@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<h1>Categories </h1>
<form action="{{route("categories.store") }}" method="POST">
    @csrf
    @include('categories._form')
</form>

@endsection


  

