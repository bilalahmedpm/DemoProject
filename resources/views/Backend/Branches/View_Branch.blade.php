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
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>
								<th>Bank ID</th>
								<th>Branch Code</th>
                                <th>Branch Address</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>

							@foreach($branches as $key => $branch)		
							<tr>
								<td>{{$key +1}}</td>
								<td>{{$branch['Banks']['bankname']}}</td>
								<td>{{$branch->branchcode}}</td>
                                <td>{{$branch->branchaddress}}</td>                                
								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</td>
							</tr>
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