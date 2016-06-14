<table class="table table-striped table-lilac datatable-ajax">
        <thead>
    <tr>
        <th>Supplier</th>
        <th>Style</th>
        <th>Brand</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <!--tbody section is required-->
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td width="20%"><img width="20%" src="{{ url('/public/img/uploads/orders/'.$order->photo)}}"><?php echo $order->supplier_name;?></td>
            <td><?php echo $order->style;?></td>
            <td><?php echo $order->brand;?></td>
            <td><?php echo $order->order_date;?></td>
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
        <th>Supplier</th>
        <th>Style</th>
        <th>Brand</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>