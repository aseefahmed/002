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
                <div class="col-md-12">
                    <button type="button" id="edit_btn" class="btn btn-bitbucket"><i class="fa fa-edit"></i> Edit</button>
                    <button type="button" id="update_btn" class="btn btn-success" style="display:none;"><i class="fa fa-check-square"></i> Update</button>
                    <button type="button" id="cancel_btn" class="btn btn-danger" style="display:none;"><i class="fa fa-tags"></i> Cancel</button>
                </div>
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
                                            <form class="form-horizontal form-bordered" role="form" method="POST" name="update_supplier_form" id="update_supplier_form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Supplier Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control input-sm" name="supplier_name" placeholder="Supplier Name" value="{{ $suppliers[0]->supplier_name }}" disabled="true">
                                                            <input type="hidden" name="supplier_id" value="{{ $suppliers[0]->id }}" disabled="true">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Address</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control input-sm" name="address_line_1" placeholder="Address Line 1" value="{{ $suppliers[0]->address_line_1 }}" disabled="true">
                                                            <input type="text" class="form-control input-sm" name="address_line_2" placeholder="Address Line 2" value="{{ $suppliers[0]->address_line_2 }}" disabled="true">
                                                            <input type="text" class="form-control input-sm" name="town" placeholder="Town" value="{{ $suppliers[0]->town }}" disabled="true">
                                                            <input type="text" class="form-control input-sm" name="city" placeholder="City" value="{{ $suppliers[0]->city }}" disabled="true">
                                                            <input type="text" class="form-control input-sm" name="post_code" placeholder="Post Code" value="{{ $suppliers[0]->post_code }}" disabled="true">
                                                            <select class="select2js form-control input-sm" name="country_code" disabled="true">
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->country_code}}" <?php if($suppliers[0]->country_code == $country->country_code){echo "selected";}?>>{{ $country->country_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Contact Person</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control input-sm" name="contact_person" placeholder="Contact Person" value="{{ $suppliers[0]->contact_person }}" disabled="true">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control input-sm" name="email" placeholder="Email Address" value="{{ $suppliers[0]->email }}" disabled="true">
                                    -                    </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Contact Number</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control input-sm" name="contact_number" placeholder="Contact Number" value="{{ $suppliers[0]->contact_number }}" disabled="true">
                                                        </div>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Supplier Type</label>
                                                        <div class="col-sm-7">
                                                            <select class="select2js form-control input-sm" name="supplier_type" disabled="true">
                                                                @foreach($supplier_types as $supplier_type)
                                                                    <option value="{{$supplier_type->id}}" <?php if($suppliers[0]->supplier_type_id == $supplier_type->id){echo "selected";}?>>{{ $supplier_type->supplier_type }}</option>
                                                                @endforeach
                                                            </select>
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
