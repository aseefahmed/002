@include('layouts.head')

<body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

    <!-- START @HEADER -->
    <header id="header">

        <!-- Start header left -->
        <div class="header-left">
            <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <div class="navbar-minimize-mobile left">
                <i class="fa fa-bars"></i>
            </div>
            <!--/ End offcanvas left -->

            <!-- Start navbar header -->
            <div class="navbar-header">

                <!-- Start brand -->
                <a id="tour-1" class="navbar-brand" href="dashboard.html">
                    <img class="logo" src="{{ url('public/img/logo/html/logo-white.png') }}" alt="brand logo"/>
                </a><!-- /.navbar-brand -->
                <!--/ End brand -->

            </div><!-- /.navbar-header -->
            <!--/ End navbar header -->

            <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <div class="navbar-minimize-mobile right">
                <i class="fa fa-cog"></i>
            </div>
            <!--/ End offcanvas right -->

            <div class="clearfix"></div>
        </div><!-- /.header-left -->
        <!--/ End header left -->

        <!-- Start header right -->
        <div class="header-right">
            <!-- Start navbar toolbar -->
            <div class="navbar navbar-toolbar">

                <!-- Start left navigation -->
                <ul class="nav navbar-nav navbar-left">

                    <!-- Start sidebar shrink -->
                    <li id="tour-2" class="navbar-minimize">
                        <a href="javascript:void(0);" title="Minimize sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!--/ End sidebar shrink -->

                    <!-- Start form search -->
                    <li class="navbar-search">
                        <!-- Just view on mobile screen-->
                        <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                        <form id="tour-3" class="navbar-form">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                                <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                            </div>
                        </form>
                    </li>
                    <!--/ End form search -->

                </ul><!-- /.nav navbar-nav navbar-left -->
                <!--/ End left navigation -->

                <!-- Start right navigation -->
                <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                    <!-- Start messages -->
                    <li id="tour-4" class="dropdown navbar-message">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded">7</span></a>

                        <!-- Start dropdown menu -->
                        <div class="dropdown-menu animated flipInX">
                            <div class="dropdown-header">
                                <span class="title">Messages <strong>(7)</strong></span>
                                <span class="option text-right"><a href="#">+ New message</a></span>
                            </div>
                            <div class="dropdown-body">

                                <!-- Start message search -->
                                <form class="form-horizontal" action="#">
                                    <div class="form-group has-feedback has-feedback-sm m-5">
                                            <input type="text" class="form-control input-sm" placeholder="Search message...">
                                        <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                    </div>
                                </form>
                                <!--/ End message search -->

                                <!-- Start message list -->
                                <div class="media-list niceScroll">

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/2.png') }}" class="media-object img-circle" alt="John Kribo"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">John Kribo</span>
                                            <span class="media-text">I was impressed how fast the content is loaded. Congratulations. nice design.</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta"><i class="fa fa-reply"></i></span>
                                            <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                            <span class="media-meta pull-right">13 minutes</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/3.png') }}" class="media-object img-circle" alt="Jennifer Poiyem"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Jennifer Poiyem</span>
                                            <span class="media-text">It’s Simple, Clean & Nice .. Good work Dear .. GLWS</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta pull-right">17 hours</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/4.png') }}" class="media-object img-circle" alt="Clara Wati"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Clara Wati</span>
                                            <span class="media-text">Great work! Do you have any plans to add loading indicators for AJAX calls that might take longer than normal?</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta pull-right">1 days</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/5.png') }}" class="media-object img-circle" alt="Toni Mriang"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Toni Mriang</span>
                                            <span class="media-text">I am very interested in the theme and I’m thinking about buying it.</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                            <span class="media-meta pull-right">2 days</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/6.png') }}" class="media-object img-circle" alt="Bella negoro"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Bella negoro</span>
                                            <span class="media-text">Great work! Good luck!</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                            <span class="media-meta"><i class="fa fa-user"></i></span>
                                            <span class="media-meta pull-right">1 week</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/7.png') }}" class="media-object img-circle" alt="Kim Mbako"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Kim Mbako</span>
                                            <span class="media-text">Hi! First of all, thank you for the very nice theme for creating awesome web applications :)</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                            <span class="media-meta pull-right">1 week</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <a href="page-messages.html" class="media">
                                        <div class="pull-left"><img src="{{ url('public/img/avatar/50/8.png') }}" class="media-object img-circle" alt="Pack Suparman"/></div>
                                        <div class="media-body">
                                            <span class="media-heading">Pack Suparman</span>
                                            <span class="media-text">Apik temen kie jan template, nyong gep tuku jal..</span>
                                            <!-- Start meta icon -->
                                            <span class="media-meta pull-right">1 week</span>
                                            <!--/ End meta icon -->
                                        </div><!-- /.media-body -->
                                    </a><!-- /.media -->

                                    <!-- Start message indicator -->
                                    <a href="#" class="media indicator inline">
                                        <span class="spinner">Load more messages...</span>
                                    </a>
                                    <!--/ End message indicator -->

                                </div>
                                <!--/ End message list -->

                            </div>
                            <div class="dropdown-footer">
                                <a href="page-messages.html">See All</a>
                            </div>
                        </div>
                        <!--/ End dropdown menu -->

                    </li><!-- /.dropdown navbar-message -->
                    <!--/ End messages -->

                    <!-- Start notifications -->
                    <li id="tour-5" class="dropdown navbar-notification">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded"><?php if(count(getNotifications())>0){echo count(getNotifications());}?></span></a>

                        <!-- Start dropdown menu -->
                        <div class="dropdown-menu animated flipInX">
                            <div class="dropdown-header">
                                <span class="title">Notifications <strong>({{count(getNotifications())}})</strong></span>
                                <span class="option text-right"><a href="#"><i class="fa fa-cog"></i></a></span>
                            </div>
                            <div class="dropdodsswn-body niceScroll">

                                <!-- Start notification list -->
                                <div class="media-list small">

                                    @if(count(getNotifications())>0)
                                        @foreach(getNotifications() as $notifications)
                                             <a href="{{url($notifications->landing_url)}}" class="media">
                                                 <div class="media-object pull-left"><img src="{{ url('/public/img/uploads/profile/'.$notifications->last_sender_profile_pic) }}" alt="admin"></div>
                                                 <div class="media-body">
                                                     <span class="media-text"><strong>{{$notifications->num_of_notifications}} </strong><strong>{{$notifications->description}}</strong></span>
                                                     <!-- Start meta icon -->
                                                     <?php
                                                         $current_time = time();
                                                         $notification_time = $current_time - strtotime($notifications->updated_at);
                                                         $notification_time_in_min = intval(($notification_time/60)%60);

                                                         if($notification_time_in_min < 5)
                                                             $duration = "Few  minutes ago";
                                                         else if($notification_time_in_min > 5 && $notification_time_in_min <60)
                                                             $duration = "$notification_time_in_min  minutes ago";
                                                         else
                                                             $duration = "$notification_time_in_min/60  hours ago";
                                                     ?>
                                                     <span class="media-meta">{{$duration}}</span>
                                                     <!--/ End meta icon -->
                                                 </div><!-- /.media-body -->
                                             </a><!-- /.media -->

                                        @endforeach
                                    @else
                                        <h3>No Notifications Found</h3>
                                    @endif    

                                </div>
                                <!--/ End notification list -->

                            </div>
                            <div class="dropdown-footer">
                                <a href="#">See All</a>
                            </div>
                        </div>
                        <!--/ End dropdown menu -->

                    </li><!-- /.dropdown navbar-notification -->
                    <!--/ End notifications -->

                    <!-- Start profile -->
                    <li id="tour-6" class="dropdown navbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                   <span class="avatar"><img src="{{ url('/public/img/uploads/profile/'.session('profile_pic')) }}" class="img-circle" alt="admin"></span>
                                   <span class="text hidden-xs hidden-sm text-muted">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                   <span class="caret"></span>
                                </span>
                        </a>
                        <!-- Start dropdown menu -->
                        <ul class="dropdown-menu animated flipInX">
                            <li class="dropdown-header">Account</li>
                            <li><a href="page-profile.html"><i class="fa fa-user"></i>View profile</a></li>
                            <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                            <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                            <li class="dropdown-header">Product</li>
                            <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                            <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                            <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>Logout</a></li>
                        </ul>
                        <!--/ End dropdown menu -->
                    </li><!-- /.dropdown navbar-profile -->
                    <!--/ End profile -->

                    <!-- Start settings -->
                    <li id="tour-7" class="navbar-setting pull-right">
                        <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                    </li><!-- /.navbar-setting pull-right -->
                    <!--/ End settings -->

                </ul>
                <!--/ End right navigation -->

            </div><!-- /.navbar-toolbar -->
            <!--/ End navbar toolbar -->
        </div><!-- /.header-right -->
        <!--/ End header left -->

    </header> <!-- /#header -->
    <!--/ END HEADER -->

    <!--

            START @SIDEBAR LEFT
            |=========================================================================================================================|
            |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
            |=========================================================================================================================|
            |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
            |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
            |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
            |=========================================================================================================================|

            -->
    <aside id="sidebar-left" class="sidebar-circle">

        <!-- Start left navigation - profile shortcut -->
        <div id="tour-8" class="sidebar-content">
            <div class="media">
                <a class="pull-left has-notif avatar" href="page-profile.html">
                    <img src="{{ url('/public/img/uploads/profile/'.session('profile_pic')) }}" alt="admin">
                    <i class="online"></i>
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Hello, <span>{{ Auth::user()->last_name }}</span></h4>
                    <small>{{ session('emp_designation') }}</small>

                 </div>
            </div>
        </div><!-- /.sidebar-content -->
        <!--/ End left navigation -  profile shortcut -->

        <!-- Start left navigation - menu -->
        <ul id="tour-9" class="sidebar-menu">

            <!-- Start navigation - HRM Module -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="text">HRM</span>
                    <span class="arrow"></span>
                    <span class="selected"></span>
                </a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Employees</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/hrm/employees') }}">View Employees</a></li>
                            <li><a href="{{ url('/hrm/add-employee') }}">Add Employee</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Departments</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/hrm/departments') }}">View Departments</a></li>
                            <li><a href="{{ url('/hrm/add-department') }}">Add Departments</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Designations</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/hrm/designations') }}">View Designations</a></li>
                            <li><a href="{{ url('/hrm/add-designation') }}">Add Designations</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--/ End navigation - HRM Module -->
            
            <!-- Start navigation - Requisition Module -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="text">REQUISITIONS</span>
                    <span class="arrow"></span>
                    <span class="selected"></span>
                </a>
                <ul>
                    <li class="submenu ">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Requisition</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/hrm/employees') }}">Send Requisition</a></li>
                            <li><a href="{{ url('/hrm/add-employee') }}">Requisitions List</a></li>
                            <li><a href="{{ url('/hrm/add-employee') }}">Draft Requisitions List</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--/ End navigation - Requisition Module -->

            <!-- Start navigation - Production Module -->
            @if(Route::currentRouteName() == 'Suppliers List')
                {{--*/$cls = "active"/*/--}}
            @else 
                {{--*/$cls = ""/*/--}}
            @endif
            
            <li class="submenu {{$cls}}">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-bolt"></i></span>
                    <span class="text">PRODUCTION</span>
                    <span class="arrow"></span>
                    <span class="selected"></span>
                </a>
                <ul>
                    <li class="submenu {{$cls}}">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Suppliers</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/production/suppliers') }}">Suppliers List</a></li>
                            <li><a href="{{ url('/production/brands') }}">Brands List</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Orders</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/production/orders') }}">Orders List</a></li>
                            <li><a href="{{ url('/production/invoices') }}">Invoices</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Reports</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/production/report/orders') }}">Orders</a></li>
                            <li><a href="{{ url('/production/invoices') }}">Purchase</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Requisitions</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/production/requisitions/create') }}">Create Requisition</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ url('/production/requisitions') }}">New Requisitions</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ url('/production/requisitions/draft') }}">Draft Requisitions</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ url('/production/requisitions/sent') }}">Sent Requisitions</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Start navigation - Reports Module -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-bolt"></i></span>
                    <span class="text">REPORTS</span>
                    <span class="arrow"></span>
                    <span class="selected"></span>
                </a>
                <ul>
                    <li><a href="{{ url('/production/suppliers') }}">Orders</a></li>
                    <li><a href="{{ url('/production/suppliers') }}">Purchase</a></li>
                    <li><a href="{{ url('/production/suppliers') }}">Requisitions</a></li>
                    <li><a href="{{ url('/production/suppliers') }}">Invoices</a></li>
                </ul>
            </li>
            <!--/ End navigation - Reports Module -->
        </ul><!-- /.sidebar-menu -->
        <!--/ End left navigation - menu -->

        <!-- Start left navigation - footer -->
        <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
            <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
            <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-delatop"></i></a>
            <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
            <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
        </div><!-- /.sidebar-footer -->
        <!--/ End left navigation - footer -->

    </aside><!-- /#sidebar-left -->
    <!--/ END SIDEBAR LEFT -->

    <!-- START @PAGE CONTENT -->
        @yield('content')
    <!--/ END PAGE CONTENT -->

    <!-- START @SIDEBAR RIGHT -->
    <aside id="sidebar-right">

        <div class="panel panel-tab">
            <div class="panel-heading no-padding">
                <div class="pull-right">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#sidebar-profile" data-toggle="tab">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebar-layout" data-toggle="tab">
                                <i class="fa fa-cogs"></i>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#sidebar-setting" data-toggle="tab">
                                <i class="fa fa-paint-brush"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebar-chat" data-toggle="tab">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body no-padding">
                <div class="tab-content">
                    <div class="tab-pane" id="sidebar-profile">
                        <div class="sidebar-profile">

                            <!-- Start right navigation - menu -->
                            <ul class="sidebar-menu niceScroll">

                                <!-- Start category about me -->
                                <li class="sidebar-category">
                                    <span>ABOUT ME</span>
                                    <span class="pull-right"><i class="fa fa-newspaper-o"></i></span>
                                </li>
                                <!--/ End category about me -->

                                <!--/ Start navigation - about me -->
                                <li>
                                    <ul class="list-unstyled">
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        </li>
                                        <li>
                                            <i class="fa fa-refresh"></i> Last update about 2 hours ago
                                        </li>
                                        <li>
                                            <i class="fa fa-clock-o"></i> Total time spent 250 hrs
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i> Tol.lee@djavaui.com
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile"></i> 1 405 777 1212
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - about me -->

                                <!-- Start category recent activity -->
                                <li class="sidebar-category">
                                    <span>RECENT ACTIVITY</span>
                                    <span class="pull-right"><i class="fa fa-line-chart"></i></span>
                                </li>
                                <!--/ End category recent activity -->

                                <!--/ Start navigation - activity -->
                                <li>
                                    <div class="media-list activity">
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <i class="fa fa-flash"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Added a note to Ticket #947</span>
                                                <span class="media-meta time">about 2 hours ago</span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <i class="fa fa-flash"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Added a product to Ticket #948</span>
                                                <span class="media-meta time">about 3 hours ago</span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <i class="fa fa-flash"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Added a service to Ticket #949</span>
                                                <span class="media-meta time">about 15 hours ago</span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                    </div><!-- /.media-list -->
                                </li>
                                <!--/ End navigation - activity -->

                                <!-- Start category current working -->
                                <li class="sidebar-category">
                                    <span>CURRENTLY WORKING</span>
                                    <span class="pull-right"><i class="fa fa-group"></i></span>
                                </li>
                                <!--/ End category current working -->

                                <!-- Start left navigation - current working -->
                                <li>
                                    <div class="media-list working">
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <img src="{{ url('public/img/avatar/35/10.png') }}" class="img-circle" alt="Daddy Botak">
                                                <i class="online"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Daddy Botak</span>
                                                <span class="media-meta status">online</span>
                                                <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <img src="{{ url('public/img/avatar/35/11.png') }}" class="img-circle" alt="Sarah Tingting">
                                                <i class="offline"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Sarah Tingting</span>
                                                <span class="media-meta status">offline</span>
                                                <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                <span class="media-meta time">7 m</span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="">
                                                <i class="busy"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Nicolas Olivier</span>
                                                <span class="media-meta status">busy</span>
                                                <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <img src="{{ url('public/img/avatar/35/13.png') }}" class="img-circle" alt="Claudia Cinta">
                                                <i class="online"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Claudia Cinta</span>
                                                <span class="media-meta status">online</span>
                                                <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                            <div class="media-object pull-left has-notif">
                                                <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="">
                                                <i class="busy"></i>
                                            </div><!-- /.media-object -->
                                            <div class="media-body">
                                                <span class="media-heading">Catherine Parker</span>
                                                <span class="media-meta status">busy</span>
                                                <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
                                    </div><!-- /.media-list -->
                                </li>
                                <!--/ End left navigation - current working -->

                            </ul>
                            <!-- Start right navigation - menu -->
                        </div>
                    </div><!-- /#sidebar-profile -->
                    <div class="tab-pane" id="sidebar-layout">
                        <div class="sidebar-layout">

                            <!-- Start right navigation - menu -->
                            <ul class="sidebar-menu niceScroll">

                                <!--/ Start navigation - reset settings -->
                                <li>
                                    <a id="reset-setting" href="javascript:void(0);" class="btn btn-inverse btn-block"><i class="fa fa-refresh fa-spin"></i> RESET SETTINGS</a>
                                </li>
                                <!--/ End navigation - reset settings -->

                                <!-- Start category layout -->
                                <li class="sidebar-category">
                                    <span>LAYOUT</span>
                                    <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                </li>
                                <!--/ End category layout -->

                                <!--/ Start navigation - layout -->
                                <li>
                                    <ul class="list-unstyled layout-setting">
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="layout-fluid" type="radio" name="layout" value="">
                                                <label for="layout-fluid">Fluid</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="layout-boxed" type="radio" name="layout" value="page-boxed">
                                                <label for="layout-boxed">Boxed</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - layout -->

                                <!-- Start category header -->
                                <li class="sidebar-category">
                                    <span>HEADER</span>
                                    <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                </li>
                                <!--/ End category header -->

                                <!--/ Start navigation - header -->
                                <li>
                                    <ul class="list-unstyled header-layout-setting">
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="header-default" type="radio" name="header" value="">
                                                <label for="header-default">Default</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="header-fixed" type="radio" name="header" value="page-header-fixed">
                                                <label for="header-fixed">Fixed</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - header -->

                                <!-- Start category sidebar -->
                                <li class="sidebar-category">
                                    <span>SIDEBAR</span>
                                    <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                </li>
                                <!--/ End category sidebar -->

                                <!--/ Start navigation - sidebar -->
                                <li>
                                    <ul class="list-unstyled sidebar-layout-setting">
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-default" type="radio" name="sidebar" value="">
                                                <label for="sidebar-default">Default</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-fixed" type="radio" name="sidebar" value="page-sidebar-fixed">
                                                <label for="sidebar-fixed">Fixed</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - sidebar -->

                                <!-- Start category sidebar type -->
                                <li class="sidebar-category">
                                    <span>SIDEBAR TYPE</span>
                                    <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                </li>
                                <!--/ End category sidebar type -->

                                <!--/ Start navigation - sidebar -->
                                <li>
                                    <ul class="list-unstyled sidebar-type-setting">
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-type-default" type="radio" name="sidebarType" value="">
                                                <label for="sidebar-type-default">Default</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-type-box" type="radio" name="sidebarType" value="sidebar-box">
                                                <label for="sidebar-type-box">Box</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-type-rounded" type="radio" name="sidebarType" value="sidebar-rounded">
                                                <label for="sidebar-type-rounded">Rounded</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="sidebar-type-circle" type="radio" name="sidebarType" value="sidebar-circle">
                                                <label for="sidebar-type-circle">Circle</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - sidebar -->

                                <!-- Start category footer -->
                                <li class="sidebar-category">
                                    <span>FOOTER</span>
                                    <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                </li>
                                <!--/ End category footer -->

                                <!--/ Start navigation - footer -->
                                <li>
                                    <ul class="list-unstyled footer-layout-setting">
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="footer-default" type="radio" name="footer" value="">
                                                <label for="footer-default">Default</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rdio rdio-theme">
                                                <input id="footer-fixed" type="radio" name="footer" value="page-footer-fixed">
                                                <label for="footer-fixed">Fixed</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - footer -->

                            </ul>
                            <!-- Start right navigation - menu -->
                        </div>
                    </div><!-- /#sidebar-layout -->
                    <div class="tab-pane in active" id="sidebar-setting">
                        <div class="sidebar-setting">
                            <!-- Start right navigation - menu -->
                            <ul class="sidebar-menu">

                                <!-- Start category color schemes -->
                                <li class="sidebar-category">
                                    <span>COLOR SCHEMES</span>
                                    <span class="pull-right"><i class="fa fa-tint"></i></span>
                                </li>
                                <!--/ End category color schemes -->

                                <!-- Start navigation - themes -->
                                <li>
                                    <div class="sidebar-themes color-schemes">

                                        <a class="theme" href="javascript:void(0);" style="background-color: #81b71a" data-toggle="tooltip" data-placement="right" data-original-title="Default"><span class="hide">default</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #00B1E1" data-toggle="tooltip" data-placement="top" data-original-title="Blue"><span class="hide">blue</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #37BC9B" data-toggle="tooltip" data-placement="top" data-original-title="Cyan"><span class="hide">cyan</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #8CC152" data-toggle="tooltip" data-placement="top" data-original-title="Green"><span class="hide">green</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #E9573F" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="hide">red</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #F6BB42" data-toggle="tooltip" data-placement="top" data-original-title="Yellow"><span class="hide">yellow</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #906094" data-toggle="tooltip" data-placement="top" data-original-title="Purple"><span class="hide">purple</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #D39174" data-toggle="tooltip" data-placement="top" data-original-title="Brown"><span class="hide">brown</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #9FB478" data-toggle="tooltip" data-placement="left" data-original-title="Green Army"><span class="hide">green-army</span></a>

                                        <a class="theme" href="javascript:void(0);" style="background-color: #63D3E9" data-toggle="tooltip" data-placement="right" data-original-title="Blue Sea"><span class="hide">blue-sea</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #5577B4" data-toggle="tooltip" data-placement="top" data-original-title="Blue Gray"><span class="hide">blue-gray</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #AF86B9" data-toggle="tooltip" data-placement="top" data-original-title="Purple Gray"><span class="hide">purple-gray</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #CC6788" data-toggle="tooltip" data-placement="top" data-original-title="Purple Wine"><span class="hide">purple-wine</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #F06F6F" data-toggle="tooltip" data-placement="top" data-original-title="Alizarin Crimson"><span class="hide">alizarin-crimson</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #979797" data-toggle="tooltip" data-placement="top" data-original-title="Black And White"><span class="hide">black-and-white</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #8BC4B9" data-toggle="tooltip" data-placement="top" data-original-title="Amazon"><span class="hide">amazon</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #B0B069" data-toggle="tooltip" data-placement="top" data-original-title="Amber"><span class="hide">amber</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #A9C784" data-toggle="tooltip" data-placement="left" data-original-title="Android green"><span class="hide">android-green</span></a>

                                        <a class="theme" href="javascript:void(0);" style="background-color: #B3998A" data-toggle="tooltip" data-placement="right" data-original-title="Antique brass"><span class="hide">antique-brass</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #8D8D6E" data-toggle="tooltip" data-placement="top" data-original-title="Antique Bronze"><span class="hide">antique-bronze</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #B0B69D" data-toggle="tooltip" data-placement="top" data-original-title="Artichoke"><span class="hide">artichoke</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #F19B69" data-toggle="tooltip" data-placement="top" data-original-title="Atomic Tangerine"><span class="hide">atomic-tangerine</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #98777B" data-toggle="tooltip" data-placement="top" data-original-title="Bazaar"><span class="hide">bazaar</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #C3A961" data-toggle="tooltip" data-placement="top" data-original-title="Bistre Brown"><span class="hide">bistre-brown</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #D6725E" data-toggle="tooltip" data-placement="top" data-original-title="Bittersweet"><span class="hide">bittersweet</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #7789D1" data-toggle="tooltip" data-placement="top" data-original-title="Blueberry"><span class="hide">blueberry</span></a>
                                        <a class="theme" href="javascript:void(0);" style="background-color: #6FA362" data-toggle="tooltip" data-placement="left" data-original-title="Bud Green"><span class="hide">bud-green</span></a>

                                    </div>
                                </li>
                                <!--/ End navigation - themes -->

                                <!-- Start category navbar color -->
                                <li class="sidebar-category">
                                    <span>NAVBAR COLOR</span>
                                    <span class="pull-right"><i class="fa fa-tint"></i></span>
                                </li>
                                <!--/ End category navbar color -->

                                <!-- Start navigation - navbar color -->
                                <li>
                                    <div class="sidebar-themes navbar-color">

                                        <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                        <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                        <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                        <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                        <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                        <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                        <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                    </div><!-- /.navbar-color -->
                                </li>
                                <!--/ End navigation - navbar color -->

                                <!-- Start category sidebar color -->
                                <li class="sidebar-category">
                                    <span>SIDEBAR COLOR</span>
                                    <span class="pull-right"><i class="fa fa-tint"></i></span>
                                </li>
                                <!--/ End category sidebar color -->

                                <!-- Start navigation - sidebar color -->
                                <li>
                                    <div class="sidebar-themes sidebar-color">

                                        <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                        <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                        <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                        <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                        <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                        <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                        <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                    </div><!-- /.sidebar-color -->
                                </li>
                                <!--/ End navigation - sidebar color -->

                                <!-- Start category task progress -->
                                <li class="sidebar-category">
                                    <span>TASK PROGRESS</span>
                                    <span class="pull-right"><i class="fa fa-sliders"></i></span>
                                </li>
                                <!--/ End category task progress -->

                                <!--/ Start navigation - task progress -->
                                <li>
                                    <ul class="list-group sidebar-task">
                                        <li class="list-group-item">
                                            <p class="details"> <span> Core System </span> <span class="pull-right"> 82% </span> </p>
                                            <div class="progress progress-xs progress-striped active no-margin">
                                                <div style="width: 82%" class="progress-bar progress-bar-success"> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="details"> <span> Front-End </span> <span class="pull-right"> 67% </span> </p>
                                            <div class="progress progress-xs progress-striped active no-margin">
                                                <div style="width: 47%" class="progress-bar progress-bar-danger"> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="details"> <span> Back-End </span> <span class="pull-right"> 45% </span> </p>
                                            <div class="progress progress-xs progress-striped active no-margin">
                                                <div style="width: 47%" class="progress-bar progress-bar-info"> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End navigation - task progress -->

                                <!-- Start category summary system -->
                                <li class="sidebar-category">
                                    <span>SUMMARY SYSTEM</span>
                                    <span class="pull-right"><i class="fa fa-bar-chart-o"></i></span>
                                </li>
                                <!--/ End category summary system -->

                                <!-- Start left navigation - summary -->
                                <li>
                                    <ul class="sidebar-summary sparklines">
                                        <li>
                                            <div class="list-info">
                                                <span>Average Users</span>
                                                <h4>1, 412, 101</h4>
                                            </div>
                                            <div class="chart"><span class="average">4,2,3,2,4,2,5,1,2,2,5,3</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="list-info">
                                                <span>Daily Traffic</span>
                                                <h4>781, 601</h4>
                                            </div>
                                            <div class="chart"><span class="traffic">1,2,3,2,4,1,5,3,2,4,2,3</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="list-info">
                                                <span>Disk Usage</span>
                                                <h4>52.2%</h4>
                                            </div>
                                            <div class="chart"><span class="disk">5,5,3,2,1,3,4,3,2,4,1,3</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="list-info">
                                                <span>CPU Usage</span>
                                                <h4>67.8%</h4>
                                            </div>
                                            <div class="chart"><span class="cpu">1,5,3,2,4,5,5,3,2,4,5,3</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End left navigation - summary -->

                            </ul>
                            <!-- Start right navigation - menu -->
                        </div>
                    </div><!-- /#sidebar-setting -->
                    <div class="tab-pane" id="sidebar-chat">
                        <div class="sidebar-chat">

                            <form class="form-horizontal">
                                <div class="form-group has-feedback">
                                    <input class="form-control" type="text" placeholder="Search messages...">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>

                            <!-- Start right navigation - menu -->
                            <ul class="sidebar-menu niceScroll">

                                <!-- Start category family chat -->
                                <li class="sidebar-category">
                                    <span>FAMILY</span>
                                    <span class="pull-right"><i class="fa fa-home"></i></span>
                                </li>
                                <!--/ End category family chat -->

                                <li>
                                    <!-- Start chat - contact list -->
                                    <div class="media-list">
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/10.png') }}" class="img-circle" alt="Daddy Botak">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Daddy Botak</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/11.png') }}" class="img-circle" alt="Sarah Tingting">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Sarah Tingting</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                        <span class="media-meta time">7 m</span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Nicolas Olivier</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/12.png') }}" class="img-circle" alt="Harry Potret">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Harry Potret</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Catherine Parker</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                    </div><!-- /.media-list -->
                                    <!--/ End chat - contact list -->
                                </li>

                                <!-- Start category friends chat -->
                                <li class="sidebar-category">
                                    <span>FRIENDS</span>
                                    <span class="pull-right"><i class="fa fa-group"></i></span>
                                </li>
                                <!--/ End category friends chat -->

                                <li>
                                    <!-- Start chat - contact list -->
                                    <div class="media-list">
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/15.png') }}" class="img-circle" alt="Jeck Joko">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Jeck Joko</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/16.png') }}" class="img-circle" alt="Tenny Imoet">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Tenny Imoet</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/17.png') }}" class="img-circle" alt="Leli Madang">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Leli Madang</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 m</span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/18.png') }}" class="img-circle" alt="Rebecca Cabean">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Rebecca Cabean</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">8 m</span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">ondoel return</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                    </div><!-- /.media-list -->
                                    <!--/ End chat - contact list -->
                                </li>

                                <!-- Start category other chat -->
                                <li class="sidebar-category">
                                    <span>OTHERS</span>
                                    <span class="pull-right"><i class="fa fa-share"></i></span>
                                </li>
                                <!--/ End category other chat -->

                                <li>
                                    <!-- Start chat - contact list -->
                                    <div class="media-list">
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/19.png') }}" class="img-circle" alt="Sishy Mawar">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Sishy Mawar</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">23 m</span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/20.png') }}" class="img-circle" alt="Mbah Roso">
                                                        <i class="away"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Mbah Roso</span>
                                                        <span class="media-meta status">away</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 h</span>
                                                    </span>
                                        </a><!-- /.media -->
                                        <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="{{ url('public/img/avatar/35/26.png') }}" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Alma Butoi</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                        </a><!-- /.media -->
                                    </div><!-- /.media-list -->
                                    <!--/ End chat - contact list -->
                                </li>

                            </ul><!-- /.sidebar-menu -->
                            <!-- Start right navigation - menu -->

                        </div><!-- /.sidebar-setting -->
                    </div><!-- /#sidebar-chat -->
                </div>
            </div>
        </div>

    </aside><!-- /#sidebar-right -->
    <!--/ END SIDEBAR RIGHT -->

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

 <!-- START @ADDITIONAL ELEMENT -->
<!--div class="modal modal-success fade" id="modal-bootstrap-tour" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Welcome to Blankon</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left" style="padding-right: 15px;">
                        <a href="#">
                           <img data-no-retina class="media-object" src="{{ url('public/img/media/mascot/1.jpg') }}" alt="..." style="width: 100px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Hello, my name is Mr.Blankon</h4>
                        <b>Introduction</b> - Blankon fullpack admin theme is a theme full pack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.callModal2()" data-dismiss="modal">Let's tour <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>
    </div>
</div-->

<div class="modal modal-success fade" id="modal-bootstrap-tour-new-features" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Features</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Page</th>
                            <th>Description</th>
                            <th style="width: 90px" class="text-center">Live preview</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="min-width: 150px">
                                Material Design version
                            </td>
                            <td>
                                It is a design language developed by Google. Material Design makes more liberal use of grid-based layouts, responsive animations and depth effects such as lighting and shadows.
                            </td>
                            <td class="text-center">
                                <a href="http://themes.djavaui.com/blankon-fullpack-admin-theme/live-preview/admin/material-design/dashboard.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="min-width: 150px">
                                Photography type 2
                            </td>
                            <td>
                                This design suitable for your portfolio photography, so simple and the best UI/UX photography website.
                            </td>
                            <td class="text-center">
                                <a href="http://themes.djavaui.com/blankon-fullpack-admin-theme/live-preview/frontend/one-page-revolution-slider/photography-type-2/html/index.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="min-width: 150px">
                                UI features notifications page
                            </td>
                            <td>
                                It makes it easy to create alert - success - error - warning - information - confirmation messages as an alternative the standard alert dialog
                            </td>
                            <td class="text-center">
                                <a href="ui-feature-notifications.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Next</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="modal-bootstrap-tour-end" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">End Blankon Tour</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img data-no-retina class="media-object" src="{{ url('public/img/media/mascot/1.jpg') }}" alt="..." style="width: 100px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Thanks for watching!</h4>
                        <p>Thank you for view our blankon tour. If you already purchased Blankon and then you have any questions that are beyond the scope of this help file. You can visit us on below :</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://wrapbootstrap.com/user/djavaui" class="btn btn-inverse tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Wrapbootstrap">W</a>
                            </li>
                            <li>
                                <a href="http://djavaui.com/" class="btn btn-lilac tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Our Website"><i class="fa fa-globe"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/djavaui/" class="btn btn-facebook tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/djavaui" class="btn btn-twitter tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/102744122511959250698" class="btn btn-googleplus tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Google+"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/djavaui" class="btn btn-default tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Github"><i class="fa fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCt_dudJF4_0bOkQkwYN2qQQ" class="btn btn-youtube tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Youtube"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                        <b>Thanks so much!</b>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Let's tour again <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!--/ END ADDITIONAL ELEMENT -->
@include('layouts.js-scripts')
<!--/ END JAVASCRIPT SECTION -->
</body>
<!--/ END BODY -->
</html>
