@extends('layouts.app')
@section('content')
    <div id="info">
		<h2 class="text-center">Abdullah Al Mamoon</h2>
		<h3 class="text-center">Dashboard</h3>
		<h4 class="text-center"><a class="btn btn-warning" href="">Create post</a></h4>
	</div>
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Heading</th>
	      <th scope="col">Image</th>
	      <th>Likes</th>
	      <th id="textcenter" scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td><a href="">new feature coming</a></td>
	      <td><img src="test.png"></td>
	      <td>5</td>
	      <td>
	      	<ul id="action">
	      		<li><a class="btn btn-info" href="">Update</a></li>
	      		<li><a class="btn btn-danger" href="">Delete</a></li>
	      	</ul>
	      </td>
	    </tr>
	  </tbody>
	</table>
@endsection