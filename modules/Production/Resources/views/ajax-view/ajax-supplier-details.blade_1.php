<form class="form-horizontal form-bordered" role="form" method="POST" name="update_supplier_form" id="update_supplier_form">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Supplier Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" name="supplier_name" placeholder="Supplier Name" value="{{ $suppliers[0]->supplier_name }}" disabled="true">
                        <input type="hidden" name="supplier_id" value="{{ $suppliers[0]->id }}" disabled="true">
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" name="address_line_1" placeholder="Address Line 1" value="{{ $suppliers[0]->address_line_1 }}" disabled="true">
                        <input type="text" class="form-control input-sm" name="address_line_2" placeholder="Address Line 2" value="{{ $suppliers[0]->address_line_2 }}" disabled="true">
                        <input type="text" class="form-control input-sm" name="town" placeholder="Town" value="{{ $suppliers[0]->town }}" disabled="true">
                        <input type="text" class="form-control input-sm" name="city" placeholder="City" value="{{ $suppliers[0]->city }}" disabled="true">
                        <input type="text" class="form-control input-sm" name="post_code" placeholder="Post Code" value="{{ $suppliers[0]->post_code }}" disabled="true">
                        <select class="select form-control input-sm" name="country_code" disabled="true">
                            @foreach($countries as $country)
                            <option value="{{$country->country_code}}" <?php if($suppliers[0]->country_code == $country->country_code){echo "selected";}?>>{{ $country->country_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Person</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" name="contact_person" placeholder="Contact Person" value="{{ $suppliers[0]->contact_person }}" disabled="true">
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" name="email" placeholder="Email Address" value="{{ $suppliers[0]->email }}" disabled="true">
-                    </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" name="contact_number" placeholder="Contact Number" value="{{ $suppliers[0]->contact_number }}" disabled="true">
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="col-sm-3 control-label">Supplier Type</label>
                    <div class="col-sm-7">
                        <select class="select form-control input-sm" name="supplier_type" disabled="true">
                            @foreach($supplier_types as $supplier_type)
                                <option value="{{$supplier_type->id}}" <?php if($suppliers[0]->supplier_type_id == $supplier_type->id){echo "selected";}?>>{{ $supplier_type->supplier_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- /.form-group -->

            </div><!-- /.form-body -->
        </form>