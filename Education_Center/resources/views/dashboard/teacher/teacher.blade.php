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
					<th>Teaching Courses</th>
					<th>Motto</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>Saroj </td>
					<td>Commerce</td>
					<td>bla bla bla bla bla</td>
					<td><button class="btn btn-primary">Edit</button>&nbsp&nbsp<button class=" btn btn-danger">Delete</button></td>

				</tr>

			</tbody>
		</table>


	</div>



</div>





@endsection