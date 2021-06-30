@extends('dashboard.layout')

@section('content')
<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Courses</h2>
		<a href="/dashboard/courses" class="float-right btn-primary btn"> Back</a>
	</div>


	<div class="card-group">
		<div class="card">

			<center>
				
				<div class="form-group">
					<div class="card-body">
						<input type="text" class="form-control col-4" placeholder="Enter Course Name" name="name" required="">
						<br>
						<input type="text" class="form-control col-4" placeholder="Enter Course Details" name="coursename" required="">
						<br>
						<input type="date" class="form-control col-4" placeholder="Enter Course Starting Date" name="coursename" required="">
						<br>
						<input type="text" class="form-control col-4" placeholder="Enter Course Duration" name="coursename" required="">
						<br>
						<input type="text" class="form-control col-4" placeholder="Enter Course Price" name="coursename" required="">
						<br>
						<input type="text" class="form-control col-4" placeholder="Teacher Name" name="coursename" required="">
						<br>
						<input type="file" class="form-control col-4 " placeholder="Upload Your Image" name="profile_pic" >
						<br>
						<!-- <select name="teacher" id="teacher" class="form-control col-4" placeholder="Choose Teacher">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							
						</select> -->
						<button class="btn submit btn-primary">Add Courses</button>

					</div>

				</div>

			</center>

		</div>
	</div>	
</div>


@endsection