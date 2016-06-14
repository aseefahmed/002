@extends('layouts.main')

@section('content')
    <section id="page-content">

        <!-- Start page header -->
        <div id="tour-11" class="header-content">
            <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div><!-- /.header-content -->
        <!--/ End page header -->

        <!-- Start body content -->
        <div class="body-content animated fadeIn">

            <div id="tour-12" class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="mini-stat clearfix bg-facebook rounded">
                        <span class="mini-stat-icon"><i class="fa fa-facebook fg-facebook"></i></span>
                        <div class="mini-stat-info">
                            <span class="counter">5,762</span>
                            Facebook Like
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="mini-stat clearfix bg-twitter rounded">
                        <span class="mini-stat-icon"><i class="fa fa-twitter fg-twitter"></i></span>
                        <div class="mini-stat-info">
                            <span class="counter">7,153</span>
                            Twitter Followers
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="mini-stat clearfix bg-googleplus rounded">
                        <span class="mini-stat-icon"><i class="fa fa-google-plus fg-googleplus"></i></span>
                        <div class="mini-stat-info">
                            <span class="counter">793</span>
                            Google+ Posts
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="mini-stat clearfix bg-bitbucket rounded">
                        <span class="mini-stat-icon"><i class="fa fa-bitbucket fg-bitbucket"></i></span>
                        <div class="mini-stat-info">
                            <span class="counter">8,932</span>
                            Repository
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            
            <div id="show_status" class="row col-md-12"></div>
            <div class="row col-md-12">
                <div class="col-md-4"></div>
                <div id="ajax_preloader" class="col-md-8"></div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <!-- Start widget visitor chart -->
                    <div id="tour-13" class="panel stat-stack widget-visitor rounded shadow">
                        <div class="panel-body no-padding br-3">
                            <div class="row row-merge">
                                <div class="col-sm-12">
                                    <div class="table-responsive rounded mb-20">
                                        <div id="ajax-table">
                                            <form class="form-horizontal form-bordered" role="form" method="POST" name="add_order_form" id="add_order_form">
                                                <div class="form-body">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Supplier / Agent</label>
                                                        <div class="col-sm-4">
                                                            <select class="select2js form-control input-sm" name="supplier" disabled="disabled">
                                                                @foreach($suppliers as $supplier)
                                                                    <option value="{{$supplier->id}}" <?php if($orders[0]->supplier==$supplier->id){echo "selected";}?>>{{ $supplier->supplier_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="select2js form-control input-sm" name="agent" disabled="disabled">
                                                                @foreach($agents as $agent)
                                                                    <option value="{{$agent->id}}" <?php if($orders[0]->agent==$agent->id){echo "selected";}?>>{{ $agent->agent_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Buyer / Brand</label>
                                                        <div class="col-sm-4">
                                                            <select class="select2js form-control input-sm" name="buyer" disabled="disabled">
                                                                @foreach($buyers as $buyer)
                                                                    <option value="{{$buyer->id}}" <?php if($orders[0]->buyer==$buyer->id){echo "selected";}?>>{{ $buyer->buyer_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="select2js form-control input-sm" name="brand" disabled="disabled">
                                                                @foreach($brands as $brand)
                                                                    <option value="{{$brand->id}}" <?php if($orders[0]->brand==$brand->id){echo "selected";}?>>{{ $brand->brand_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div><!-- /.form-group -->


                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Style / Delivary Date</label>
                                                        <div class="col-sm-4">
                                                            <select class="select2js form-control input-sm" name="style" disabled="disabled">
                                                                @foreach($styles as $style)
                                                                    <option value="{{$style->id}}" <?php if($orders[0]->style==$style->id){echo "selected";}?>>{{ $style->style_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control input-sm inputmaskjs" readonly="readonly" name="delivery_date" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="Date">
                                                        </div>
                                                    </div><!-- /.form-group -->


                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">GG / Qty / FOB / Weight per Dzn</label>
                                                        <div class="col-sm-2">
                                                            <input class="form-control" name="gg" type="text" value="{{$orders[0]->gg}}" placeholder="GG" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input class="form-control" id="new_order_qty_from_buyer" value="{{$orders[0]->qty}}" name="qty" type="number" placeholder="Qty" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input class="form-control" name="fob" id="fob_per_qty" value="{{$orders[0]->fob}}" type="number" placeholder="FOB ($)" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input class="form-control" name="weight_per_dzn" value="{{$orders[0]->weight_per_dzn}}" id="weight_dzn" type="number" placeholder="Weight/Dzn" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

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
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Qty per Dzn /Total Yarn Weight / Total Yarn Cost</label>
                                                        <div class="col-sm-2">
                                                            <input class="form-control" name="qty_per_dzn" id="qty_per_dzn" value="{{$orders[0]->qty_per_dzn}}" type="number" placeholder="Qty/Dzn" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input class="form-control" name="total_yarn_weight" value="{{$orders[0]->total_yarn_weight}}" id="total_yarn_weight" type="number" placeholder="Total Yarn Weight" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input class="form-control" name="total_yarn_cost" value="{{$orders[0]->total_yarn_cost}}" id="total_yarn_cost" type="number" placeholder="Total Yarn Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Accessories Rate / Total Accessories Cost</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->acc_rate}}" name="acc_rate" id="acc_rate" type="number" placeholder="Accessories Rate" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->total_acc_cost}}" name="total_acc_cost" id="total_acc_cost" type="number" placeholder="Total Accessories Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Button Cost / Total Button Cost</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->btn_cost}}" name="btn_cost" id="btn_cost_dzn" type="number" placeholder="Button Rate" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control"  value="{{$orders[0]->total_btn_cost}}" name="total_btn_cost" id="total_btn_cost" type="number" placeholder="Total Button Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->


                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Zipper Cost / Total Zipper Cost</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->zipper_cost}}" name="zipper_cost" id="zipper_cost_dzn" type="number" placeholder="Zipper Rate" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->total_zipper_cost}}" name="total_zipper_cost" id="total_zipper_cost" type="number" placeholder="Total Zipper Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Print Cost / Total Print Cost</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->print_cost}}" name="print_cost" id="print_cost_dzn" type="number" placeholder="Print Rate" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->total_print_cost}}" name="total_print_cost" id="total_print_cost" type="number" placeholder="Total Print Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Total FOB / Total Cost</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->total_fob}}" name="total_fob"  id="total_fob" type="number" placeholder="Total FOB" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control"  value="{{$orders[0]->total_cost}}"name="total_cost" id="total_cost" type="number" placeholder="Total Cost" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Balance Amount / Cost of Making</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control"  value="{{$orders[0]->balance_amount}}"name="balance_amount" id="balance_amount" type="number" placeholder="Balance Amount" readonly="readonly">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" value="{{$orders[0]->cost_of_making}}" name="cost_of_making" id="cost_of_making" type="number" placeholder="Cost of Making" readonly="readonly">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">L/C Confirmed?</label>
                                                        <div class="col-sm-4 ckbox ckbox-success">
                                                            <input id="l_c_confirmed" value="1" type="checkbox" name="lc_confirmed">
                                                            <label for="l_c_confirmed">Yes</label>
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group fileinput fileinput-new" data-provides="fileinput" id="show_lc_doc_div" style="display:none">
                                                        <label class="col-sm-3 text-right control-label">Upload L/C Document</label>
                                                        <div class="col-sm-8">
                                                            <input class="input-file-js" type="file" name="l_c_doc" class="file-loading">
                                                        </div>                                
                                                    </div><!-- /.form-group -->
                                                    

                                                </div><!-- /.form-body -->
                                            </form>
                                        </div>
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.col-sm-8 -->
                            </div><!-- /.row -->
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End widget visitor chart -->

                </div>
                <div class="col-md-3">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">

                            <div class="widget-wrapper bg-theme rounded">
                                    <img width="100%" class="widget-wrapper bg-theme rounded" data-no-retina src="{{ url('public/img/uploads/orders/'.$orders[0]->photo) }}" alt="..."/>
                                    
                            </div>
                            
                            <div class="divider"></div>
                            <!-- Start weather widget -->
                            <div id="tour-14" class="widget-wrapper bg-theme rounded">
                                <div class="weather-current-city">
                                    <img data-no-retina src="{{ url('public/img/media/building/5.jpg') }}" alt="..."/>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                                            <span class="current-city">
                                                                Yogyakarta, ID
                                                            </span>
                                                            <span class="current-temp">
                                                                27&deg;C
                                                            </span>
                                        </div><!-- /.col-md-7 -->
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <span class="current-day-icon">
                                                              <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                                            </span>
                                        </div><!-- /.col-md-5 -->
                                    </div><!-- /.row -->
                                    <span class="current-day"> Monday, 8 December </span>
                                </div><!-- /.weather-current-city -->
                                <div class="row">
                                    <ul class="days">
                                        <li class="col-md-4 col-sm-4 col-xs-4">
                                            <strong>Tue</strong>
                                            <canvas id="snow" width="45" height="45"></canvas>
                                            <span>20°</span>
                                        </li>
                                        <li class="col-md-4 col-sm-4 col-xs-4"><strong>Fri</strong>
                                            <canvas id="rain" width="45" height="45"></canvas>
                                            <span>18°</span>
                                        </li>
                                        <li class="col-md-4 col-sm-4 col-xs-4"><strong>Sat</strong>
                                            <canvas id="sleet" width="45" height="45"></canvas>
                                            <span>24°</span>
                                        </li>
                                    </ul><!-- /.days -->
                                </div><!-- /.row -->
                            </div><!-- /.widget-wrapper -->
                            <!--/ End weather widget -->

                            <div class="divider"></div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">

                            <!-- Start blog post widget -->
                            <div id="tour-15" class="blog-item blog-quote rounded shadow">
                                <div class="quote quote-lilac">
                                    <a href="page-blog-single.html">
                                        Stay Hungry, Stay Foolish
                                        <small class="quote-author">- Steve Jobs -</small>
                                    </a>
                                </div>
                                <div class="blog-details">
                                    <ul class="blog-meta">
                                        <li>By: <a href="#">Djava UI</a></li>
                                        <li>Jun 08, 2014</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div><!-- blog-details -->
                            </div><!-- blog-item -->
                            <!--/ End blog post widget -->

                        </div>
                    </div>

                </div>
            </div><!-- /.row -->

        </div><!-- /.body-content -->
        <!--/ End body content -->

        <!-- Start footer content -->
        <footer class="footer-content">
                    <span id="tour-19">
                        2014 - <span id="copyright-year"></span> &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                    </span>
            <span id="tour-20" class="pull-right">0.01 GB(0%) of 15 GB used</span>
        </footer><!-- /.footer-content -->
        <!--/ End footer content -->

    </section>
@stop
