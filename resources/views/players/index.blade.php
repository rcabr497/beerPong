@extends('master')

@section('content')

<div class="row player-table">
    <div class="col s12">
    <h4 class="page-title">All Players</h4>
		<table class="bordered highlight responsive display-player-table">
	        <thead>
	          <tr>
	              <th class="player-name">Player Name</th>
	              <th class="player-hometown">Hometown</th>
	              <th class="player-height">Height</th>
	              <th class="player-age">Age</th>
	              <th class="player-btn"></th>
	          </tr>
	        </thead>

	        <tbody>
	        @foreach ($players as $player)
	         	<tr>
	        		<td>{{ $player->first_name }} {{ $player->last_name }}</td>
					<td>{{ $player->hometown }}</td>
					<td>{{ $player->height }}</td>
					<td>{{ $player->age }}</td>
					<td class="player-btn right">
						
						<form class="right" action="{{url('players', $player->id)}}" method="POST">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}

							<button type="submit" class="btn green darken-1" value="">
								<i class="material-icons right">delete</i>Delete
							</button>
						</form>
						<a class="waves-effect edit-player-btn btn light-blue darken-1" href="{{ URL::to('players/' . $player->id . '/edit') }}">
							Edit<i class="material-icons right">mode_edit</i>
						</a>
					</td>
	         	</tr>
			@endforeach
	        </tbody>
		</table>
	</div>
</div>

@stop