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
                            <h3 class="panel-title">Orders List</h3>
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
                            <a class="btn btn-bitbucket" id="add-supplier-btn"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Add Orders</a>
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-4"></div>
                            <div id="ajax_preloader" class="col-md-8"></div>
                        </div>
                        <div id="ajax-table">
                            <table class="table table-striped table-lilac datatable-ajax">
                                <thead>
                                <tr>
                                    <th>&nbps;</th>
                                    <th width="5%">#</th>
                                    <th>Supplier</th>
                                    <th>Total FOB</th>
                                    <th>Delivary Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!--tbody section is required-->
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td width="10%"><img height="70px" width="70px" src="{{ url('/public/img/uploads/orders/'.$order->photo)}}"></td>
                                        <td width="10%"><?php echo $order->id;?></td>
                                        <td><?php echo $order->supplier_name;?></td>
                                        <td><?php echo $order->total_fob;?></td>
                                        <td><?php echo $order->delivery_date;?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a style="cursor: pointer;" href="{{ url('/production/order-details/'.$order->id) }}"><i class="fa fa-eye"></i> View</a></li>
                                                    <li class="divider"></li>
                                                    <li><a style="cursor: pointer;" onclick="delete_supplier({{ $order->id }})"><i class="fa fa-trash"></i> Delete</a></li>
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
                                    <th>&nbps;</th>
                                    <th width="5%">#</th>
                                    <th>Supplier</th>
                                    <th>Total FOB</th>
                                    <th>Delivary Date</th>
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
        <div class="modal-dialog" role="document" style="width:900px; margin: 150px auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Order</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-bordered" role="form" method="POST" name="add_order_form" id="add_order_form">
                        <div class="form-body">
                            <div class="form-group fileinput fileinput-new" data-provides="fileinput">
                                <label class="col-sm-3 text-right control-label">Upload Image</label>
                                <div class="col-sm-8">
                                    <input class="input-file-js" type="file" name="photo" accept="image/*" class="file-loading">
                                </div>                                
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier / Agent</label>
                                <div class="col-sm-4">
                                    <select class="select2js form-control input-sm" name="supplier">
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">{{ $supplier->supplier_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="select2js form-control input-sm" name="agent">
                                        @foreach($agents as $agent)
                                            <option value="{{$agent->id}}">{{ $agent->agent_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.form-group -->
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Buyer / Brand</label>
                                <div class="col-sm-4">
                                    <select class="select2js form-control input-sm" name="buyer">
                                        @foreach($buyers as $buyer)
                                            <option value="{{$buyer->id}}">{{ $buyer->buyer_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="select2js form-control input-sm" name="brand">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.form-group -->
                            
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Style / Delivary Date</label>
                                <div class="col-sm-4">
                                    <select class="select2js form-control input-sm" name="style">
                                        @foreach($styles as $style)
                                            <option value="{{$style->id}}">{{ $style->style_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control input-sm inputmaskjs" name="delivery_date" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="Date">
                                </div>
                            </div><!-- /.form-group -->
                          

                            <div class="form-group">
                                <label class="col-sm-3 control-label">GG / Qty / FOB / Weight per Dzn</label>
                                <div class="col-sm-2">
                                    <input class="form-control" name="gg" type="text" placeholder="GG">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" id="new_order_qty_from_buyer" name="qty" type="number" placeholder="Qty">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" name="fob" id="fob_per_qty" type="number" placeholder="FOB ($)">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" name="weight_per_dzn" id="weight_dzn" type="number" placeholder="Weight/Dzn">
                                </div>
                            </div><!-- /.form-group -->
                            <input type="hidden" name="compositions" id="compositions">
                            <div class="form-group" id="composition_group">
                                <label class="col-sm-3 control-label">Compositions</label>
                                <div class="col-sm-2">
                                    <input class="form-control" name="composition_name"  id="composition_name" type="text" placeholder="Name">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" name="composition_percentage" id="composition_percentage" type="number" placeholder="Percentage">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" name="composition_yarn_rate" id="composition_yarn_rate" type="number" placeholder="Cost">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" name="composition_wastage" id="composition_wastage" type="number" placeholder="Wastage">
                                </div>
                                <div class="col-sm-1">
                                    <a class="btn btn-success" id="composition_plus"><i class="fa fa-plus"></i></a>
                                    <a class="btn btn-primary" id="composition_refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                                <div id="composition-div-group">
                                    
                                </div>
                            </div><!-- /.form-group -->
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Qty per Dzn /Total Yarn Weight / Total Yarn Cost</label>
                                <div class="col-sm-2">
                                    <input class="form-control" name="qty_per_dzn" id="qty_per_dzn" type="number" placeholder="Qty/Dzn" readonly="readonly">
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control" name="total_yarn_weight" id="total_yarn_weight" type="number" placeholder="Total Yarn Weight" readonly="readonly">
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control" name="total_yarn_cost" id="total_yarn_cost" type="number" placeholder="Total Yarn Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Accessories Rate / Total Accessories Cost</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="acc_rate" id="acc_rate" type="number" placeholder="Accessories Rate">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_acc_cost" id="total_acc_cost" type="number" placeholder="Total Accessories Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Button Cost / Total Button Cost</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="btn_cost" id="btn_cost_dzn" type="number" placeholder="Button Rate">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_btn_cost" id="total_btn_cost" type="number" placeholder="Total Button Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Zipper Cost / Total Zipper Cost</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="zipper_cost" id="zipper_cost_dzn" type="number" placeholder="Zipper Rate">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_zipper_cost" id="total_zipper_cost" type="number" placeholder="Total Zipper Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Print Cost / Total Print Cost</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="print_cost" id="print_cost_dzn" type="number" placeholder="Print Rate">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_print_cost" id="total_print_cost" type="number" placeholder="Total Print Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Total FOB / Total Cost</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_fob"  id="total_fob" type="number" placeholder="Total FOB" readonly="readonly">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="total_cost" id="total_cost" type="number" placeholder="Total Cost" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Balance Amount / Cost of Making</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="balance_amount" id="balance_amount" type="number" placeholder="Balance Amount" readonly="readonly">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="cost_of_making" id="cost_of_making" type="number" placeholder="Cost of Making" readonly="readonly">
                                </div>
                            </div><!-- /.form-group -->

                        </div><!-- /.form-body -->
                    </form>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-warning btn-lg btn-slideright"  data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary btn-lg btn-slideright" id="add-order-confirmation">Add Order</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@stop
