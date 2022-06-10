@extends('admin.admin_master')
@section ('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

	  	<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add New Bank</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('bank.store')}}" >
						@csrf
					  <div class="row">
						<div class="col-12">	

					<div class="row"><!--  Row 1  -->



					<div class="col-md-6">
					<div class="form-group">
					<h5>Bank Name<span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="bankname" class="form-control" required="" data-validation-required-message="This field is required" autocomplete="off"> <div class="help-block"></div></div>
					</div>


					</div>
					</div> <!-- End of Row 1 -->

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