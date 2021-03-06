<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('layout.head')

<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a class="navbar-brand" href="/">
            <img src="{{URL::asset('assets/img/logo.png')}}" alt="logo" class="img-responsive"/>
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="{{URL::asset('assets/img/menu-toggler.png')}}" alt=""/>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="fa fa-warning"></i>
                    <span class="badge">
					6
				</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>
                            You have 14 new notifications
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="#">
								<span class="label label-icon label-success">
									<i class="fa fa-plus"></i>
								</span>
                                    New user registered.
                                    <span class="time">
									Just now
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
                                    Server #12 overloaded.
                                    <span class="time">
									15 mins
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
                                    Server #2 not responding.
                                    <span class="time">
									22 mins
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
                                    Application error.
                                    <span class="time">
									40 mins
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
                                    Database overloaded 68%.
                                    <span class="time">
									2 hrs
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
                                    2 user IP blocked.
                                    <span class="time">
									5 hrs
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
                                    Storage Server #4 not responding.
                                    <span class="time">
									45 mins
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
                                    System Error.
                                    <span class="time">
									55 mins
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
                                    Database overloaded 68%.
                                    <span class="time">
									2 hrs
								</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">
					5
				</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p>
                            You have 12 new messages
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="inbox.html?a=view">
								<span class="photo">
									<img src="{{URL::asset('./assets/img/avatar2.jpg')}}" alt=""/>
								</span>
                                    <span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										Just Now
									</span>
								</span>
                                    <span class="message">
									 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
								<span class="photo">
									<img src="{{URL::asset('../assets/img/avatar3.jpg')}}" alt=""/>
								</span>
                                    <span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										16 mins
									</span>
								</span>
                                    <span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
								<span class="photo">
									<img src="{{URL::asset('../assets/img/avatar1.jpg')}}" alt=""/>
								</span>
                                    <span class="subject">
									<span class="from">
										Bob Nilson
									</span>
									<span class="time">
										2 hrs
									</span>
								</span>
                                    <span class="message">
									 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
								<span class="photo">

                                    <img src="{{URL::asset('../assets/img/avatar2.jpg')}}" alt=""/>
								</span>
                                    <span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										40 mins
									</span>
								</span>
                                    <span class="message">
									 Vivamus sed auctor 40% nibh congue nibh...
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
								<span class="photo">
									<img src="{{URL::asset('../assets/img/avatar3.jpg')}}" alt=""/>
								</span>
                                    <span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										46 mins
									</span>
								</span>
                                    <span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">
					5
				</span>
                </a>
                <ul class="dropdown-menu extended tasks">
                    <li>
                        <p>
                            You have 12 pending tasks
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										New release v1.2
									</span>
									<span class="percent">
										30%
									</span>
								</span>
                                    <span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											40% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										Application deployment
									</span>
									<span class="percent">
										65%
									</span>
								</span>
                                    <span class="progress progress-striped">
									<span style="width: 65%;" class="progress-bar progress-bar-danger"
                                          aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											65% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										Mobile app release
									</span>
									<span class="percent">
										98%
									</span>
								</span>
                                    <span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success"
                                          aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											98% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										Database migration
									</span>
									<span class="percent">
										10%
									</span>
								</span>
                                    <span class="progress progress-striped">
									<span style="width: 10%;" class="progress-bar progress-bar-warning"
                                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											10% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										Web server upgrade
									</span>
									<span class="percent">
										58%
									</span>
								</span>
                                    <span class="progress progress-striped">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58"
                                          aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											58% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										Mobile development
									</span>
									<span class="percent">
										85%
									</span>
								</span>
                                    <span class="progress progress-striped">
									<span style="width: 85%;" class="progress-bar progress-bar-success"
                                          aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											85% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
								<span class="task">
									<span class="desc">
										New UI release
									</span>
									<span class="percent">
										18%
									</span>
								</span>
                                    <span class="progress progress-striped">
									<span style="width: 18%;" class="progress-bar progress-bar-important"
                                          aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											18% Complete
										</span>
									</span>
								</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <img alt="" src="{{URL::asset('assets/img/avatar1_small.jpg')}}"/>
                    <span class="username">

                        {{ Auth::user()? Auth::user()->username:"Admin" }}
				</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
                    </li>
                    <li>
                        <a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox
                            <span class="badge badge-danger">
							3
						</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks"></i> My Tasks
                            <span class="badge badge-success">
							7
						</span>
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Full Screen</a>
                    </li>
                    <li>
                        <a href="extra_lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"><i class="fa fa-key"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('layout.sidebar')
<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
						<span>
							THEME COLOR
						</span>
                        <ul>
                            <li class="color-black current color-default" data-style="default">
                            </li>
                            <li class="color-blue" data-style="blue">
                            </li>
                            <li class="color-brown" data-style="brown">
                            </li>
                            <li class="color-purple" data-style="purple">
                            </li>
                            <li class="color-grey" data-style="grey">
                            </li>
                            <li class="color-white color-light" data-style="light">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
						<span>
							Layout
						</span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Header
						</span>
                        <select class="header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Sidebar
						</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Sidebar Position
						</span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Footer
						</span>
                        <select class="footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                @yield('top-option')

            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
        @yield('content')
        <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layout.footer')
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

<script src="{{URL::asset('assets/plugins/respond.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/excanvas.min.js')}}"></script>
<![endif]-->


<script src="{{URL::asset('assets/plugins/jquery-1.10.2.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/jquery-migrate-1.2.1.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/jquery.blockui.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/jquery.cokie.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/uniform/jquery.uniform.min.js')}}"></script>







<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('scripts')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="{{URL::asset('assets/scripts/jquery-impromptu.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootbox/bootbox.min.js')}}"></script>
<script src="{{URL::asset('assets/scripts/toastr.min.js')}}"></script>

<script src="{{URL::asset('assets/scripts/custom.js')}}"></script>


</body>
<!-- END BODY -->
</html>