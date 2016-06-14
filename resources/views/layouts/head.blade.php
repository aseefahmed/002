<!DOCTYPE>
<html>
<head>
    <!-- START @META SECTION -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
    <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Lang::get('login::common.site_title') }}  | {{Route::currentRouteName()}}</title>
    <!--/ END META SECTION -->


    <!-- Common CSS Files -->
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{ url('public/assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/admin/css/layout.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/admin/css/components.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/admin/css/themes/default.theme.css') }}" rel="stylesheet" id="theme">
    <link href="{{ url('public/assets/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/admin/css/reset.css') }}" rel="stylesheet">
    <!-- End of Common CSS Files -->
    
    <!--------------- For Data Tables ---------------------->
    @if(Route::currentRouteName() == 'Suppliers List' || Route::currentRouteName() == 'Designation List' || 
                            Route::currentRouteName() == 'Department List' || Route::currentRouteName() == 'Employees List' || Route::currentRouteName() == 'Orders List')
        <link href="{{ url('public/assets/global/plugins/bower_components/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('public/assets/global/plugins/bower_components/datatables/css/datatables.responsive.css') }}" rel="stylesheet">
        
    @endif
    <!--------------- For HTML Select Element with Combo Box ---------------------->
    @if(Route::currentRouteName() == 'Supplier Details' || Route::currentRouteName() == 'Order Details' || Route::currentRouteName() == 'Add Employee' || Route::currentRouteName() == 'Orders List')    
        <link href="{{ url('public/assets/global/plugins/bower_components/select2-ng/select2.css') }}" rel="stylesheet">
        <link href="{{ url('public/assets/global/plugins/bower_components/select2-ng/select2-bootstrap.css') }}" rel="stylesheet">
    
    @endif
    <!--------------- For HTML File Input---------------------->
    @if(Route::currentRouteName() == 'Orders List' || Route::currentRouteName() == 'Add Employee' || Route::currentRouteName() == 'Order Details')    
        <link href="{{ url('public/assets/global/plugins/bower_components/fileinput/css/fileinput.min.css') }}" rel="stylesheet">
        
    @endif

<!--        
    <link href="{{ url('public/assets/admin/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/global/plugins/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/global/plugins/bower_components/dropzone/downloads/css/dropzone.css') }}" rel="stylesheet">
    -->

    <!-- START @GLOBAL MANDATORY STYLES -->
    <!--/ END GLOBAL MANDATORY STYLES -->

<!--     START @PAGE LEVEL STYLES 
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    -->
</head>