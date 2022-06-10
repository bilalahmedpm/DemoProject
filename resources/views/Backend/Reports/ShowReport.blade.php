@extends('admin.admin_master')
@section ('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Bank Branches List</h3>
				  <a href="{{route('bank.branch.add')}}" class="btn btn-rounded btn-success mb-5" style="float: right;">Add New Branch</a>
				  <a href="{{route('bankbranches.report')}}" class="btn btn-rounded btn-success mb-5" style="float: right;">Download PDF</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					@foreach($banks as $key => $bank)
					<div class="table-responsive">
							
					
					  <table id="example1" class="table table-bordered table-striped">
						<h4 style="text-align: left">{{$bank -> bankname}}</h4>
						<thead>

							
							<tr>
								<th width="5%">SL</th>
								<th width="40%">Branch Code</th>
                                <th width="40%">Branch Address</th>
								
							</tr>
						</thead>
						<tbody>
						
							@foreach($bank->Branches as $key => $bankbranches)	
							<tr>

								<td>{{$key +1}}</td>
								<td>{{$bankbranches->branchcode}}</td>
                                <td>{{$bankbranches->branchaddress}}</td>                 
							</tr>
							@endforeach
							@endforeach

						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection