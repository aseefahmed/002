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
                            <h3 class="panel-title">Designations List</h3>
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
                        <div class="row col-md-12">
                            <div class="col-md-4"></div>
                            <div id="ajax_preloader" class="col-md-8"></div>
                        </div>
                        <div id="ajax-table">
                            <table class="table table-striped table-lilac datatable-ajax">
                                <thead>
                                <tr>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!--tbody section is required-->
                                <tbody>
                                @foreach($designations as $designation)
                                    <tr>
                                        <td class="text-right"><a href="#" class="editable_designation_name" style="color:#fff" data-type="text" data-pk="{{ $designation->id }}" data-url="{{ url('/hrm/update-designation/'.$designation->id) }}" data-title="Change Designation Name"><?php echo $designation->designation_name;?></a></td>

                                        <td>
                                            <?php
                                            if($designation->description == "")
                                                echo "N/A";
                                            else
                                                echo $designation->description;?>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a style="cursor: pointer;" href="{{ url('/production/view-designation/'.$designation->id) }}"><i class="fa fa-eye"></i> View</a></li>
                                                    <li class="divider"></li>
                                                    <li><a style="cursor: pointer;" onclick="delete_designation({{ $designation->id }})"><i class="fa fa-trash"></i> Delete</a></li>
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
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
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
