@extends('layouts.apps')

@section('body')
	<br>
	<div >
		<center><h1>Admin Section</h1>
		<br>
				<center><h2>Add new hotel</h2></center><div class="btn btn-info"><a href="/admin">Back</a></div>

	</div><br>
	
	<form action="/admin" method="Post">
	{{csrf_field()}}
	DESCRIPTION OF THE HOTEL<br><textarea name="description" rows="5"></textarea> <br>
		ENTER the HOTEL NAME :<br><input type="text" name="name"><br>
		 
		<input type="submit" name="submit" value="ADD">
	</form>
	</center>
@endsection