

@extends('layouts.app')


@section('content')
	<h1>Todos</h1>
	@if(count($todos) > 0)
		@foreach($todos as $todo)
			<div class="card" style="margin-top: 5px; height: 60px; margin-bottom: 5px;">
				<h3 style="margin-top: 15px; margin-left: 5px;"><a href="todo/{{$todo->id}}"> {{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
			</div>
		@endforeach
	@endif
@endsection