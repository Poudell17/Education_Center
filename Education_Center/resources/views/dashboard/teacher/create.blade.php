@extends('dashboard.layout')

@section('content')
<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Teacher</h2>
		
	</div>


	<div class="card-group">
		<div class="card">

			<div class="form-group">
				<div class="card-body">
					<input type="text" class="form-control col-4" placeholder="Enter Your Name" name="name" required=""><br>
					<input type="text" class="form-control col-4" placeholder="Enter Courses Name" name="coursename" required=""><br>

					<textarea class="form-control col-4" row="2" placeholder="Tell us about yourself" name="message" required=""></textarea>
					<br>
					<textarea class="form-control col-4 " row="2" placeholder="Upload Your Image" name="message" required="" ></textarea>
					<br>
					<button class="btn submit btn-primary">Add Teacher</button>

				</div>

			</div>
		</div>
	</div>	
</div>


@endsection