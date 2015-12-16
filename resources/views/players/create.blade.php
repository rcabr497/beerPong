@extends('master')

@include('layouts/main-menu')

@section('content')

    <form action="{{url('players')}}" method="POST">
        {!! csrf_field() !!}

        <input type="text" name="first_name">

        <input type="text" name="last_name">

        <input type="text" name="hometown">

        <input type="text" name="height">

        <input type="text" name="age">

        <input type="submit" name="submit">
    </form>

@stop