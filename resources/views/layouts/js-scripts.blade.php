<!-- Common JS Files -->

<script src="{{ url('public/assets/global/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js') }}"></script>
<!--------------- For Sound Effects ---------------------->
<script src="{{ url('public/assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js') }}"></script>
    

<!-- End of Common JS Files -->
<!-- START @CORE PLUGINS -->

<!--------------- For Data Tables ---------------------->
@if(Route::currentRouteName() == 'Suppliers List' || Route::currentRouteName() == 'Draft Requisitions' || Route::currentRouteName() == 'Requisitions'  || Route::currentRouteName() == 'Designation List' || Route::currentRouteName() == 'Order Report' || 
                                Route::currentRouteName() == 'Department List' || Route::currentRouteName() == 'Employees List'  
                                || Route::currentRouteName() == 'Orders List' || Route::currentRouteName() == 'Sent Requisitions' )
    
    <script src="{{ url('public/assets/global/plugins/bower_components/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/assets/global/plugins/bower_components/datatables/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('public/assets/global/plugins/bower_components/datatables/js/datatables.responsive.js') }}"></script>
@endif
<!--------------- For HTML Select Element with Combo Box ---------------------->
@if(Route::currentRouteName() == 'Supplier Details' || Route::currentRouteName() == 'Orders Requisition' || Route::currentRouteName() == 'Suppliers List' || Route::currentRouteName() == 'Order Details' || Route::currentRouteName() == 'Order Report' || Route::currentRouteName() == 'Add Employee' || Route::currentRouteName() == 'Orders List')    
    <script src="{{ url('public/assets/global/plugins/bower_components/select2-ng/select2.min.js') }}"></script>
@endif

<!--------------- For HTML File Input---------------------->
@if(Route::currentRouteName() == 'Orders List' || Route::currentRouteName() == 'Add Employee' || Route::currentRouteName() == 'Order Details')    
    <script src="{{ url('public/assets/global/plugins/bower_components/fileinput/fileinput.min.js') }}"></script>
@endif

<!--------------- Multiple Chosen Select---------------------->
@if(Route::currentRouteName() == 'Orders Requisition')    
    <script src="{{ url('public/assets/global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js') }}"></script>
@endif


<!--------------- For HTML Chkeditor---------------------->
@if(Route::currentRouteName() == 'Create Designation' || Route::currentRouteName() == 'Create Department')    
    <script src="{{ url('public/assets/global/plugins/bower_components/ckeditor/ckeditor.js') }}"></script>-->
@endif
<!--
<script src="{{ url('public/assets/global/plugins/bower_components/bootbox/bootbox.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/retina.js/dist/retina.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js') }}"></script>>

<script src="{{ url('public/assets/global/plugins/bower_components/bootbox/bootbox.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/retina.js/dist/retina.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/ckeditor/ckeditor.js') }}"></script>


<script src="{{ url('public/assets/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.spline.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/dropzone/downloads/dropzone.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js') }}"></script>

<script src="{{ url('public/assets/global/plugins/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('public/assets/global/plugins/bower_components/counter-up/jquery.counterup.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

-->

<script src="{{ url('public/assets/admin/js/apps.js') }}"></script>
<script src="{{ url('public/assets/admin/js/pages/blankon.dashboard.js') }}"></script>+
<script src="{{ url('public/assets/admin/js/demo.js') }}"></script>
<!--/ END PAGE LEVEL SCRIPTS -->

<script>
    $(document).ready(function() {
        
        row = 0;
        
        function orderFiltering()
        {
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            formData = new FormData($("#filter_order_form")[0]);
            $.ajax({
                url: "{{ url('/production/filter-orders') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    console.log(result)
                    $('#ajax_preloader').css('display', 'none');
                    $('#ajax-table').html(result);
                    $('.datatable-ajax').dataTable();
                    
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                 "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                 );
            });
        }
        
        if($('#description')[0])
        {
            CKEDITOR.replace( 'description', {
                uiColor: '#81B71A'
            });
        }

        $(".selectchoosen").change(function(){
            if($(".selectchoosen").val() == 0)
            {
                $('#orders_review').html('');
            }
            formData = new FormData($("#orders_requisition_form")[0]);
            $.ajax({
                url: "{{ url('/production/view-orders-summery') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    $('#orders_review').html(result);
                    $('.newselect2js').select2();
                    $('#add_to_requisition').prop('disabled', false)
                    
                }
            })
        });

        $("#add_to_requisition").click(function(e){
            
            e.preventDefault();
            
            $('.create-requisition-div').prop('disabled',false);
            $('.select2js').prop('disabled',false);
            
            formData = new FormData($("#orders_requisition_form")[0]);
            $.ajax({
                url: "{{ url('/production/create-requisition') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    $('#data_not_found_label').css('display','none');
                    $('#ajax-response').append(result);
                    
                }
            })
        });

        $(".action_on_requisition").click(function(e){
            
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            action = $(this).prop('id');
           
            $.ajax({
                url: "{{ url('/production/requisition/change-flag') }}/"+action,
                method: "GET",
                success: function(result){
                    console.log(result)
                    $('#ajax_preloader').html("<div class='alert alert-success'>Operation Successful!</div>");
                    $('#'+action).html("APPROVED");
                    $('.action_on_requisition').css("display", "none");
                    
                }
            }).fail(function(result){
                $('#ajax_preloader').html("<div class='alert alert-danger'>Operation Failed!</div>");
                
            });
        });
        
        $(".save_as_draft_requisition").click(function(e){
            action = $(this).val();
            if(action == "Save as Draft")
                action = "draft";
            
            e.preventDefault();
            
            $('#ajax-preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
                        
            formData = new FormData($("#send_requisition_form")[0]);
            $.ajax({
                url: "{{ url('/production/draft-requisition') }}/"+action,
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    
                    $('#ajax-preloader').html("<div class='alert alert-success'>Operation Successfull!</div>");
                    $('#ajax-response').append(result);
                    $(".save_as_draft_requisition").css('display', 'none');
                    $("#add_to_requisition").prop('disabled', true);
                    $(".selectchoosen").prop('disabled', true);
                    
                    
                }
            }).fail(function(result){
                $('#ajax-preloader').html("<div class='alert alert-danger'>Operation Failed!</div>");
                
            });
        });
        
        if($('.datatable-ajax').length > 0)
        {
            $('.datatable-ajax').dataTable();
        }
        
        $('.inputmaskjs').inputmask("mm/dd/yyyy");
        
        $('.inputmaskjs').blur(function(){
            orderFiltering();
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if($('.select2js').length > 0)
        {
            $('.select2js').select2();
        }     
              

        $('#reset-btn').click(function(e){
            $('form')[2].reset();
            $('#description').code('');
        });


        $('#edit_btn').click(function(e){
            e.preventDefault();
            len = document.getElementById('update_supplier_form').elements.length;
            for(i=0;i<len;i++)
            {
               document.getElementById('update_supplier_form').elements[i].disabled = false;
            }
            $('#edit_btn').hide();
            $('#update_btn').show();
            $('#cancel_btn').show();
        });
        
        
        $('.order-filtering').change(function(){
            orderFiltering();
        });
        
        $('#suppiler_chk').click(function(){
            if($('#suppiler_chk').prop('checked') == true)
                $('#supplier').prop('disabled', false)
            else
                $('#supplier').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#agent_chk').click(function(){
            if($('#agent_chk').prop('checked') == true)
                $('#agent').prop('disabled', false)
            else
                $('#agent').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#brand_chk').click(function(){
            if($('#brand_chk').prop('checked') == true)
                $('#brand').prop('disabled', false)
            else
                $('#brand').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#buyer_chk').click(function(){
            if($('#buyer_chk').prop('checked') == true)
                $('#buyer').prop('disabled', false)
            else
                $('#buyer').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#style_chk').click(function(){
            if($('#style_chk').prop('checked') == true)
                $('#style').prop('disabled', false)
            else
                $('#style').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#delivery_chk').click(function(){
            if($('#delivery_chk').prop('checked') == true)
                $('#delivery_date').prop('disabled', false)
            else
                $('#delivery_date').prop('disabled', 'disabled')
            
            orderFiltering()
                
        });
        
        $('#cancel_btn').click(function(){
                len = document.getElementById('update_supplier_form').elements.length;
                for(i=0;i<len;i++)
                {
                    document.getElementById('update_supplier_form').elements[i].disabled = true;
                }

                $('#edit_btn').show();
                $('#update_btn').hide();
                $('#cancel_btn').hide();
        });
        
        $('#update_btn').click(function(){
            
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            
            formData = new FormData($("#update_supplier_form")[0]);
            $.ajax({
                url: "{{ url('/production/update-supplier') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                  $('#ajax_preloader').css('display', 'none');
                  $('#show_status').html(
                          "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully updated supplier information.</div>"
                  );
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });
        });
            
            
        $('#add-dept-btn').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            $('#myModal').modal('hide');
            data = CKEDITOR.instances.description.getData();
            formData = new FormData($("#add_dept_form")[0]);
            formData.append('description', data);
            $.ajax({
                url: "{{ url('/hrm/submit-department') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                  $('#ajax_preloader').css('display', 'none');
                  $('#show_status').html(
                          "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully created a department.</div>"
                  );
                  $('#ajax-table').html(result);
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });


        });
          
          
        
        $('#add-employee-btn').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            formData = new FormData($("#add-employee-form")[0]);
            
            $.ajax({
                url: "{{ url('/hrm/submit-employee') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    row++;
                    arr = ['alert alert-success', 'alert alert-primary', 'alert alert-info', 'alert alert-default'];
                    if(row%4 == 0)
                        cls = arr[0];
                    else if(row%4 == 1)
                        cls = arr[1];
                    else if(row%4 == 2)
                        cls = arr[2];
                    else if(row%4 == 3)
                        cls = arr[3];
                        
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                     "<div class='"+cls+"'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully created an employee.</div>"
                     );
                }
            })


        });


        $('#add-supplier-confirmation').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            $('#myModal').modal('hide');
            formData = new FormData($("#add_supplier_form")[0]);
            $.ajax({
                url: "{{ url('/production/submit-supplier') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                     "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully created a supplier.</div>"
                     );
                    $('#ajax-table').html(result);
                    $('.datatable-ajax').dataTable();
                    $('#add_supplier_form')[0].reset();
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                 "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                 );
            });
        });
        
         $('#update-lc').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            formData = new FormData($("#update_order_form")[0]);
            $.ajax({
                url: "{{ url('/production/update-order') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    row++;
                    arr = ['alert alert-success', 'alert alert-primary', 'alert alert-info', 'alert alert-default'];
                    if(row%4 == 0)
                        cls = arr[0];
                    else if(row%4 == 1)
                        cls = arr[1];
                    else if(row%4 == 2)
                        cls = arr[2];
                    else if(row%4 == 3)
                        cls = arr[3];
                    
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_lc_doc_div').css('display', 'none');
                    $('#lc-confirmed-div').css('display', 'none');
                    $('#show_status').html(
                     "<div class='"+cls+"'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully updated order details.</div>"
                     );
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                 "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                 );
            });
        });

        if($(".input-file-js")[0])
        {
            $(".input-file-js").fileinput({
                showUpload: false,
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Pick File",
                browseIcon: "<i class=\"fa fa-camera-retro\"></i> ",
                removeClass: "btn btn-danger",
                removeLabel: "Delete",
                removeIcon: "<i class=\"fa fa-recycle\"></i> ",
                uploadClass: "btn btn-info",
            });
        }

        $('#add-order-confirmation').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            $('#myModal').modal('hide');
            formData = new FormData($("#add_order_form")[0]);
            $.ajax({
                url: "{{ url('/production/submit-order') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    row++;
                    arr = ['alert alert-success', 'alert alert-inverse', 'alert alert-teals', 'alert alert-lilac'];
                    if(row%4 == 0)
                        cls = arr[0];
                    else if(row%4 == 1)
                        cls = arr[1];
                    else if(row%4 == 2)
                        cls = arr[2];
                    else if(row%4 == 3)
                        cls = arr[3];
                    
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                     "<div class='"+cls+"'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully created an order.</div>"
                     );
                    $('#ajax-table').html(result);
                    $('.datatable-ajax').dataTable();
                    $('#add_order_form')[0].reset();
                    $('#composition-div-group').html('');
                    $('#compositions').val('');
                    total_yarn_weight = 0;
                    total_yarn_cost = 0;
                    compositions = new Array()
                    n=0;
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                 "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                 );
            });


        });
        

        $('#add-designation-btn').click(function(){
            $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
            $('#myModal').modal('hide');
            data = CKEDITOR.instances.description.getData();
            formData = new FormData($("#add_designation_form")[0]);
            formData.append('description', data);
            $.ajax({
                url: "{{ url('/hrm/submit-designation') }}",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                            "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully created a designation.</div>"
                    );
            
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });


        });
        
        $("#new_order_qty_from_buyer").blur(function(e){
            qty_per_dzn = Math.round($("#new_order_qty_from_buyer").val()/12*100, 2);
            qty_per_dzn = qty_per_dzn/100;
            $("#qty_per_dzn").val(qty_per_dzn);
            
            fob = $("#fob_per_qty").val();
            qty = $("#new_order_qty_from_buyer").val();
            total = fob*qty;
            total_fob = $("#total_fob").val(total);
//            
//            total_yarn_cost = $('#total_yarn_cost').val()
//            total_acc_cost = $("#total_acc_cost").val(Math.round($("#acc_rate").val()*$("#qty_per_dzn").val()));
//            total_btn_cost = $("#total_btn_cost").val(Math.round($("#btn_cost_dzn").val()*$("#qty_per_dzn").val()));
//            total_zipper_cost = $("#total_zipper_cost").val(Math.round($("#zipper_cost_dzn").val()*$("#qty_per_dzn").val()));
//            total_print_cost = $("#total_print_cost").val(Math.round($("#print_cost_dzn").val()*$("#qty_per_dzn").val()));
//            $('#total_cost').val(Number(total_yarn_cost) + Number(total_acc_cost) + Number(total_btn_cost) + Number(total_zipper_cost) + Number(total_print_cost));
//            
    });
    
    
        $('#l_c_confirmed').click(function() {
            if($(this).is(':checked')) {
                $('#show_lc_doc_div').css('display', 'block');
            } 
            else
            {
                $('#show_lc_doc_div').css('display', 'none');
            }
        });
        $("#acc_rate").blur(function(e){
            rate = $("#acc_rate").val();
            qty_per_dzn = $("#qty_per_dzn").val();
            total_rate = Math.round(rate * qty_per_dzn);
            $("#total_acc_cost").val(total_rate);
        });
        
        $("#btn_cost_dzn").blur(function(e){
            rate = $("#btn_cost_dzn").val();
            qty_per_dzn = $("#qty_per_dzn").val();
            total_rate = Math.round(rate * qty_per_dzn);
            $("#total_btn_cost").val(total_rate);
        });
        
        $("#zipper_cost_dzn").blur(function(e){
            rate = $("#zipper_cost_dzn").val();
            qty_per_dzn = $("#qty_per_dzn").val();
            total_rate = Math.round(rate * qty_per_dzn);
            $("#total_zipper_cost").val(total_rate);
        });
        
        $("#print_cost_dzn").blur(function(e){
            rate = $("#print_cost_dzn").val();
            qty_per_dzn = $("#qty_per_dzn").val();
            total_rate = Math.round(rate * qty_per_dzn);
            $("#total_print_cost").val(total_rate);
        });
        
        $("#fob_per_qty").blur(function(e){
            fob = $("#fob_per_qty").val();
            qty = $("#new_order_qty_from_buyer").val();
            total = fob*qty;
            $("#total_fob").val(total);
            
        });
        
        
        total_yarn_weight = 0;
        total_yarn_cost = 0;
        compositions = new Array()
        n=0;
        $('#composition_plus').click(function(){
            composition_name = $('#composition_name').val();
            composition_percentage = $('#composition_percentage').val();
            composition_yarn_rate = $('#composition_yarn_rate').val();
            composition_wastage = $('#composition_wastage').val();
            compositions[n] = [composition_name, composition_percentage, composition_yarn_rate, composition_wastage];
            
            composition_str = JSON.stringify(compositions);
            $('#compositions').val(composition_str)
            n++;
            
            $('#composition-div-group').css('display','block');
            $('#composition-div-group').append("<label class='col-sm-3 control-label'> </label><div class='composition-div'><div class='col-sm-2 composition_name_arr'><input class='form-control' readonly='readonly' name='composition_name_arr' value='"+composition_name+"'type='text' placeholder='Name'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_percentage_arr' value='"+composition_percentage+"'type='number' placeholder='Percentage'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_yarn_rate_arr' value='"+composition_yarn_rate+"'type='number' placeholder='Percentage'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_wastage_arr' value='"+composition_wastage+"'type='number' placeholder='Percentage'></div></div>");          
         
            total_yarn_weight =  Number(total_yarn_weight) + Number($("#qty_per_dzn").val()*$("#weight_dzn").val()*composition_percentage/100*(1+Number(composition_wastage/100)));
            total_yarn_cost = Number(total_yarn_cost) + Number(Number($("#qty_per_dzn").val()*$("#weight_dzn").val()*composition_percentage/100*(1+Number(composition_wastage/100)))*composition_yarn_rate);
            
            $('#total_yarn_weight').val(Math.round(total_yarn_weight));
            $('#total_yarn_cost').val(Math.round(total_yarn_cost));
            
        });
        
        $('#composition_refresh').click(function(){
//            composition_name = $('#composition_name').val();
//            composition_percentage = $('#composition_percentage').val();
//            composition_yarn_rate = $('#composition_yarn_rate').val();
//            composition_wastage = $('#composition_wastage').val();
//            $('#composition_group').append("<label class='col-sm-3 control-label'> </label><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_name_arr[]' value='"+composition_name+"'type='text' placeholder='Name'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_percentage_arr[]' value='"+composition_percentage+"'type='number' placeholder='Percentage'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_yarn_rate_arr[]' value='"+composition_yarn_rate+"'type='number' placeholder='Percentage'></div><div class='col-sm-2'><input class='form-control' readonly='readonly' name='composition_wastage_arr[]' value='"+composition_wastage+"'type='number' placeholder='Percentage'></div>");          
//          
//            total_yarn_weight =  Number(total_yarn_weight) + Number($("#qty_per_dzn").val()*$("#weight_dzn").val()*composition_percentage/100*(1+Number(composition_wastage/100)));
//            total_yarn_cost = Number(total_yarn_cost) + Number(Number($("#qty_per_dzn").val()*$("#weight_dzn").val()*composition_percentage/100*(1+Number(composition_wastage/100)))*composition_yarn_rate);
//            $('#total_yarn_weight').val(Math.round(total_yarn_weight));
//            $('#total_yarn_cost').val(Math.round(total_yarn_cost));
              num_of_composition = $('.composition_name_arr').length;
              
            
        });        
        
        $('#print_cost_dzn').blur(function(){
            total_cost = Number($('#total_yarn_cost').val()) + Number($('#total_acc_cost').val()) + Number($('#total_btn_cost').val()) + Number($('#total_zipper_cost').val()) + Number($('#total_print_cost').val());
            $('#total_cost').val(Math.round(total_cost));
            
            balance_amount = $("#total_fob").val() - $("#total_cost").val();
            $("#balance_amount").val(Math.round(balance_amount));
            
            cost_of_making = balance_amount/$("#qty_per_dzn").val();
            $("#cost_of_making").val(Math.round(cost_of_making));
        });
        
    });
    
    
    function delete_supplier(id)
    {
        
        $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
        $.ajax({
                url: "{{ url('/production/delete-supplier') }}/"+id,
                success: function(result){
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                            "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully deleted a supplier.</div>"
                    );
                $('#ajax-table').html(result);
                $('.datatable-ajax').dataTable();
                $('#add_supplier_form')[0].reset();
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });
    }
    
    function delete_designation(id)
    {
        
        $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
        $.ajax({
                url: "{{ url('/hrm/delete-designation') }}/"+id,
                success: function(result){
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                            "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully deleted a designation.</div>"
                    );
                $('#ajax-table').html(result);
                $('.datatable-ajax').dataTable();
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });
            
    }
    
    function delete_department(id)
    {
        
        $('#ajax_preloader').html("<img src='{{ url('/public/img/loading.gif') }}'> Processing ...");
        $.ajax({
                url: "{{ url('/hrm/delete-department') }}/"+id,
                success: function(result){
                    $('#ajax_preloader').css('display', 'none');
                    $('#show_status').html(
                            "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Well done!</strong> You successfully deleted a department.</div>"
                    );
                $('#ajax-table').html(result);
                $('.datatable-ajax').dataTable();
                }
            }).fail(function(result){
                $('#ajax_preloader').css('display', 'none');
                $('#show_status').html(
                        "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> There was some technical issue. Contact to the administrator.</div>"
                );
            });
    }
</script>