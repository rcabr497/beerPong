@extends('master')

@section('content')

    <h4>Edit {{ $player->first_name }} {{ $player->last_name }}'s Profile</h4>
    <div class="row">
    <form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div class="col l6 s12">
        <input type="text" name="first_name" value="{{$player->first_name}}">
        <input type="text" name="last_name" value="{{$player->last_name}}">
        </div>
        <div class="col l6 s12">
        <input type="text" name="hometown" value="{{$player->hometown}}">
        <div class="col s6">
        <input type="text" name="height"  value="{{$player->height}}">
        </div>
        <div class="col s6">
        <input type="text" name="age" value="{{$player->age}}">
        </div>
        </div>
        <button class="btn waves-effect waves-light blue darken-1 z-depth-1" type="submit" name="action">Save 
            <i class="material-icons right">save</i>
        </button>
        
    </form>
<form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}

        <button type="submit" class="waves-effect waves-light btn blue darken-1 z-depth-1" value="Delete Player">Delete Player
         <i class="material-icons right">delete</i>
        </button>
    </form>
@stop