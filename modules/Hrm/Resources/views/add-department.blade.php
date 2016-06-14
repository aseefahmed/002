@extends('layouts.main')

@section('content')
<section id="page-content">
    <div class="body-content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <!-- Start password validation -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Add Department</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-horizontal form-bordered" role="form" method="POST" name="add_dept_form" id="add_dept_form">

                            <div id="show_status"></div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Department Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="department_name" placeholder="Department Name">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" placeholder="Description">Description</label>
                                    <div class="col-sm-7">
                                        <textarea id="description" name="description" class="form-control" rows="10"></textarea>
                                    </div>

                                </div><!-- /.form-group -->

                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-3">
                                    <a class="btn btn-pinterest" id="reset-btn">Reset</a>
                                    <a class="btn btn-bitbucket" id="add-dept-btnx"  data-toggle="modal" data-target="#myModal">Create</a>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

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
                    <h4 class="modal-title">Do You Really Want To Process?</h4>
                </div>
                <div class="modal-body">
                    <div class="media">
                        <div class="media-left" style="padding-right: 15px;">
                            <a href="#">
                               <img data-no-retina class="media-object" src="{{ url('public/img/Warning-Symbol.jpg') }}" alt="..." style="width: 100px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Hello, {{ ucwords(Auth::user()->first_name) }} {{ Auth::user()->last_name }}</h4>
                            Do you really want to create a department?

                            <div>
                                <div id="ajax_preloader"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-warning btn-lg btn-slideright"  data-dismiss="modal">No</a>
                    <a class="btn btn-primary btn-lg btn-slideright" id="add-dept-btn">YES</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
