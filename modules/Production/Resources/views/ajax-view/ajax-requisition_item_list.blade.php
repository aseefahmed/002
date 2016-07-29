<?php
    $requisition_items = unserialize($items);
    $total = 0;
?>

<tr>
    @foreach($requisition_items as $item)
    {{--*/$total = $item['yarn_amount'] + $item['acc_amount'] + $item['btn_amount'] + $item['zipper_amount'] + $item['print_amount'] /*--}}
    <td>{{$item['order_no']}}</td>
    <td>{{$item['yarn_amount']}}</td>
    <td>{{$item['acc_amount']}}</td>
    <td>{{$item['btn_amount']}}</td>
    <td>{{$item['zipper_amount']}}</td>
    <td>{{$item['print_amount']}}</td>
    <td class="requested_amount">{{$total}}</td>
    @endforeach
</tr>
<