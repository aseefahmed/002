@extends('report_layouts.main')

@section('content')
    @if(isset($filter_arr))
        <input type="hidden" name="filter_param" value="{{$filter_arr}}">
    @endif

    <table class="table table-striped table-lilac datatable-ajax">
    <thead>
    <tr>
        <th>#</th>
        <th>Supplier</th>
        <th>Style</th>
        <th>Delivery Date</th>
        <th>GG</th>
        <th>Qty</th>
        <th>FOB</th>
        <th>Wght per dzn</th>
        <th>Qty per dzn</th>
        <th>Total Yarn Weight </th>
        <th>Total Yarn Cost</th>
        <th>Accessories Rate</th>
        <th>Accessories Cost</th>
        <th>Button Rate</th>
        <th>Button Cost</th>
        <th>Zipper Rate</th>
        <th>Zipper Cost</th>
        <th>Print Rate</th>
        <th>Print Cost</th>
        <th>Total FOB</th>
        <th>Total Cost</th>
        <th>Balance Amount </th>
        <th>Cost of Making</th>
    </tr>
    </thead>
    <!--tbody section is required-->
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td><?php echo $order->id;?></td>
            <td width="20%"><img width="20%" src="{{ url('/public/img/uploads/orders/'.$order->photo)}}"><?php echo $order->supplier_name;?></td>
            <td><?php echo $order->style;?></td>
            <td><?php echo date_format(date_create($order->delivery_date), 'd/m/y');?></td>
            <td><?php echo $order->gg;?></td>
            <td><?php echo $order->qty;?></td>
            <td><?php echo $order->fob;?></td>
            <td><?php echo $order->weight_per_dzn;?></td>
            <td><?php echo $order->qty_per_dzn;?></td>
            <td><?php echo $order->total_yarn_weight;?></td>
            <td><?php echo $order->total_yarn_cost;?></td>
            <td><?php echo $order->acc_rate;?></td>
            <td><?php echo $order->total_acc_cost;?></td>
            <td><?php echo $order->btn_cost;?></td>
            <td><?php echo $order->total_btn_cost;?></td>
            <td><?php echo $order->zipper_cost;?></td>
            <td><?php echo $order->total_zipper_cost;?></td>
            <td><?php echo $order->print_cost;?></td>
            <td><?php echo $order->total_print_cost;?></td>
            <td><?php echo $order->total_fob;?></td>
            <td><?php echo $order->total_cost;?></td>
            <td><?php echo $order->balance_amount;?></td>
            <td><?php echo $order->cost_of_making;?></td>
            
        </tr>
    @endforeach
    </tbody>
    <!--tfoot section is optional-->
    <tfoot>
    <tr>
        <th>#</th>
        <th>Supplier</th>
        <th>Style</th>
        <th>Delivery Date</th>
        <th>GG</th>
        <th>Qty</th>
        <th>FOB</th>
        <th>Wght per dzn</th>
        <th>Qty per dzn</th>
        <th>Total Yarn Weight </th>
        <th>Total Yarn Cost</th>
        <th>Accessories Rate</th>
        <th>Accessories Cost</th>
        <th>Button Rate</th>
        <th>Button Cost</th>
        <th>Zipper Rate</th>
        <th>Zipper Cost</th>
        <th>Print Rate</th>
        <th>Print Cost</th>
        <th>Total FOB</th>
        <th>Total Cost</th>
        <th>Balance Amount </th>
        <th>Cost of Making</th>
    </tr>
    </tfoot>
    </table>
@stop    