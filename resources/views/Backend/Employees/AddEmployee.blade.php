@extends('admin.admin_master')
@section('admin')
{{-- {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>         --}}




<div class="content-wrapper">
<div class="container-full">
<!-- Content Header (Page header) -->


<section class="content">

<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Group Insurance Entry Form  </h4>

</div>
<!-- /.box-header -->
<div class="box-body">

<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Employee Details</h4>
<hr class="my-15">
<div class="row">
    <div class="col">

        <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">



                    <div class="row">
                        <!-- 1st Row -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Personal Number  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="pno" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-3">

            <div class="form-group">
                <h5>Employee CNIC <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" class="form-control" name="employeecnic" data-inputmask="'mask':[ '99999-9999999-9']" data-mask required="">
                </div>
            </div>

                        </div> <!-- End Col md 4 -->



                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Employee Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="employeename" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Father Name / Husband Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="fathername" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 1stRow -->


                    <div class="row">
                        <!-- 2nd Row -->


                        <div class="col-md-3">

                <div class="form-group">
                    <h5>Date of Birth <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" class="form-control" name="dateofbirth" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                </div>

                            

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Department <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="department" required=""
                                        class="form-control">
                                        <option value="" selected="" disabled=""> Select Department  </option>
                                        @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Designation <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="designation" required=""
                                        class="form-control">
                                        <option value="" selected="" disabled="">Select Designation</option>
                                        @foreach ($designations as $designation)
                                        <option value="{{ $designation->designationcode }}">{{ $designation->designationdesc }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                            <h5>Grade<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="grade" required=""
                                        class="form-control">
                                        <option value="" selected="" disabled="">Select Grade</option>
                                        @foreach ($grades as $grade)
                                        <option value="{{ $grade->grade}}">{{ $grade->grade }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->





                    </div> <!-- End 2nd Row -->



                    <div class="row">
                        <!-- 3rd Row -->


                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>GI Type<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="gitype" id="religion" required=""
                                        class="form-control">
                                        <option value="" selected="" disabled="">Select
                                            Case Type
                                        </option>
                                        <option value="01">Retirement</option>
                                        <option value="02">Death</option>
                                        <option value="03">Death After Retirement</option>

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

            <div class="form-group">
                <h5>Retirement Date <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="retirementdate" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-3">

        <div class="form-group">
            <h5>Date of Death<span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="dateofdeath" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Legal Heirs<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="legalheirs" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 3 -->


                        
                    </div> <!-- End 3rd Row -->




                    <div class="row">
                        <!-- 4TH Row -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Status<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="status" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 3 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Contribution<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="contribution" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 3 -->



                        <!-- <div class="col-md-2">

                            <div class="form-group">
                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control"
                                        id="image">
                                </div>
                            </div>


                        </div> End Col md 3 -->


                        <!-- <div class="col-md-2">

                            <div class="form-group">
                                <div class="controls">
                                    <img id="showImage"
                                        src="{{ url('') }}"
                                        style="width: 100px; width: 100px; border: 1px solid #000000;">

                                </div>
                            </div>

                        </div> End Col md 3 -->


                    </div> <!-- End 4TH Row -->

                    <h4 class="box-title text-info"><i class="ti-user mr-15"></i>Beneficiary Details</h4>
                    <hr class="my-15">


                    <div class="row">
                        <!-- 5th  Row -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Legal Heir CNIC<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" class="form-control" name="heircnic" data-inputmask="'mask':[ '99999-9999999-9']" data-mask autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-3">

            <div class="form-group">
                <h5>Legal Heir Name<span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="heirname" class="form-control" autocomplete="off">
                </div>
            </div>

                        </div> <!-- End Col md 4 -->



                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Relation<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="relation" id="religion" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Relation </option>
                                        <option value="self">Self</option>
                                        <option value="First Widow">First Widow</option>
                                        <option value="Second Widow">Second Widow</option>
                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 5thRow -->

                    <div class="row">
                        <!-- 6th  Row -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Bank<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select class="form-select form-control" id="bank" name="bankname" value=""
                                    required>
                                    <option value="">Select Bank</option>

                                    @foreach ($banks as $bank)

                                        <option value="{{ $bank->id }}">{{ $bank->bankname }}</option>

                                    @endforeach

                                </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Branch<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select class="form-select form-control" id="branch" name="bankbranch"
                                    value="{{ old('branch') }}" required>
                                    <option value=""> Select Branch </option>
                                </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Account Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="accountnumber" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->

                        <div class="col-md-3">

                            <div class="form-group">
                                <h5>Amount<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="amount" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 6thRow -->

                    


                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info mb-5"
                            value="Submit">
                    </div>

                    <script>
                        jQuery(document).ready(function() {
                            jQuery('#bank').change(function() {
                                let bankid = jQuery(this).val();
                            
                                jQuery.ajax ({
                                    url: '/getbankbranch',
                                    type: 'post',
                                    data: 'bankid=' + bankid + '&_token={{ csrf_token() }}',
                                    success:function(result) {
                                        jQuery('#branch').html(result)
                                    }
                                });

                            });
                        });
                    </script>
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
{{-- 
<script type="text/javascript">
$(document).ready(function() {
$('#image').change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$('#showImage').attr('src', e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});
});
</script> --}}
@endsection

@push('footer-scripts')

@endpush
