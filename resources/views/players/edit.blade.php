@extends('master')

@include('layouts/main-menu')

@section('content')

    <form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}

        <input type="text" name="first_name" value="{{$player->first_name}}">

        <input type="text" name="last_name" value="{{$player->last_name}}">

        <input type="text" name="hometown" value="{{$player->hometown}}">

        <input type="text" name="height"  value="{{$player->height}}">

        <input type="text" name="age" value="{{$player->age}}">

        <input type="submit" name="submit">
    </form>

    <form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}

        <input type="submit" value="Delete Player">
    </form>

@stop