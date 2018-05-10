@extends('layout.master')
@section('title','Hobbies')

@section('left-div-content')
<ul>
	@foreach ($hobbies as $hobby)
		<li>{{$hobby->content}}</li>
		<button class="btn btn-sm bg-info" id="btnMyView" data-id="{{$hobby->id}}" >View</button>
		<button class="btn btn-sm bg-warning" id="btnMyEdit" data-id="{{$hobby->id}}">Edit</button>
		<button class="btn btn-sm bg-danger" id="btnMyDelete" data-id="{{$hobby->id}}"> Delete</button>	
	@endforeach
</ul>
	
@endsection

