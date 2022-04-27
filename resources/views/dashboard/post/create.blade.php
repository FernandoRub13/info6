@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<h1>Post </h1>
<form action="{{route("post.store") }}" method="POST">
    @csrf
    @include('dashboard.post._form')
</form>

@endsection


  

