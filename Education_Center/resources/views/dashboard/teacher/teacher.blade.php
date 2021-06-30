@extends('dashboard.layout')


@section('content')

<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Teacher</h2>
		<a href="../dashboard/teacher/add" class="btn btn-primary float-right">Add New Teacher</a>
	</div>


	<div class="card-body">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Teacher Name</th>
					<th>Courses Name</th>
					<th>Image</th>
					<th>Description</th>
					<th>contact</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>Saroj </td>
					<td>Commerce</td>
					<td>ImageName</td>
					<td>Description</td>
					<td>abc@gmail.com</td>
					<td><button class="btn btn-primary">Edit</button>&nbsp&nbsp<button class=" btn btn-danger">Delete</button></td>

				</tr>

			</tbody>
		</table>


	</div>



</div>





@endsection