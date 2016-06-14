@extends('layouts.main')

@section('content')
<section id="page-content">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <!-- Start password validation -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Suppliers List</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">

                        <!-- Start datatable -->
                        <div id="show_status" class="row col-md-12"></div>
                        <div class="row col-md-12 alert">
                            <a class="btn btn-bitbucket" id="add-supplier-btn"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Add Supplier</a>
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-4"></div>
                            <div id="ajax_preloader" class="col-md-8"></div>
                        </div>
                        <div id="ajax-table">
                            <table class="table table-striped table-lilac datatable-ajax">
                                <thead>
                                <tr>
                                    <th>Supplier</th>
                                    <th>Country</th>
                                    <th>Contact Person</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!--tbody section is required-->
                                <tbody>
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td><?php echo $supplier->supplier_name;?></td>
                                        <td><?php echo $supplier->country_name;?></td>
                                        <td><?php echo $supplier->contact_person;?></td>
                                        <td><?php echo $supplier->email;?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a style="cursor: pointer;" href="{{ url('/production/view-supplier/'.$supplier->id) }}"><i class="fa fa-eye"></i> View</a></li>
                                                    <li class="divider"></li>
                                                    <li><a style="cursor: pointer;" onclick="delete_supplier({{ $supplier->id }})"><i class="fa fa-trash"></i> Delete</a></li>
                                                    <li class="divider"></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--tfoot section is optional-->
                                <tfoot>
                                <tr>
                                    <th>Supplier</th>
                                    <th>Country</th>
                                    <th>Contact Person</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            
                        <!--/ End datatable --

        </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End password validation -->

            </div>
        </div><!-- /.row -->
   </div>
    <div class="modal modal-success fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document" style="margin: 150px auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Supplier</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-bordered" role="form" method="POST" name="add_supplier_form" id="add_supplier_form">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" name="supplier_name" placeholder="Supplier Name">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" name="address_line_1" placeholder="Address Line 1">
                                    <input type="text" class="form-control input-sm" name="address_line_2" placeholder="Address Line 2">
                                    <input type="text" class="form-control input-sm" name="town" placeholder="Town">
                                    <input type="text" class="form-control input-sm" name="city" placeholder="City">
                                    <input type="text" class="form-control input-sm" name="post_code" placeholder="Post Code">
                                    <select class="select2js form-control input-sm" name="country_code">
                                        @foreach($countries as $country)
                                            <option value="{{$country->country_code}}">{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Person</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" name="contact_person" placeholder="Contact Person">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" name="email" placeholder="Email Address">
            -                    </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Number</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" name="contact_number" placeholder="Contact Number">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier Type</label>
                                <div class="col-sm-7">
                                    <select class="select form-control input-sm" name="supplier_type">
                                        @foreach($supplier_types as $supplier_type)
                                            <option value="{{$supplier_type->id}}">{{ $supplier_type->supplier_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.form-group -->

                        </div><!-- /.form-body -->
                    </form>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-warning btn-lg btn-slideright"  data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary btn-lg btn-slideright" id="add-supplier-confirmation">Add Supplier</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@stop
