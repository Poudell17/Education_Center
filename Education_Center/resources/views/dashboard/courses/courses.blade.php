@extends('dashboard.layout')


@section('content')

<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Courses</h2>
		<a href="../dashboard/course/add" class="btn btn-primary float-right">Add New Courses</a>
	</div>


	<div class="card-body">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Course Name</th>
					<th>Course Details</th>
					<th>Starting Date</th>
					<th>Duration</th>
					<th>Courses Image</th>
					<th>teachername</th>
					<th>course Price</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>

				<tr>
					
					<td>Commerce</td>
					<td>bla bla bla bla bla</td>
					<td>date</td>
					<td>5 hr </td>
					<td>Image </td>
					<td>Saroj </td>
					<td>$50 </td>
					<td><button class="btn btn-primary">Edit</button>&nbsp&nbsp<button class=" btn btn-danger">Delete</button></td>

				</tr>

			</tbody>
		</table>


	</div>



</div>





@endsection