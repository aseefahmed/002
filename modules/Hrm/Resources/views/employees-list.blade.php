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
                            <h3 class="panel-title">Employees List</h3>
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
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Designation</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!--tbody section is required-->
                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td width="20%">
                                            <img width="20%" src="{{ url('/public/img/uploads/profile/'.$employee->photo) }}">
                                            {{ $employee->first_name }} {{ $employee->last_name }}
                                        </td>
                                        <td>{{ $employee->department_name }}</td>
                                        <td>{{ $employee->designation_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->mob }}</td>
                                        <td class="text-center"> 
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a style="cursor: pointer;" href="{{ url('/production/view-department/'.$employee->id) }}"><i class="fa fa-eye"></i> View</a></li>
                                                    <li class="divider"></li>
                                                    <li><a style="cursor: pointer;" onclick="delete_department({{ $employee->id }})"><i class="fa fa-trash"></i> Delete</a></li>
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
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Designation</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
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
    
</section>
@stop
