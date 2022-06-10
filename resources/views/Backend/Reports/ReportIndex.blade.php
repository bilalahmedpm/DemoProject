@extends('admin.admin_master')
@section ('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

	  	<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Bank Branches Report</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('bank.report')}}" >
						@csrf
					  <div class="row">
						<div class="col-12">	

					<div class="row"><!--  Row 1  -->



					<div class="col-md-4">
					<div class="form-group">
					<h5>Select Bank<span class="text-danger">*</span></h5>
					<div class="controls">
                        <select name="bankid" id="select" required="" class="form-control" aria-invalid="false">
                        <option value="">Select Bank</option>
                        @foreach ($banks as $bank)
                        <option value="{{$bank->id}}">{{$bank->bankname}}</option>
                        @endforeach
                        </select>
					</div>


					</div>
					</div> <!-- End of Row 1 -->


						</div>
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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