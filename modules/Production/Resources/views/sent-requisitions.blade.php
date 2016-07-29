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
                            <h3 class="panel-title">New Requisitions</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">

                        <!-- Start datatable -->
                        
                        <div id="ajax-table">
                            <table class="table table-striped table-lilac datatable-ajax">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Sent At</th>
                                    <th>Sent to</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <!--tbody section is required-->
                                <tbody>
                                @foreach($requisitions as $requisition)
                                    <tr>
                                        <td><?php echo $requisition->id;?></td>
                                        <td><?php echo $requisition->name;?></td>
                                        <td><?php echo $requisition->type;?></td>
                                        <td><?php echo date_format(date_create($requisition->created_at), 'dS M, Y');?></td>
                                        <td><?php echo $requisition->first_name." ".$requisition->last_name;?></td>
                                        <td><?php echo $requisition->requested_amount;?></td>
                                        <td>
                                            <?php 
                                                if($requisition->flag == 1)
                                                        echo "Draft";
                                                else if($requisition->flag == 3)
                                                        echo "<span class='bg bg-success'>Approved</span>";
                                                else if($requisition->flag == 4)
                                                        echo "<span class='bg bg-danger'>Rejected</span>";
                                                else
                                                    echo "Pending";
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a style="cursor: pointer;" href="{{ url('/production/view-supplier/'.$requisition->id) }}"> View</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--tfoot section is optional-->
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Sent At</th>
                                    <th>Sent to</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
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
    </div>
</section>
@stop
