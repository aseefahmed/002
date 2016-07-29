@include('layouts.head')

<body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

    <!-- START @PAGE CONTENT -->
        @yield('content')
    <!--/ END PAGE CONTENT -->

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

@include('layouts.js-scripts')
<!--/ END JAVASCRIPT SECTION -->
</body>
<!--/ END BODY -->
</html>
