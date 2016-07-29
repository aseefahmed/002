
<div class="form-group">
    <label class="col-sm-3 control-label">Yarn Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_yarn_cost}}" name="yarn_amount"  class="form-control">         
    </div>
    <div class="col-sm-4">/ $ {{$orders[0]->total_yarn_cost}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Accessories Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_acc_cost}}" name="acc_amount"  class="form-control">
    </div>
    <div class="col-sm-4">/ $ {{$orders[0]->total_acc_cost}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Button Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_btn_cost}}" name="btn_amount"  class="form-control">
    </div>
    <div class="col-sm-4">/ $ {{$orders[0]->total_btn_cost}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Zipper Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_zipper_cost}}" name="zipper_amount"  class="form-control">
    </div>
    <div class="col-sm-4">/ $ {{$orders[0]->total_zipper_cost}}</div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Print Cost </label>
    <div class="col-sm-4">
        <input type="number" max="{{$orders[0]->total_print_cost}}" name="print_amount"  class="form-control">
    </div>
    <div class="col-sm-4">/ $ {{$orders[0]->total_print_cost}}</div>
</div>