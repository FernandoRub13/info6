@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<h1>Edit Categories </h1>
<form method= "POST"action= {{route("categories.update", $category->id) }}>
    @csrf
    @method("PUT")
    @include('categories._form')
</form>

@endsection