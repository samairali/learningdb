@extends('includes.layout')
@section('content')
<div>
	@foreach($posts as $post)
	<a href="{{url('/post/singlepost/'.$post->id)}}"><h1>{{$post->title}}</h1></a>
	<h2>{{$post->body}}</h2>
	@endforeach
</div>
@endsection