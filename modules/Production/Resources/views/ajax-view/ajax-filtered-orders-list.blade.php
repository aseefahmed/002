@if(isset($filter_arr))
    <input type="hidden" name="filter_param" value="{{$filter_arr}}">
@endif

<table class="table table-striped table-lilac datatable-ajax">
    <thead>
    <tr>
        <th>&nbsp;</th>
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
        <th>&nbsp;</th>
        <th width="5%">#</th>
        <th>Supplier</th>
        <th>Total FOB</th>
        <th>Delivary Date</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>