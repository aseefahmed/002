@extends('layouts.main')

@section('content')
       <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-home"></i>Report Dashboard <span>dashboard & statistics</span></h2>
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

                    <div class="row">
                        <div class="col-md-7">

                            

                            <!-- Start project progress -->
                            <div class="panel panel-default rounded shadow panel-transparant">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">List of Orders</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" id="send_requisition_form" role="form" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="requisition_id" value="{{ $requisition_id }}">
                                    <input type="hidden" name="requested_amount" value="0">
                                        <table class="table table-striped table-lilac">
                                            <thead>    
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Yarn Cost</th>
                                                    <th>Accessories Cost</th>
                                                    <th>Button Costt</th>
                                                    <th>Zipper Cost</th>
                                                    <th>Print Cost</th>
                                                    <th>Total Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody id="ajax-response">
                                                <tr id="data_not_found_label">
                                                    <td colspan="7">No Data Found</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control create-requisition-div"  disabled="disabled" name="requisition_name" placeholder="Give a name to this requisition">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Sent To</label>
                                            <div class="col-sm-8">
                                                <select class="select2js col-sm-8" name="requisition_forwarded_to" style="width:350px" disabled="disabled">
                                                    @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            &nbsp;
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 text-right"><input type="submit" class="btn btn-success create-requisition-div save_as_draft_requisition" name="action" value="Save as Draft" disabled="disabled"></div>
                                            <div class="col-md-6 text-right"><input type="submit" class="btn btn-primary create-requisition-div save_as_draft_requisition" name="action" value="Forward" disabled="disabled"></div>
                                        </div>
                                        <div id="ajax-preloader"></div>
                                    </form>
                                </div><!-- /.panel-body -->

                            </div><!-- /.panel -->
                            <!--/ End project progress -->
                            
                            <!-- Start project overview -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mini-stat-type-4 bg-success shadow">
                                        <h3>Completed</h3>
                                        <h1 class="count">25</h1>
                                        <a href="http://djavaui.com/" target="_blank" class="btn btn-success">VIEW</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mini-stat-type-4 bg-primary shadow">
                                        <h3>Working</h3>
                                        <h1 class="count">7</h1>
                                        <a href="http://djavaui.com/" target="_blank" class="btn btn-primary">VIEW</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mini-stat-type-4 bg-danger shadow">
                                        <h3>Not Done</h3>
                                        <h1 class="count">3</h1>
                                        <a href="http://djavaui.com/" target="_blank" class="btn btn-danger">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End project overview -->
                        </div>
                        <div class="col-md-5">

                            <!-- Start tabs action -->
                            <div class="panel panel-tab rounded shadow">
                                <!-- Start tabs heading -->
                                <div class="panel-heading no-padding">
                                    <ul class="nav nav-tabs" style="width: 100%;">
                                        <li class="active nav-border nav-border-top-danger hidden-xs" style="min-width: 31%;">
                                            <a href="#tab1-1" data-toggle="tab" class="text-center">
                                                REQUISITION
                                            </a>
                                        </li>
                                        <li class="nav-border nav-border-top-success" style="min-width: 31%;">
                                            <a href="#tab1-2" data-toggle="tab" class="text-center">
                                                NEW ORDERS
                                            </a>
                                        </li>
                                        <li class="nav-border nav-border-top-teal" style="min-width: 38%;">
                                            <a href="#tab1-3" data-toggle="tab" class="text-center" style="border-right: none;">
                                                UPCOMING DD
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.panel-heading -->
                                <!--/ End tabs heading -->

                                <!-- Start tabs content -->
                                <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active hidden-xs" id="tab1-1">
                                                
                                                <div class="form-group">
                                                    <form class="form-horizontal form-bordered" id="orders_requisition_form" role="form" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <div class="col-sm-8 text-left">
                                                        <button class="btn btn-primary" id="add_to_requisition" disabled="disabled">ADD TO REQUISITION</button>
                                                    </div>
                                                </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Order #</label>
                                                            <div class="col-sm-8">
                                                                <input type="hidden" name="requisition_id" value="{{$requisition_id}}">
                                                                <select name="order_id" data-placeholder="Choose Ordeer No...."  style="width:300px" class="select2js selectchoosen">
                                                                    <option value="0">Choose Order No.</option>
                                                                    @foreach($orders as $order)
                                                                        <option value="{{$order->id}}">{{ $order->id }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="orders_review"></div>
                                                    </form>
                                                    
                                                </div><!-- /.form-group -->
                                                
                                            </div>
                                            <div class="tab-pane fade" id="tab1-2">
                                                <div tabindex="5" class="media-list" style="background-color: transparent;">

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/2.png" class="media-object img-circle" alt="John Kribo"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">John Kribo</span>
                                                            <span class="media-text">Track communication history</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Task</span></span>
                                                            <span class="media-meta"><span class="label label-danger">Major</span></span>
                                                            <span class="media-meta pull-right">13 minutes</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/3.png" class="media-object img-circle" alt="Jennifer Poiyem"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Jennifer Poiyem</span>
                                                            <span class="media-text">Keep emails as attachments</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Task</span></span>
                                                            <span class="media-meta"><span class="label label-success">Normal</span></span>
                                                            <span class="media-meta pull-right">17 hours</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/4.png" class="media-object img-circle" alt="Clara Wati"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Clara Wati</span>
                                                            <span class="media-text">Analyse leads location map</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Task</span></span>
                                                            <span class="media-meta"><span class="label label-success">Minor</span></span>
                                                            <span class="media-meta pull-right">1 days</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/5.png" class="media-object img-circle" alt="Toni Mriang"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Toni Mriang</span>
                                                            <span class="media-text">Create custom report</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Task</span></span>
                                                            <span class="media-meta"><span class="label label-success">Minor</span></span>
                                                            <span class="media-meta pull-right">2 days</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/6.png" class="media-object img-circle" alt="Bella negoro"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Bella negoro</span>
                                                            <span class="media-text">Create UI design</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Task</span></span>
                                                            <span class="media-meta"><span class="label label-success">Minor</span></span>
                                                            <span class="media-meta pull-right">1 week</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/7.png" class="media-object img-circle" alt="Kim Mbako"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Kim Mbako</span>
                                                            <span class="media-text">Filter contacts on database</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Bug</span></span>
                                                            <span class="media-meta"><span class="label label-danger">Major</span></span>
                                                            <span class="media-meta pull-right">1 week</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                    <a href="page-messages.html" class="media">
                                                        <div class="pull-left"><img src="../../../img/avatar/50/8.png" class="media-object img-circle" alt="Pack Suparman"></div>
                                                        <div class="media-body">
                                                            <span class="media-heading">Pack Suparman</span>
                                                            <span class="media-text">Export to CSV system</span>
                                                            <!-- Start meta icon -->
                                                            <span class="media-meta"><span class="label label-default">Bug</span></span>
                                                            <span class="media-meta"><span class="label label-success">Minor</span></span>
                                                            <span class="media-meta pull-right">1 week</span>
                                                            <!--/ End meta icon -->
                                                        </div><!-- /.media-body -->
                                                    </a><!-- /.media -->

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab1-3">
                                                <div class="table-responsive">
                                                    <table class="table table-time-report">
                                                        <thead>
                                                        <tr>
                                                            <th>Issues, grouped by subsystem</th>
                                                            <th>Time Estimated</th>
                                                            <th>Time Spent</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="success">
                                                            <td>
                                                                <b>Subsystem: UI</b>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted">98 hours</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <b>145 hours</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2145</a>
                                                                <p class="no-margin">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                                </p>
                                                            </td>
                                                            <td class="text-right">10</td>
                                                            <td class="text-right">12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2146</a>
                                                                <p class="no-margin">
                                                                    Sed ut perspiciatis unde omnis iste natus
                                                                </p>
                                                            </td>
                                                            <td class="text-right">3</td>
                                                            <td class="text-right">6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2147</a>
                                                                <p class="no-margin">
                                                                    Voluptatem accusantium doloremque laudantium
                                                                </p>
                                                            </td>
                                                            <td class="text-right">14</td>
                                                            <td class="text-right">20h 20m</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2148</a>
                                                                <p class="no-margin">
                                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                                                </p>
                                                            </td>
                                                            <td class="text-right">2</td>
                                                            <td class="text-right">5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2149</a>
                                                                <p class="no-margin">
                                                                    Minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                                                </p>
                                                            </td>
                                                            <td class="text-right">12</td>
                                                            <td class="text-right">16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">#DJUI-2150</a>
                                                                <p class="no-margin">
                                                                    Neque porro quisquam est, qui dolorem ipsum
                                                                </p>
                                                            </td>
                                                            <td class="text-right">10</td>
                                                            <td class="text-right">45</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                </div><!-- /.panel-body -->
                                <!--/ End tabs content -->
                            </div><!-- /.panel -->
                            <!--/ End tabs action -->

                        </div>
                    </div>

<!--                    <div class="row">
                        <div class="col-md-12">
                             Start project schedule 
                            <div class="panel panel-default shadow">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">Project schedule</h3>
                                </div> /.panel-heading 
                                <div class="panel-body">
                                    <div class="calendar-toolbar">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-2 col-xs-2">
                                                 Start offcanvas btn menu calendar: This menu will take position at the top of calendar (mobile only). 
                                                <div class="btn-group hidden-lg hidden-md">
                                                    <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-bars fa-2x"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#" data-calendar-nav="prev">Prev</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-calendar-nav="today">Today</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-calendar-nav="next">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hidden-sm hidden-xs">
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-nav="prev"><i class="fa fa-angle-left"></i> Prev</button>
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-nav="today">Today</button>
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-nav="next">Next <i class="fa fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-8 col-xs-8">
                                                <div class="page-header no-border no-margin no-padding"><h4 class="no-border no-margin no-padding text-center text-capitalize">&nbsp;</h4></div>
                                            </div>
                                            <div class="col-md-5 col-sm-2 col-xs-2">
                                                 Start offcanvas btn menu calendar: This menu will take position at the top of calendar (mobile only). 
                                                <div class="btn-group calendar-menu-mobile pull-right hidden-lg hidden-md">
                                                    <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-bars fa-2x"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#" data-calendar-view="year">Prev</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-calendar-view="month">Month</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-calendar-view="week">Week</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-calendar-view="day">Day</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="pull-right hidden-sm hidden-xs">
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-view="year">Year</button>
                                                    <button class="btn btn-theme btn-sm active rounded" data-calendar-view="month">Month</button>
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-view="week">Week</button>
                                                    <button class="btn btn-theme btn-sm rounded" data-calendar-view="day">Day</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="calendar"></div>
                                </div> /.panel-body 
                            </div>
                            / End project schedule 
                        </div>
                    </div>-->

                </div><!-- /.body-content -->
                <!--/ End body content -->

                <!-- Start footer content -->
                <footer class="footer-content">
                    2014 - <span id="copyright-year"></span> &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                    <span class="pull-right">0.01 GB(0%) of 15 GB used</span>
                </footer><!-- /.footer-content -->
                <!--/ End footer content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->
@stop
