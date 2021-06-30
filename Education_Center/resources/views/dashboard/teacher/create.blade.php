@extends('dashboard.layout')

@section('content')
<div class="card card-primary ">
	
	<div class="card-header col">
		<h2>Teacher</h2>
		<a href="/dashboard/teacher" class="float-right btn-primary btn"> Back</a>
	</div>


	<div class="card-group">
		<div class="card">

			<center>
			
				<form action="/dashboard/teacher/store" method="post" enctype="multipart/form-data" >
					@csrf
					<div class="form-group">
						<div class="card-body">
							<input type="text" class="form-control col-4 " placeholder="Enter Your Name" name="name" required="">
							<br>
							<input type="text" class="form-control col-4" placeholder="Enter Courses Name" name="coursename" required="">
							<br>

							<textarea class="form-control col-4" row="2" placeholder="Tell us about yourself" name="message" required=""></textarea>
							<br> 
							<input type="file" class="form-control col-4 " placeholder="Upload Your Image" name="profile_pic" required="">
							<br>
							<input type="text" class="form-control col-4" placeholder="Enter Email" name="email" required="">
							<br>
							<button class="btn submit btn-primary">Add Teacher</button>

						</div>

					</div>

				</form>
				
			</center>

		</div>
	</div>	
</div>


@endsection