<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/navigation_horizontal_elements.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li class="dropdown mega-menu mega-menu-wide active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-menu7"></i>
						<span class="visible-xs-inline-block position-right">Navigation</span>
						<span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-2">
									<span class="menu-heading underlined">Form components</span>
									<ul class="menu-list">
										<li><a href="form_inputs_basic">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups">Input groups</a></li>
										<li><a href="form_controls_extended">Extended controls</a></li>
										<li><a href="form_floating_labels">Floating labels</a></li>
										<li><a href="form_select2">Selects</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">UI components</span>
									<ul class="menu-list">
										<li><a href="components_modals">Modals</a></li>
										<li><a href="components_dropdowns">Dropdown menus <span class="badge badge-default">30+</span></a></li>
										<li><a href="components_popups">Tooltips and popovers</a></li>
										<li><a href="components_tabs">Tabs component</a></li>
										<li><a href="components_navs">Accordion and navs</a></li>
										<li><a href="components_notifications_pnotify">Notifications <span class="badge badge-danger">3</span></a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Sidebars</span>
									<ul class="menu-list">
										<li><a href="sidebar_default_collapse">Default sidebar</a></li>
										<li><a href="sidebar_mini_collapse">Mini sidebar</a></li>
										<li><a href="sidebar_dual">Dual sidebar</a></li>
										<li><a href="sidebar_double_collapse">Double sidebar</a></li>
										<li><a href="sidebar_detached_left">Detached sidebar</a></li>
										<li><a href="sidebar_components">Sidebar components</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Navigation</span>
									<ul class="menu-list">
										<li><a href="navigation_horizontal_click">Submenu on click</a></li>
										<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
										<li class="active"><a href="navigation_horizontal_elements">With custom elements</a></li>
										<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
										<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Navbars</span>
									<ul class="menu-list">
										<li><a href="navbar_single">Single navbar</a></li>
										<li><a href="navbar_multiple_navbar_navbar">Multiple navbars</a></li>
										<li><a href="navbar_colors">Color options</a></li>
										<li><a href="navbar_sizes">Sizing options <span class="badge badge-info">14</span></a></li>
										<li><a href="navbar_hideable">Hide on scroll</a></li>
										<li><a href="navbar_components">Navbar components</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Extensions</span>
									<ul class="menu-list">
										<li><a href="extension_dnd">Drag &amp; drop <span class="label label-primary">HOT</span></a></li>
										<li><a href="extension_blockui">Block UI</a></li>
										<li><a href="uploader_plupload">File uploaders</a></li>
										<li><a href="extension_image_cropper">Image cropper</a></li>
										<li><a href="internationalization_switch_direct">Translation <span class="label label-success">New</span></a></li>
										<li><a href="extension_fullcalendar_views">Calendars</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="#"><i class="icon-statistics position-left"></i> Statistics</a></li>
				<li><a href="#"><i class="icon-cog3 position-left"></i> Settings</a></li>
				<li><a href="#"><i class="icon-help position-left"></i> Help</a></li>
			</ul>

			<div class="navbar-right">
				<form class="navbar-form navbar-left">
					<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
						<input type="checkbox" class="navbar-switch" checked="checked">
						Auto login
					</label>
				</form>

				<ul class="nav navbar-nav">
					<li class="dropdown language-switch">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/flags/es.png" class="position-left" alt="">
							España
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
							<li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
							<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
							<li class="active"><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
							<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
						</ul>
					</li>

					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/placeholder.jpg" alt="">
							<span>Victoria</span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
							<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
							<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
							<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Horizontal Nav</span> - Custom Elements</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="navigation_horizontal_elements">Horizontal nav</a></li>
							<li class="active">Custom elements</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Custom elements -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Custom elements</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="content-group">
								<p class="content-group">Horizontal navigation is a navbar component. It means that it can be used along with all default and custom components: forms, buttons, text, selects, progress bars, checkboxes, radios, labels, badges, file uploaders etc. Also all of them look similar in all navbar styles and sizes. <strong>Please note:</strong> some components require additional color options, such as <code>switchery</code>, <code>checkboxes/radios</code>, <code>file uploader</code> and <code>select2</code>.</p>

								<p class="text-semibold">Example navigation</p>
								<div class="navbar navbar-inverse bg-indigo-400 navbar-component" style="position: relative; z-index: 30;">
									<div class="navbar-header">
										<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

										<ul class="nav navbar-nav pull-right visible-xs-block">
											<li><a data-toggle="collapse" data-target="#demo1"><i class="icon-tree5"></i></a></li>
										</ul>
									</div>

									<div class="navbar-collapse collapse" id="demo1">
										<ul class="nav navbar-nav">
											<li class="mega-menu mega-menu-wide active">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu7"></i>
													<span class="visible-xs-inline-block position-right">Navigation</span>
													<span class="caret"></span>
												</a>

												<div class="dropdown-menu dropdown-content">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-md-2">
																<span class="menu-heading underlined">Form components</span>
																<ul class="menu-list">
																	<li><a href="form_components">General components</a></li>
																	<li><a href="form_components_advanced">Advanced components</a></li>
																	<li><a href="form_select2">Selects</a></li>
																	<li><a href="form_dual_listboxes">Dual Listboxes</a></li>
																	<li><a href="form_editable">Editable forms</a></li>
																	<li><a href="form_validation">Validation</a></li>
																</ul>
															</div>
															<div class="col-md-2">
																<span class="menu-heading underlined">UI components</span>
																<ul class="menu-list">
																	<li><a href="components_modals">Modals</a></li>
																	<li><a href="components_dropdowns">Dropdown menus <span class="badge badge-default">30+</span></a></li>
																	<li><a href="components_popups">Tooltips and popovers</a></li>
																	<li><a href="components_tabs">Tabs component</a></li>
																	<li><a href="components_navs">Accordion and navs</a></li>
																	<li><a href="components_notifications_pnotify">Notifications <span class="badge badge-danger">3</span></a></li>
																</ul>
															</div>
															<div class="col-md-2">
																<span class="menu-heading underlined">Sidebars</span>
																<ul class="menu-list">
																	<li><a href="sidebar_default_collapse">Default sidebar</a></li>
																	<li><a href="sidebar_mini_collapse">Mini sidebar</a></li>
																	<li><a href="sidebar_dual">Dual sidebar</a></li>
																	<li><a href="sidebar_double_collapse">Double sidebar</a></li>
																	<li><a href="sidebar_light">Light sidebar</a></li>
																	<li><a href="sidebar_components">Sidebar components</a></li>
																</ul>
															</div>
															<div class="col-md-2">
																<span class="menu-heading underlined">Navigation</span>
																<ul class="menu-list">
																	<li><a href="navigation_horizontal_click">Submenu on click</a></li>
																	<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
																	<li class="active"><a href="navigation_horizontal_elements">With custom elements</a></li>
																	<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
																	<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																	<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
																</ul>
															</div>
															<div class="col-md-2">
																<span class="menu-heading underlined">Navbars</span>
																<ul class="menu-list">
																	<li><a href="navbar_single">Single navbar</a></li>
																	<li><a href="navbar_multiple_navbar_navbar">Multiple navbars</a></li>
																	<li><a href="navbar_colors">Color options</a></li>
																	<li><a href="navbar_sizes">Sizing options <span class="badge badge-info">14</span></a></li>
																	<li><a href="navbar_hideable">Hide on scroll</a></li>
																	<li><a href="navbar_components">Navbar components</a></li>
																</ul>
															</div>
															<div class="col-md-2">
																<span class="menu-heading underlined">Extensions</span>
																<ul class="menu-list">
																	<li><a href="extension_velocity_basic">Velocity animations <span class="label label-primary">HOT</span></a></li>
																	<li><a href="extension_blockui">Block UI</a></li>
																	<li><a href="uploader_plupload">File uploaders</a></li>
																	<li><a href="extension_image_cropper">Image cropper</a></li>
																	<li><a href="internationalization_switch_direct">Translation <span class="label label-success">New</span></a></li>
																	<li><a href="extra_fullcalendar_views">Calendars</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li><a href="#"><i class="icon-envelop2 position-left"></i> Messages <span class="badge bg-indigo-800 badge-inline position-right">26</span></a></li>
											<li><a href="#"><i class="icon-cog3 position-left"></i> Settings</a></li>
										</ul>

										<div class="navbar-right">
											<form class="navbar-form navbar-left" action="#">
												<div class="form-group has-feedback">
													<input type="search" class="form-control input-xs" placeholder="Search field">
													<div class="form-control-feedback">
														<i class="icon-search4 text-muted text-size-base"></i>
													</div>
												</div>
											</form>

											<ul class="nav navbar-nav">
												<li class="dropdown language-switch">
													<a class="dropdown-toggle" data-toggle="dropdown">
														<img src="assets/images/flags/ua.png" class="position-left" alt="">
														Українська
														<span class="caret"></span>
													</a>

													<ul class="dropdown-menu">
														<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
														<li class="active"><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
														<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
														<li><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
														<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
													</ul>
												</li>

												<li class="dropdown dropdown-user">
													<a class="dropdown-toggle" data-toggle="dropdown">
														<img src="assets/images/placeholder.jpg" alt="">
														<span>Victoria</span>
														<i class="caret"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
														<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
														<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
														<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<p class="text-semibold">Example markup:</p>
								<pre class="language-markup"><code>&lt;!-- Left aligned navigation -->
&lt;ul class="nav navbar-nav">
	&lt;li class="active">&lt;a href="#">Link&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
&lt;/ul>
&lt;!-- /left aligned navigation -->

&lt;!-- Left aligned search form -->
&lt;form class="navbar-form navbar-left" action="#">
	&lt;div class="form-group has-feedback">
		&lt;input type="search" class="form-control input-xs bg-primary" placeholder="Search">
		&lt;div class="form-control-feedback">
			&lt;i class="icon-search4 text-normal">&lt;/i>
		&lt;/div>
	&lt;/div>
&lt;/form>
&lt;!-- /left aligned search form -->

&lt;!-- Right aligned form -->
&lt;div class="navbar-right">
	&lt;form class="navbar-form navbar-left" action="#">
		&lt;div class="checkbox-inline checkbox-right">
			&lt;input type="checkbox" id="stay-online" class="styled" checked="checked">
			&lt;label for="stay-online">Stay online&lt;/label>
		&lt;/div>
	&lt;/form>
&lt;/div>
&lt;!-- /right aligned form -->
</code></pre>
							</div>
						</div>
					</div>
					<!-- /custom elements -->


					<!-- Horizontal navigation overview -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Navigation overview</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="content-group-lg">
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">1. Navigation placement</h6>
								<p>Simple usage of horizontal navigation allows to add simple navigation links to the main navbar: left or right position, excluding navbar header area with logo. For more advanced usage navigation can have multiple menu levels, tabbed navigation option, links with icons, inline and absolute positioned labels and badges etc. And can be placed in separate secondary navbar or in both navbars: top or bottom, fixed or static. Everything depends on specific needs. Since horizontal navigation is a part of <code>navbar</code> component, is does support all available navbar options, components, sizes, colors etc.</p>
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">2. Double side navigation</h6>
								<p>By default horizontal navigation supports 2 main positions: <code>left</code> and <code>right</code>. For these positions are responsible 2 classes: <code>.navbar-left</code> and <code>navbar-right</code> that can be added to all navbar components to align them properly. For more advanced options like 3 or more positions, add grid columns inside navbar content. But please note: BS grid is mobile-first, if you need to use responsive columns, they wrap to a new line on certain screen size. To avoid this issue use <code>.col-xs-*</code> classes.</p>
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">3. Multiple level dropdowns</h6>
								<p>Horizontal navigation supports multiple menu levels with different directions. Navigation menu uses default markup for Bootstrap <strong>dropdown menus</strong> and opens children levels <strong>on click</strong>. Another option available - show submenu <strong>on hover</strong> using <code>hover_dropdown.js</code> plugin. Navigation dropdopwns support all available options for dropdown menus: border and background colors, icons, headers, dividers etc. For example - they can be white or match navbar background color by adding <code>.bg-*</code> and <code>border-*</code> classes to the dropdown.</p>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">4. Additional styling</h6>
								<p>Depending on navbar background color, navigation menu automatically adjust link colors for parent level. By default all dropdowns have white background color, but this color can be changed by adding proper classes to the dropdown menu list. Available options are: border width and border color - <code>.border-*</code> class; background color - <code>.bg-*</code> class; active state background color - <code>.element-*</code> class.</p>
							</div>
						</div>
					</div>
					<!-- /horizontal navigation overview -->


					<!-- Navbar component classes -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Component classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							The table below contains default navbar classes for components available for use in the navbar component. Control navigation and elements placement, color theme of navbar and child elements, dropdown menu appearance and positioning, sizing by adding or removing proper class:
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 20%;">Class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.navbar-nav</code></td>
										<td>Default navbar navigation class, must be used with any navigation type and color. Responsible for basic navigation styling.</td>
									</tr>
									<tr>
										<td><code>.navbar-left</code>, <code>.navbar-right</code></td>
										<td>Positioning classes. Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction</td>
									</tr>
									<tr>
										<td><code>.navbar-form</code></td>
										<td>Place form content within <code>.navbar-form</code> for proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options to decide where it resides within the navbar content.</td>
									</tr>
									<tr>
										<td><code>.navbar-btn</code></td>
										<td>Add the <code>.navbar-btn</code> class to <code>&lt;button></code> elements not residing in a <code>&lt;form></code> to vertically center them in the navbar. Supports default, small and mini button sizes.</td>
									</tr>
									<tr>
										<td><code>.navbar-text</code></td>
										<td>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p></code> tag for proper leading and color.</td>
									</tr>
									<tr>
										<td><code>.navbar-link</code></td>
										<td>For standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</td>
									</tr>
									<tr>
										<td><code>data-hover="dropdown"</code></td>
										<td>This data attribute shows submenu on hover instead of click. Needs to be added to the parent navigation link after <code>data-toggle="dropdown"</code>. Requires <code>hover_dropdown.min.js</code> file to be added.</td>
									</tr>
									<tr>
										<td><code>.navbar.bg-*</code>, <code>.navbar-header.bg-*</code></td>
										<td>Apply custom background color to the whote navbar or navbar header only. All navbar components automatically adjust their styling according to the navbar color.</td>
									</tr>
									<tr>
										<td><code>.disabled</code></td>
										<td>Disable any navbar navigation item by adding <code>.disabled</code> class to the <code>&lt;li></code> element. To disable item in hover navigation version, <code>data-hover="dropdown"</code> needs to be removed as well.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /navbar component classes -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
