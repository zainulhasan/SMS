<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Data Tables - Advanced Datatables</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
		<img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
									<img src="./assets/img/avatar2.jpg" alt=""/>
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
									<img src="./assets/img/avatar3.jpg" alt=""/>
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
									<img src="./assets/img/avatar1.jpg" alt=""/>
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
									<img src="./assets/img/avatar2.jpg" alt=""/>
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
									<img src="./assets/img/avatar3.jpg" alt=""/>
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
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
									<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="assets/img/avatar1_small.jpg"/>
				<span class="username">
					Bob Nilson
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
						<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
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
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="index.html">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					</a>
				</li>
				<li class="">
					<a href="index_horizontal_menu.html">
					<i class="fa fa-briefcase"></i>
					<span class="title">
						Dashboard 2
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">
						Layouts
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_session_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Session Timeout</a>
						</li>
						<li>
							<a href="layout_idle_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							User Idle Timeout</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							Language Switch Bar</a>
						</li>
						<li>
							<a href="layout_horizontal_sidebar_menu.html">
							Horizontal & Sidebar Menu</a>
						</li>
						<li>
							<a href="layout_horizontal_menu1.html">
							Horizontal Menu 1</a>
						</li>
						<li>
							<a href="layout_horizontal_menu2.html">
							Horizontal Menu 2</a>
						</li>
						<li>
							<a href="layout_search_on_header.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Search Box On Header</a>
						</li>
						<li>
							<a href="layout_sidebar_toggler_on_header.html">
							Sidebar Toggler On Header</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
							Right Sidebar Page</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
							Disabled Menu Links</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							Blank Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_boxed_not_responsive.html">
							Non-Responsive Boxed Layout</a>
						</li>
						<li>
							<a href="layout_promo.html">
							Promo Page</a>
						</li>
						<li>
							<a href="layout_email.html">
							Email Templates</a>
						</li>
						<li>
							<a href="layout_ajax.html">
							Content Loading via Ajax</a>
						</li>
					</ul>
				</li>
				<li id="frontend-link" class="tooltips" data-placement="right" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
					<a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
					<i class="fa fa-gift"></i>
					<span class="title">
						Frontend Theme
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-bookmark-o"></i>
					<span class="title">
						UI Features
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons & Icons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
							Date Paginator</a>
						</li>
						<li>
							<a href="ui_bootbox.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Bootbox Dialogs</a>
						</li>
						<li>
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_noui_sliders.html">
							NoUI Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-table"></i>
					<span class="title">
						Form Stuff
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-roundless badge-warning">
								new
							</span>
							Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-sitemap"></i>
					<span class="title">
						Pages
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_portfolio.html">
							<i class="fa fa-briefcase"></i>
							<span class="badge badge-warning badge-roundless">
								new
							</span>
							Portfolio</a>
						</li>
						<li>
							<a href="page_timeline.html">
							<i class="fa fa-clock-o"></i>
							<span class="badge badge-info">
								4
							</span>
							Timeline</a>
						</li>
						<li>
							<a href="page_coming_soon.html">
							<i class="fa fa-cogs"></i>
							Coming Soon</a>
						</li>
						<li>
							<a href="page_blog.html">
							<i class="fa fa-comments"></i>
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							<i class="fa fa-font"></i>
							Blog Post</a>
						</li>
						<li>
							<a href="page_news.html">
							<i class="fa fa-coffee"></i>
							<span class="badge badge-success">
								9
							</span>
							News</a>
						</li>
						<li>
							<a href="page_news_item.html">
							<i class="fa fa-bell"></i>
							News View</a>
						</li>
						<li>
							<a href="page_about.html">
							<i class="fa fa-group"></i>
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							<i class="fa fa-envelope-o"></i>
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="fa fa-calendar"></i>
							<span class="badge badge-important">
								14
							</span>
							Calendar</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-gift"></i>
					<span class="title">
						Extra
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="extra_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="extra_lock.html">
							Lock Screen</a>
						</li>
						<li>
							<a href="extra_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="inbox.html">
							<span class="badge badge-important">
								4
							</span>
							Inbox</a>
						</li>
						<li>
							<a href="extra_search.html">
							Search Results</a>
						</li>
						<li>
							<a href="extra_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="extra_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="extra_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="extra_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="extra_404_option3.html">
							404 Page Option 3</a>
						</li>
						<li>
							<a href="extra_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="extra_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-leaf"></i>
					<span class="title">
						3 Level Menu
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 2</a>
								</li>
								<li>
									<a href="#">Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-folder-open"></i>
					<span class="title">
						4 Level Menu
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="fa fa-cogs"></i> Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="fa fa-user"></i>
									Sample Link 1
									<span class="arrow">
									</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="fa fa-remove"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-globe"></i> Item 2
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-folder-open"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-user"></i>
					<span class="title">
						Login Options
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="login.html">
							Login Form 1</a>
						</li>
						<li>
							<a href="login_soft.html">
							Login Form 2</a>
						</li>
					</ul>
				</li>
				<li class="active ">
					<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span class="title">
						Data Tables
					</span>
					<span class="selected">
					</span>
					<span class="arrow open">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Datatables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Datatables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Datatables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Datatables</a>
						</li>
						<li class="active">
							<a href="table_advanced.html">
							Advanced Datatables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">
						Portlets
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-map-marker"></i>
					<span class="title">
						Maps
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="charts.html">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Visual Charts
					</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Advanced Datatables <small>advanced datatables</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Data Tables</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Advanced Datatables</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Responsive Table With Expandable details
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									Rendering engine
								</th>
								<th>
									Browser
								</th>
								<th>
									Platform(s)
								</th>
								<th>
									Engine version
								</th>
								<th>
									CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 4.0
								</td>
								<td>
									Win 95+
								</td>
								<td>
									4
								</td>
								<td>
									X
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 5.0
								</td>
								<td>
									Win 95+
								</td>
								<td>
									5
								</td>
								<td>
									C
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 5.5
								</td>
								<td>
									Win 95+
								</td>
								<td>
									5.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 6
								</td>
								<td>
									Win 98+
								</td>
								<td>
									6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 7
								</td>
								<td>
									Win XP SP2+
								</td>
								<td>
									7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									AOL browser (AOL desktop)
								</td>
								<td>
									Win XP
								</td>
								<td>
									6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 1.0
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 1.5
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 2.0
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 3.0
								</td>
								<td>
									Win 2k+ / OSX.3+
								</td>
								<td>
									1.9
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Camino 1.0
								</td>
								<td>
									OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Camino 1.5
								</td>
								<td>
									OSX.3+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape 7.2
								</td>
								<td>
									Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape Browser 8
								</td>
								<td>
									Win 98SE+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape Navigator 9
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.0
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.1
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.2
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.2
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.3
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.3
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.4
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.4
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.5
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.6
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.7
								</td>
								<td>
									Win 98+ / OSX.1+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.8
								</td>
								<td>
									Win 98+ / OSX.1+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Seamonkey 1.1
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Epiphany 2.20
								</td>
								<td>
									Gnome
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 1.2
								</td>
								<td>
									OSX.3
								</td>
								<td>
									125.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 1.3
								</td>
								<td>
									OSX.3
								</td>
								<td>
									312.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 2.0
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									419.3
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 3.0
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									522.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									OmniWeb 5.5
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									420
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									iPod Touch / iPhone
								</td>
								<td>
									iPod
								</td>
								<td>
									420.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									S60
								</td>
								<td>
									S60
								</td>
								<td>
									413
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 7.0
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 7.5
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 8.0
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 8.5
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.0
								</td>
								<td>
									Win 95+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.2
								</td>
								<td>
									Win 88+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.5
								</td>
								<td>
									Win 88+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera for Wii
								</td>
								<td>
									Wii
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Nokia N800
								</td>
								<td>
									N800
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Nintendo DS browser
								</td>
								<td>
									Nintendo DS
								</td>
								<td>
									8.5
								</td>
								<td>
									C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Show/Hide Columns
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="#" data-toggle="dropdown">
									Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="0">Rendering engine</label>
										<label><input type="checkbox" checked data-column="1">Browser</label>
										<label><input type="checkbox" checked data-column="2">Platform(s)</label>
										<label><input type="checkbox" checked data-column="3">Engine version</label>
										<label><input type="checkbox" checked data-column="4">CSS grade</label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
							<thead>
							<tr>
								<th>
									Rendering engine
								</th>
								<th>
									Browser
								</th>
								<th class="hidden-xs">
									Platform(s)
								</th>
								<th class="hidden-xs">
									Engine version
								</th>
								<th class="hidden-xs">
									CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 4.0
								</td>
								<td>
									Win 95+
								</td>
								<td>
									4
								</td>
								<td>
									X
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 5.0
								</td>
								<td>
									Win 95+
								</td>
								<td>
									5
								</td>
								<td>
									C
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 5.5
								</td>
								<td>
									Win 95+
								</td>
								<td>
									5.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 6
								</td>
								<td>
									Win 98+
								</td>
								<td>
									6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									Internet Explorer 7
								</td>
								<td>
									Win XP SP2+
								</td>
								<td>
									7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Trident
								</td>
								<td>
									AOL browser (AOL desktop)
								</td>
								<td>
									Win XP
								</td>
								<td>
									6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 1.0
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 1.5
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 2.0
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Firefox 3.0
								</td>
								<td>
									Win 2k+ / OSX.3+
								</td>
								<td>
									1.9
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Camino 1.0
								</td>
								<td>
									OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Camino 1.5
								</td>
								<td>
									OSX.3+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape 7.2
								</td>
								<td>
									Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape Browser 8
								</td>
								<td>
									Win 98SE+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Netscape Navigator 9
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.0
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.1
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.2
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.2
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.3
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.3
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.4
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.4
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.5
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.6
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									1.6
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.7
								</td>
								<td>
									Win 98+ / OSX.1+
								</td>
								<td>
									1.7
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Mozilla 1.8
								</td>
								<td>
									Win 98+ / OSX.1+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Seamonkey 1.1
								</td>
								<td>
									Win 98+ / OSX.2+
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Gecko
								</td>
								<td>
									Epiphany 2.20
								</td>
								<td>
									Gnome
								</td>
								<td>
									1.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 1.2
								</td>
								<td>
									OSX.3
								</td>
								<td>
									125.5
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 1.3
								</td>
								<td>
									OSX.3
								</td>
								<td>
									312.8
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 2.0
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									419.3
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									Safari 3.0
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									522.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									OmniWeb 5.5
								</td>
								<td>
									OSX.4+
								</td>
								<td>
									420
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									iPod Touch / iPhone
								</td>
								<td>
									iPod
								</td>
								<td>
									420.1
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Webkit
								</td>
								<td>
									S60
								</td>
								<td>
									S60
								</td>
								<td>
									413
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 7.0
								</td>
								<td>
									Win 95+ / OSX.1+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 7.5
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 8.0
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 8.5
								</td>
								<td>
									Win 95+ / OSX.2+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.0
								</td>
								<td>
									Win 95+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.2
								</td>
								<td>
									Win 88+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera 9.5
								</td>
								<td>
									Win 88+ / OSX.3+
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Opera for Wii
								</td>
								<td>
									Wii
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Nokia N800
								</td>
								<td>
									N800
								</td>
								<td>
									-
								</td>
								<td>
									A
								</td>
							</tr>
							<tr>
								<td>
									Presto
								</td>
								<td>
									Nintendo DS browser
								</td>
								<td>
									Nintendo DS
								</td>
								<td>
									8.5
								</td>
								<td>
									C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/table-advanced.js"></script>
<script>
jQuery(document).ready(function() {       
   App.init();
   TableAdvanced.init();
});
</script>
</body>
<!-- END BODY -->
</html>