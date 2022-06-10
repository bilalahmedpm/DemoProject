@extends('admin.admin_master')
@section ('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

	  	<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add New User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('user.store')}}" >
						@csrf
					  <div class="row">
						<div class="col-12">	

					<div class="row"><!--  Row 1  -->

					<div class="col-md-6">
					<div class="form-group">
					<h5> User Role <span class="text-danger">*</span></h5>
					<div class="controls">
					<select name="usertype" id="select" required="" class="form-control" aria-invalid="false">
					<option value="">Select Role</option>
					<option value="admin">Admin</option>
					<option value="user">User</option>
					</select>
					<div class="help-block"></div>
					</div>
					</div>	
					</div>


					<div class="col-md-6">
					<div class="form-group">
					<h5>User Name<span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="username" class="form-control" required="" data-validation-required-message="This field is required" autocomplete="off"> <div class="help-block"></div></div>
					</div>


					</div>


					</div> <!-- End of Row 1 -->

					<div class="row"><!--  Row 2  -->
						<div class="col-md-6">
							<div class="form-group">
								<h5>Email Address<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="useremail" class="form-control" required="" data-validation-required-message="This field is required"autocomplete="off">
									<div class="help-block"></div></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<h5>Password <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="userpassword" class="form-control" required="" data-validation-required-message="This field is required"autocomplete="off"> <div class="help-block"></div></div>
							</div>
						</div>					
					</div><!-- End of Row 2 -->
						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection