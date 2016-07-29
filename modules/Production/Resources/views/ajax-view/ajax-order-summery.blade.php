<?php
$yarn_due_amount = $orders[0]->total_yarn_cost-$orders[0]->approved_yarn_amount;
$acc_due_amount = $orders[0]->total_acc_cost-$orders[0]->approved_acc_amount;
$btn_due_amount = $orders[0]->total_btn_cost-$orders[0]->approved_btn_amount;
$zipper_due_amount = $orders[0]->total_zipper_cost-$orders[0]->approved_zipper_amount;
$print_due_amount = $orders[0]->total_print_cost-$orders[0]->approved_print_amount;
?>
<div class="form-group">
    <label class="col-sm-3 control-label">Yarn Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_yarn_cost}}" name="yarn_amount"  class="form-control" <?php if($yarn_due_amount==0){echo "readonly";}?>>         
    </div>
    <div class="col-sm-4">/ $ {{$yarn_due_amount}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Accessories Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_acc_cost}}" name="acc_amount"  class="form-control" <?php if($acc_due_amount==0){echo "readonly";}?>>
    </div>
    <div class="col-sm-4">/ $ {{$acc_due_amount}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Button Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_btn_cost}}" name="btn_amount"  class="form-control" <?php if($btn_due_amount==0){echo "readonly";}?>>
    </div>
    <div class="col-sm-4">/ $ {{$btn_due_amount}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Zipper Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_zipper_cost}}" name="zipper_amount"  class="form-control" <?php if($zipper_due_amount==0){echo "readonly";}?>>
    </div>
    <div class="col-sm-4">/ $ {{$zipper_due_amount}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Print Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_print_cost}}" name="print_amount"  class="form-control" <?php if($print_due_amount==0){echo "readonly";}?>>
    </div>
    <div class="col-sm-4">/ $ {{$print_due_amount}}</div>
</div>