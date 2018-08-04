@extends('includes.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="{{url('/posts')}}" method="" class="form-horizontal">
				@if(session('message'))
				<p class="alert alert-success">{{session('message')}}</p>
				@endif
				<div class="form-group">
					<legend>Create New Post</legend>
				</div>
				{{csrf_field()}}
				<div class="form-group">
					<span>Enter The Title</span>
					<input type="text" name="title" id="inputTitle" class="form-control" value="">
				</div>
				<div class="form-group">
					<span>Enter The Description</span>
					<textarea name="body" id="inputBody" class="form-control" rows="3"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" >Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection