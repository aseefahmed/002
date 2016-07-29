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
            
            
            <div class="row">
                <div class="col-md-9">
                    <!-- Start widget visitor chart -->
                    <div id="tour-13" class="panel stat-stack widget-visitor rounded shadow">
                        <div class="panel-body no-padding br-3">
                            <div class="row row-merge">
                                <div class="col-sm-12">
                                    <div class="table-responsive rounded mb-20">
                                        <div>
                                            <form class="form-horizontal form-bordered" role="form" method="POST" name="update_order_form" id="update_order_form">
                                                <input type="hidden" value="xs" name="order_id">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Requisition Title</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control input-sm" readonly="readonly" name="requisition_type" value="{{$requisition[0]->name}}">
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Requisition ID</label>
                                                        <div class="col-sm-3">
                                                            <input class="form-control input-sm" readonly="readonly" name="requisition_type" value="{{$requisition[0]->id}}">
                                                        </div>
                                                        <label class="col-sm-3 control-label">Requisition Type</label>
                                                        <div class="col-sm-3">
                                                            <input class="form-control input-sm" readonly="readonly" name="requisition_type" value="{{$requisition[0]->type}}">
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Sent By</label>
                                                        <div class="col-sm-3">
                                                            <input class="form-control input-sm" readonly="readonly" name="requisition_type" value="{{$requisition[0]->first_name}} {{$requisition[0]->last_name}}">
                                                        </div>
                                                        <label class="col-sm-3 control-label">Sent At</label>
                                                        <div class="col-sm-3">
                                                            <input class="form-control input-sm" readonly="readonly" name="requisition_type" value="{{date_format(date_create($requisition[0]->created_at), 'dS M, Y')}}">
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                    
                                                    <table class="table table-striped table-lilac">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Order No</th>
                                                            <th>Yarn Cost ($)</th>
                                                            <th>Acc. Cost ($)</th>
                                                            <th>Button Cost ($)</th>
                                                            <th>Zipper Cost ($)</th>
                                                            <th>Print Cost ($)</th>
                                                            <th class="text-right">TOTAL($)</th>
                                                        </tr>
                                                        </thead>
                                                        <!--tbody section is required-->
                                                        <tbody>
                                                        {{--*/$serial=1/*--}}
                                                        {{--*/$row=0/*--}}
                                                        {{--*/$str= ""/*--}}
                                                        @foreach($items as $key=>$item)
                                                        {{--*/$item = unserialize($item->items_val)/*--}}
                                                        {{--*/$row++/*--}}
                                                            <tr>
                                                                @foreach($item as $value)
                                                                    {{--*/$str .= $value['order_no']."_"/*--}}
                                                                    {{--*/$str .= $value['yarn_amount']."_"/*--}}
                                                                    {{--*/$str .= $value['acc_amount']."_"/*--}}
                                                                    {{--*/$str .= $value['btn_amount']."_"/*--}}
                                                                    {{--*/$str .= $value['zipper_amount']."_"/*--}}
                                                                    {{--*/$str .= $value['print_amount']."*"/*--}}
                                                                    {{--*/$total = $value['yarn_amount'] + $value['acc_amount'] + $value['btn_amount'] + $value['zipper_amount'] + $value['print_amount'] /*--}}
                                                                    <td><?php echo $serial;?></td>
                                                                    <td><?php echo $value['order_no'];?></td>
                                                                    <td><?php echo $value['yarn_amount'];?></td>
                                                                    <td><?php echo $value['acc_amount'];?></td>
                                                                    <td><?php echo $value['btn_amount'];?></td>
                                                                    <td><?php echo $value['zipper_amount'];?></td>
                                                                    <td><?php echo $value['print_amount'];?></td>
                                                                    <td class="text-right"><?php echo $total;?></td>
                                                                @endforeach                                                                
                                                            </tr>
                                                        {{--*/$serial++/*--}}
                                                        @endforeach
                                                            <tr>
                                                                <td class="bg bg-success" colspan="7">Sub Total</td>
                                                                <td class="bg bg-primary text-right">{{$requisition[0]->requested_amount}}</td>
                                                            </tr>
                                                        </tbody>
                                                        <!--tfoot section is optional-->
                                                        <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Order No</th>
                                                            <th>Yarn Cost ($)</th>
                                                            <th>Acc. Cost ($)</th>
                                                            <th>Button Cost ($)</th>
                                                            <th>Zipper Cost ($)</th>
                                                            <th>Print Cost ($)</th>
                                                            <th class="text-right">TOTAL($)</th>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div><!-- /.form-body -->
                                                
                                            </form>
                                        </div>
                                        
                                    </div><!-- /.table-responsive -->
                                    
                                </div><!-- /.col-sm-8 -->
                               
                                @if($requisition[0]->flag == 2)
                                    <div class="row">
                                        <div class="btn btn-success col-md-4 action_on_requisition" id="{{$requisition[0]->id}}-APPROVE-{{$str}}">Approve</div>
                                        <div class="btn btn-warning col-md-4 action_on_requisition" id="{{$requisition[0]->id}}-SEND_BACK">Send Back</div>
                                        <div class="btn btn-danger col-md-4 action_on_requisition" id="{{$requisition[0]->id}}-REJECT">Reject</div>
                                    </div>
                                @elseif($requisition[0]->flag == 3)
                                    <div class="row">
                                        <button class="btn btn-warning col-md-4" id="APPROVED" disabled="disabled">APPROVED</button>
                                    </div>
                                @elseif($requisition[0]->flag == 4)
                                    <div class="row">
                                        <button class="btn btn-warning col-md-4" id="REJECTED" disabled="disabled">REJECTED</button>
                                    </div>
                                @endif
                                
                                <div class="row col-md-12">
                                    <div id="ajax_preloader"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End widget visitor chart -->

                </div>
                <div class="col-md-3">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">

                            
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
