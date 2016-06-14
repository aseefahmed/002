@extends('layouts.main')

@section('content')
<section id="page-content">
    <div class="body-content animated fadeIn">
        
        <div class="row">
            <div id="show_status" class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start password validation -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Add Employee</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding panel-tab rounded shadow">

                        <!-- Start tabs heading -->
                                    <div class="panel-heading no-padding">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab1-1" data-toggle="tab">
                                                    <i class="fa fa-user"></i>
                                                    <div>
                                                        <span class="text-strong">Step 1</span>
                                                        <span>Personal Details</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab1-2" data-toggle="tab">
                                                    <i class="fa fa-file-text"></i>
                                                    <div>
                                                        <span class="text-strong">Step 2</span>
                                                        <span>Official Details</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab1-3" data-toggle="tab">
                                                    <i class="fa fa-credit-card"></i>
                                                    <div>
                                                        <span class="text-strong">Step 3</span>
                                                        <span>Bank Details</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab1-4" data-toggle="tab">
                                                    <i class="fa fa-check-circle"></i>
                                                    <div>
                                                        <span class="text-strong">Step 4</span>
                                                        <span>Login Details</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.panel-heading -->
                                    <!--/ End tabs heading -->
                                    
                                    <!-- Start tabs content -->
                                    
                                    <div class="panel-body">
                                        <form method="POST" class="tab-content form-horizontal" id="add-employee-form" name="add-employee-form">
                                            <div class="tab-pane fade in active inner-all" id="tab1-1">
                                                <h4 class="page-header">Personal Details</h4>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Title</label>
                                                    <div class="col-sm-4">
                                                        <select class="select2js form-control input-sm" name="title">
                                                            <option value="Md.">Md.</option
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Miss">Miss</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                            <option value="Dr.">Dr.</option>>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">First Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="first_name" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Last Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="last_name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Date of Birth</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control input-sm inputmaskjs" name="dob" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="col-sm-2">Gender</label>
                                                    <div class="col-sm-4">
                                                        <div class="rdio rdio-theme inline mr-10">
                                                            <input checked="checked" id="male" value="1" type="radio" name="gender">
                                                            <label for="male">Male</label>
                                                        </div>
                                                        <div class="rdio rdio-theme inline">
                                                            <input id="female" type="radio" value="0" name="gender">
                                                            <label for="female">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Address</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="address_line_1" placeholder="Address Line 1">
                                                        <input type="text" class="form-control input-sm" name="address_line_2" placeholder="Address Line 2">
                                                        <input type="text" class="form-control input-sm" name="town" placeholder="Town">
                                                        <input type="text" class="form-control input-sm" name="city" placeholder="City">
                                                        <input type="text" class="form-control input-sm" name="postcode" placeholder="Post">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Telephone</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="tel" placeholder="Telephone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Mobile</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="mob" placeholder="Mobile">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group fileinput fileinput-new" data-provides="fileinput">
                                                        <label class="col-sm-2 text-left control-label">Upload Image</label>
                                                        <div class="col-sm-4">
                                                            <input class="input-file-js" type="file" name="photo" accept="image/*" class="file-loading">
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                </div>  
                                            </div>
                                            
                                            <div class="tab-pane fade active inner-all" id="tab1-2">
                                                <h4 class="page-header">Official Details</h4>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Employee No.</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="emp_no" placeholder="Employee No.">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Department</label>
                                                    <div class="col-sm-4">
                                                        <select class="select2js form-control input-sm" name="department_id">
                                                            @foreach($departments as $department)
                                                                <option value="{{$department->id}}">{{ $department->department_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Designation</label>
                                                    <div class="col-sm-4">
                                                        <select class="select2js form-control input-sm" name="designation_id">
                                                            @foreach($designations as $designation)
                                                                <option value="{{$designation->id}}">{{ $designation->designation_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Role</label>
                                                    <div class="col-sm-4">
                                                        <select class="select2js form-control input-sm" name="emp_role">
                                                            <option value="1">Employee</option>
                                                            <option value="2">HR</option>
                                                            <option value="3">Manager</option>
                                                            <option value="4">Administrator</option>
                                                            <option value="5">MD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="col-sm-2">Department Head?</label>
                                                    <div class="col-sm-4">
                                                        <div class="rdio rdio-theme inline mr-10">
                                                            <input id="dept_head_yes" name="dept_head" value="1" type="radio">
                                                            <label for="dept_head_yes">Yes</label>
                                                        </div>
                                                        <div class="rdio rdio-theme inline">
                                                            <input id="dept_head_no" name="dept_head" value="0" type="radio" checked="checked">
                                                            <label for="dept_head_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Joining Date</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control input-sm inputmaskjs" name="join_date" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="Joining Date">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Salary</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="salary" placeholder="Salary">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Supervisor</label>
                                                    <div class="col-sm-4">
                                                        <select class="select2js form-control input-sm" name="supervisor">
                                                            @foreach($supervisors as $supervisor)
                                                                <option value="{{$supervisor->id}}">{{ $supervisor->first_name }} {{ $supervisor->last_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane fade inner-all" id="tab1-3">
                                                <h4 class="page-header">Bank Details</h4>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2">Account Holder</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="acc_holder" placeholder="Account Holder">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Account No.</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="acc_no" placeholder="Account No.">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Branch</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="branch" placeholder="Branch">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">City</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="acc_city" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">IFSC Code</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="ifsc_code" placeholder="IFCS Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade inner-all" id="tab1-4">
                                                <h4 class="page-header">Login Details</h4>
                                                <div class="form-group">
                                                    <label class="col-sm-2">User Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm" name="username" placeholder="User Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Password</label>
                                                    <div class="col-sm-4">
                                                        <input type="password" class="form-control input-sm" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Confirm Password</label>
                                                    <div class="col-sm-4">
                                                        <input type="password" class="form-control input-sm" name="confirm_password" placeholder="Confirm password">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <a class="btn btn-success" id="add-employee-btn">Add Employee</a>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div id="ajax_preloader"></div>
                                                </div>
                                        </form>
                                    </div><!-- /.panel-body -->
                                    <!--/ End tabs content -->

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End password validation -->

            </div>
        </div><!-- /.row -->
   </div>
</section>
@stop
