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
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/nicescroll.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/drilldown.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/navigation_horizontal_mega.js')}}"></script>
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
						<i class="icon-menu7 position-left"></i> Menu <span class="caret"></span>
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
										<li><a href="navigation_horizontal_elements">With custom elements</a></li>
										<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
										<li class="active"><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
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
				
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<i class="icon-make-group position-left"></i> Custom <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-content width-300">
						<div class="dropdown-content-heading">
							Custom components
							<ul class="icons-list">
								<li><a href="#"><i class="icon-gear"></i></a></li>
							</ul>
						</div>

						<ul class="nav nav-lg nav-tabs nav-justified no-margin">
							<li class="active">
								<a href="#demo-tab1" data-toggle="tab"><i class="icon-mention position-left"></i> Form</a>
							</li>

							<li>
								<a href="#demo-tab2" data-toggle="tab">
									<i class="icon-list-unordered position-left"></i> Options <span class="badge badge-warning position-right">99+</span>
								</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane no-padding active" id="demo-tab1">
								<form class="dropdown-content-body" action="#">
									<div class="form-group has-feedback">
										<input type="text" class="form-control" placeholder="Your email">
										<div class="form-control-feedback">
											<i class="icon-mention text-muted"></i>
										</div>
									</div>

									<div class="form-group">
										<select name="select" data-placeholder="Subscription plan" class="select">
											<option></option>
											<option value="updates">Website updates</option>
											<option value="discounts">Discount offers</option>
											<option value="catalog">Catalog</option>
											<option value="prints">Prints</option>
											<option value="promo">Promotions</option>
										</select>
									</div>

									<div class="form-group">
										<textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled" checked="checked">
													Remember me
												</label>
											</div>
										</div>

										<div class="col-xs-6 text-right">
											<button type="submit" class="btn bg-info"><i class="icon-paperplane position-left"></i> Submit</button>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane has-padding" id="demo-tab2">
								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery" checked="checked">
										Allow direct changes
									</label>	
								</div>

								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery">
										Allow new registrations
									</label>
								</div>

								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery" checked="checked">
										Navbar is visible to users
									</label>
								</div>

								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery" checked="checked">
										Enable sessions
									</label>
								</div>

								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery">
										Save without reload
									</label>
								</div>

								<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
									<label class="display-block">
										<input type="checkbox" class="switchery" checked="checked">
										Allow layout changes
									</label>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="visible-xs-inline-block position-right">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Users online
							<ul class="icons-list">
								<li><a href="#"><i class="icon-gear"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-300">
							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
									<span class="display-block text-muted text-size-small">Lead web developer</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Will Brason</a>
									<span class="display-block text-muted text-size-small">Marketing manager</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Hanna Walden</a>
									<span class="display-block text-muted text-size-small">Project manager</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
									<span class="display-block text-muted text-size-small">Business developer</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
									<span class="display-block text-muted text-size-small">UX expert</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Horizontal Nav</span> - Mega Menu</h4>
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
							<li><a href="navigation_horizontal_mega">Horizontal nav</a></li>
							<li class="active">Mega menu</li>
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

					<!-- Mega menu component -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Mega menu options</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<h6 class="text-semibold">Mega menu components</h6>
							<p class="content-group">Mega menu is a group of custom navbar components that uses slightly modified BS dropdown markup and native styling. Basically dropdown menu may contain any component - text blocks, lists, galleries, tabs, forms, tables, accordion, panels, buttons etc. However since default dropdown menu closes itself on first click, some extra js code is needed to stop propagation. In this case dropdown toggle inside dropdown menu doesn't work by default and needs additional modifications. See the table with necessary classes and description below.</p>

							<p class="text-semibold">Basic components</p>
							<div class="navbar navbar-inverse bg-teal-400 navbar-component" style="position: relative; z-index: 30;">
								<div class="navbar-header visible-xs-block">
									<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

									<ul class="nav navbar-nav pull-right">
										<li><a data-toggle="collapse" data-target="#demo1"><i class="icon-tree5"></i></a></li>
									</ul>
								</div>

								<div class="navbar-collapse collapse" id="demo1">
									<ul class="nav navbar-nav">
										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">List <span class="caret"></span></a>

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
																<li><a href="form_dual_listboxes">Dual Listboxes</a></li>
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
																<li><a href="navigation_horizontal_elements">With custom elements</a></li>
																<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
																<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																<li class="active"><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
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

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Multilevel list <span class="caret"></span></a>

											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="row">
														<div class="col-md-3">
															<span class="menu-heading underlined">Main content</span>
															<ul class="menu-list">
																<li>
																	<a href="#"><i class="icon-stack2"></i> Page layouts</a>
																	<ul>
																		<li><a href="layout_navbar_fixed">Fixed navbar</a></li>
																		<li><a href="layout_navbar_hideable">Hideable navbar</a></li>
																		<li><a href="layout_sidebar_sticky_custom">Sticky sidebar (custom scroll)</a></li>
																		<li><a href="layout_sidebar_sticky_native">Sticky sidebar (native scroll)</a></li>
																		<li><a href="layout_footer_fixed">Fixed footer</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>
																	<ul>
																		<li><a href="boxed_full">Boxed full width</a></li>
																		<li><a href="boxed_default">Boxed with default sidebar</a></li>
																		<li><a href="boxed_mini">Boxed with mini sidebar</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-copy"></i> Layouts</a>
																	<ul>
																		<li><a href="../../layout_1/LTR/index" id="layout1">Layout 1</a></li>
																		<li><a href="../../layout_2/LTR/index" id="layout2">Layout 2</a></li>
																		<li><a href="../../layout_3/LTR/index" id="layout3">Layout 3</a></li>
																		<li><a href="index" id="layout4">Layout 4 <span class="label bg-warning-400">Current</span></a></li>
																		<li class="disabled"><a href="../../layout_5/LTR/index" id="layout5">Layout 5 <span class="label bg-slate-300">Coming soon</span></a></li>
																	</ul>
																</li>
															</ul>
														</div>
														<div class="col-md-3">
															<span class="menu-heading underlined">Layout</span>
															<ul class="menu-list">
																<li>
																	<a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>
																	<ul>
																		<li><a href="sidebar_default_collapse">Default collapsible</a></li>
																		<li><a href="sidebar_default_hide">Default hideable</a></li>
																		<li><a href="sidebar_mini_collapse">Mini collapsible</a></li>
																		<li><a href="sidebar_mini_hide">Mini hideable</a></li>
																		<li>
																			<a href="#">Dual sidebar</a>
																			<ul>
																				<li><a href="sidebar_dual">Dual sidebar</a></li>
																				<li><a href="sidebar_dual_double_collapse">Dual double collapse</a></li>
																				<li><a href="sidebar_dual_double_hide">Dual double hide</a></li>
																				<li><a href="sidebar_dual_swap">Swap sidebars</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#">Double sidebar</a>
																			<ul>
																				<li><a href="sidebar_double_collapse">Collapse main sidebar</a></li>
																				<li><a href="sidebar_double_hide">Hide main sidebar</a></li>
																				<li><a href="sidebar_double_fix_default">Fix default width</a></li>
																				<li><a href="sidebar_double_fix_mini">Fix mini width</a></li>
																				<li><a href="sidebar_double_visible">Opposite sidebar visible</a></li>
																			</ul>
																		</li>
																		<li><a href="sidebar_categories">Separate categories</a></li>
																		<li><a href="sidebar_hidden">Hidden sidebar</a></li>
																		<li><a href="sidebar_dark">Dark sidebar</a></li>
																		<li><a href="sidebar_components">Sidebar components</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-sort"></i> Vertical navigation</a>
																	<ul>
																		<li><a href="navigation_vertical_collapsible">Collapsible menu</a></li>
																		<li><a href="navigation_vertical_accordion">Accordion menu</a></li>
																		<li><a href="navigation_vertical_sizing">Navigation sizing</a></li>
																		<li><a href="navigation_vertical_bordered">Bordered navigation</a></li>
																		<li><a href="navigation_vertical_right_icons">Right icons</a></li>
																		<li><a href="navigation_vertical_disabled">Disabled navigation links</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-transmission"></i> Horizontal navigation</a>
																	<ul>
																		<li><a href="navigation_horizontal_click">Submenu on click</a></li>
																		<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
																		<li><a href="navigation_horizontal_elements">With custom elements</a></li>
																		<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
																		<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																		<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
																	</ul>
																</li>
															</ul>
														</div>
														<div class="col-md-3">
															<span class="menu-heading underlined">Data visualization</span>
															<ul class="menu-list">
																<li>
																	<a href="#"><i class="icon-graph"></i> Echarts library</a>
																	<ul>
																		<li><a href="echarts_lines_areas">Lines and areas</a></li>
																		<li><a href="echarts_columns_waterfalls">Columns and waterfalls</a></li>
																		<li><a href="echarts_bars_tornados">Bars and tornados</a></li>
																		<li><a href="echarts_scatter">Scatter charts</a></li>
																		<li><a href="echarts_pies_donuts">Pies and donuts</a></li>
																		<li><a href="echarts_funnels_chords">Funnels and chords</a></li>
																		<li><a href="echarts_candlesticks_others">Candlesticks and others</a></li>
																		<li><a href="echarts_combinations">Chart combinations</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-statistics"></i> D3 library</a>
																	<ul>
																		<li><a href="d3_lines_basic">Simple lines</a></li>
																		<li><a href="d3_lines_advanced">Advanced lines</a></li>
																		<li><a href="d3_bars_basic">Simple bars</a></li>
																		<li><a href="d3_bars_advanced">Advanced bars</a></li>
																		<li><a href="d3_pies">Pie charts</a></li>
																		<li><a href="d3_circle_diagrams">Circle diagrams</a></li>
																		<li><a href="d3_tree">Tree layout</a></li>
																		<li><a href="d3_other">Other charts</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-stats-dots"></i> Dimple library</a>
																	<ul>
																		<li>
																			<a href="#">Line charts</a>
																			<ul>
																				<li><a href="dimple_lines_horizontal">Horizontal orientation</a></li>
																				<li><a href="dimple_lines_vertical">Vertical orientation</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#">Bar charts</a>
																			<ul>
																				<li><a href="dimple_bars_horizontal">Horizontal orientation</a></li>
																				<li><a href="dimple_bars_vertical">Vertical orientation</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#">Area charts</a>
																			<ul>
																				<li><a href="dimple_area_horizontal">Horizontal orientation</a></li>
																				<li><a href="dimple_area_vertical">Vertical orientation</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#">Step charts</a>
																			<ul>
																				<li><a href="dimple_step_horizontal">Horizontal orientation</a></li>
																				<li><a href="dimple_step_vertical">Vertical orientation</a></li>
																			</ul>
																		</li>
																		<li><a href="dimple_pies">Pie charts</a></li>
																		<li><a href="dimple_rings">Ring charts</a></li>
																		<li><a href="dimple_scatter">Scatter charts</a></li>
																		<li><a href="dimple_bubble">Bubble charts</a></li>
																	</ul>
																</li>
															</ul>
														</div>
														<div class="col-md-3">
															<span class="menu-heading underlined">Extras</span>
															<ul class="menu-list">
																<li><a href="animations_css3"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>
																<li>
																	<a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>
																	<ul>
																		<li><a href="animations_velocity_basic">Basic usage</a></li>
																		<li><a href="animations_velocity_ui">UI pack effects</a></li>
																		<li><a href="animations_velocity_examples">Advanced examples</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"><i class="icon-map5"></i> Maps integration</a>
																	<ul>
																		<li>
																			<a href="#">Google maps</a>
																			<ul>
																				<li><a href="maps_google_basic">Basics</a></li>
																				<li><a href="maps_google_controls">Controls</a></li>
																				<li><a href="maps_google_markers">Markers</a></li>
																				<li><a href="maps_google_drawings">Map drawings</a></li>
																				<li><a href="maps_google_layers">Layers</a></li>
																			</ul>
																		</li>
																		<li><a href="maps_vector">Vector maps</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Forms <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content width-300">
												<div class="dropdown-content-heading">
													Form example
													<ul class="icons-list">
														<li><a href="#"><i class="icon-menu6"></i></a></li>
													</ul>
												</div>

												<form class="dropdown-content-body" action="#">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Your email">
														<div class="form-control-feedback">
															<i class="icon-mention text-muted"></i>
														</div>
													</div>

													<div class="form-group">
														<select data-placeholder="Subscription plan" class="select">
															<option></option>
															<option value="updates">Website updates</option>
															<option value="discounts">Discount offers</option>
															<option value="catalog">Catalog</option>
															<option value="prints">Prints</option>
															<option value="promo">Promotions</option>
														</select>
													</div>

													<div class="form-group">
														<textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
													</div>

													<div class="row">
														<div class="col-xs-6">
															<div class="checkbox">
																<label>
																	<input type="checkbox" class="styled" checked="checked">
																	Remember me
																</label>
															</div>
														</div>

														<div class="col-xs-6 text-right">
															<button type="submit" class="btn btn-info">Submit form <b class="icon-arrow-right14"></b></button>
														</div>
													</div>
												</form>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Table <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-heading">
													Table example
													<ul class="icons-list">
														<li><a href="#"><i class="icon-menu6"></i></a></li>
													</ul>
												</div>

												<div class="table-responsive width-600">
													<table class="table table-xs">
														<thead>
															<tr>
																<th>Description</th>
																<th>Category</th>
																<th>Assigned to</th>
																<th class="text-center">Progress</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><a href="#">Frontpage fixes</a></td>
																<td>Bugs</td>
																<td><a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a></td>
																<td class="text-center"><span class="badge badge-success">87%</span></td>
															</tr>
															<tr>
																<td><a href="#">CSS compilation</a></td>
																<td>Bugs</td>
																<td>
																	<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
																	<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
																</td>
																<td class="text-center"><span class="badge badge-danger">18%</span></td>
															</tr>
															<tr>
																<td><a href="#">Responsive layout changes</a></td>
																<td>Layout</td>
																<td><a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a></td>
																<td class="text-center"><span class="badge badge-default">52%</span></td>
															</tr>
															<tr>
																<td><a href="#">Add categories filter</a></td>
																<td>Content</td>
																<td>
																	<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
																	<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
																	<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
																</td>
																<td class="text-center"><span class="badge badge-success">100%</span></td>
															</tr>
															<tr>
																<td><a href="#">Media grid padding issue</a></td>
																<td>Bugs</td>
																<td><a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a></td>
																<td class="text-center"><span class="badge badge-success">100%</span></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</li>

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Images <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<span class="menu-heading">Thumbnails</span>
													<div class="row">
														<div class="col-md-3 col-sm-6">
															<div class="thumbnail">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus2"></i></span>
																	</a>
																</div>
															</div>
														</div>

														<div class="col-md-3 col-sm-6">
															<div class="thumbnail">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus2"></i></span>
																	</a>
																</div>
															</div>
														</div>

														<div class="col-md-3 col-sm-6">
															<div class="thumbnail">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus2"></i></span>
																	</a>
																</div>
															</div>
														</div>

														<div class="col-md-3 col-sm-6">
															<div class="thumbnail">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus2"></i></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Accordion <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="row">
														<div class="col-md-6">
															<span class="menu-heading">Accordion group</span>
															<div class="panel-group content-group" id="menu-accordion">
																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion1">Accordion Group Item #1</a></div>
																	</div>

																	<div id="accordion1" class="panel-collapse collapse in">
																		<div class="panel-body">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion2">Accordion Group Item #2</a></div>
																	</div>

																	<div id="accordion2" class="panel-collapse collapse">
																		<div class="panel-body">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt. </div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion3">Accordion Group Item #3</a></div>
																	</div>

																	<div id="accordion3" class="panel-collapse collapse">
																		<div class="panel-body">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum congue eget id augue. </div>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<span class="menu-heading">Collapsible group</span>
															<div class="panel-group content-group">
																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" href="#collapse1">Collapsible Group Item #1</a></div>
																	</div>

																	<div id="collapse1" class="panel-collapse collapse in">
																		<div class="panel-body">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" href="#collapse2">Collapsible Group Item #2</a></div>
																	</div>

																	<div id="collapse2" class="panel-collapse collapse">
																		<div class="panel-body">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt, massa nisi luctus tellus, vel laoreet sem lectus ut nibh. </div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<div class="panel-title text-semibold"><a data-toggle="collapse" href="#collapse3">Collapsible Group Item #3</a></div>
																	</div>

																	<div id="collapse3" class="panel-collapse collapse">
																		<div class="panel-body">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum non nibh mattis congue eget id augue. </div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Full width <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="row">
														<div class="col-md-8">
															<div class="row">
																<div class="col-md-3">
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
																<div class="col-md-3">
																	<span class="menu-heading underlined">Navigation</span>
																	<ul class="menu-list">
																		<li><a href="navigation_horizontal_click">Submenu on click</a></li>
																		<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
																		<li><a href="navigation_horizontal_elements">With custom elements</a></li>
																		<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
																		<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																		<li class="active"><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
																	</ul>
																</div>
																<div class="col-md-3">
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
																<div class="col-md-3">
																	<span class="menu-heading underlined">Extensions</span>
																	<ul class="menu-list">
																		<li><a href="extension_dnd">Drag &amp; drop <span class="label label-primary">HOT</span></a></li>
																		<li><a href="extension_blockui">Block UI</a></li>
																		<li><a href="uploader_plupload">File uploaders</a></li>
																		<li><a href="extension_image_cropper">Image cropper</a></li>
																		<li><a href="internationalization_switch_direct">Translation <span class="label label-success">New</span></a></li>
																		<li><a href="extra_fullcalendar_views">Calendars</a></li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col-md-4">
															<span class="menu-heading">Video example</span>
															<iframe src="//player.vimeo.com/video/105492659?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" height="230" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Classic <span class="caret"></span></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">Second level</a></li>
												<li class="dropdown-submenu dropdown-submenu-left">
													<a href="#">Second level with child</a>
													<ul class="dropdown-menu">
														<li><a href="#">Third level</a></li>
														<li class="dropdown-submenu dropdown-submenu-left">
															<a href="#">Third level with child</a>
															<ul class="dropdown-menu">
																<li><a href="#">Fourth level</a></li>
																<li><a href="#">Fourth level</a></li>
																<li><a href="#">Fourth level</a></li>
															</ul>
														</li>
														<li><a href="#">Third level</a></li>
													</ul>
												</li>
												<li><a href="#">Second level</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<p class="text-semibold">More complex components</p>
							<div class="navbar navbar-inverse bg-teal-400 navbar-component" style="position: relative; z-index: 29;">
								<div class="navbar-header visible-xs-block">
									<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

									<ul class="nav navbar-nav pull-right">
										<li><a data-toggle="collapse" data-target="#demo_complex"><i class="icon-tree5"></i></a></li>
									</ul>
								</div>

								<div class="navbar-collapse collapse" id="demo_complex">
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">
												Tabs <span class="caret"></span>
											</a>

											<div class="dropdown-menu dropdown-content width-350">
												<div class="dropdown-content-heading">
													Tabs component
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<ul class="nav nav-lg nav-tabs nav-justified no-margin">
													<li class="active">
														<a href="#complex-tab1" data-toggle="tab"><i class="icon-mention position-left"></i> Subscribe</a>
													</li>

													<li>
														<a href="#complex-tab2" data-toggle="tab">
															<i class="icon-list-unordered position-left"></i> Updates <span class="badge badge-warning position-right">4</span>
														</a>
													</li>
												</ul>

												<div class="tab-content">
													<div class="tab-pane no-padding active" id="complex-tab1">
														<form class="dropdown-content-body" action="#">
															<div class="form-group has-feedback">
																<input type="text" class="form-control" placeholder="Your email">
																<div class="form-control-feedback">
																	<i class="icon-mention text-muted"></i>
																</div>
															</div>

															<div class="form-group">
																<select name="select" data-placeholder="Subscription plan" class="select">
																	<option></option>
																	<option value="updates">Website updates</option>
																	<option value="discounts">Discount offers</option>
																	<option value="catalog">Catalog</option>
																	<option value="prints">Prints</option>
																	<option value="promo">Promotions</option>
																</select>
															</div>

															<div class="form-group">
																<textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
															</div>

															<div class="row">
																<div class="col-xs-6">
																	<div class="checkbox">
																		<label>
																			<input type="checkbox" class="styled" checked="checked">
																			Remember me
																		</label>
																	</div>
																</div>

																<div class="col-xs-6 text-right">
																	<button type="submit" class="btn btn-info"><i class="icon-paperplane position-left"></i> Submit</button>
																</div>
															</div>
														</form>
													</div>

													<div class="tab-pane" id="complex-tab2">
														<ul class="media-list dropdown-content-body">
															<li class="media">
																<div class="media-left">
																	<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
																</div>

																<div class="media-body">
																	Drop the IE <a href="#">specific hacks</a> for temporal inputs
																	<div class="media-annotation">4 minutes ago</div>
																</div>
															</li>

															<li class="media">
																<div class="media-left">
																	<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
																</div>
																
																<div class="media-body">
																	Add full font overrides for popovers and tooltips
																	<div class="media-annotation">36 minutes ago</div>
																</div>
															</li>

															<li class="media">
																<div class="media-left">
																	<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
																</div>
																
																<div class="media-body">
																	<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
																	<div class="media-annotation">2 hours ago</div>
																</div>
															</li>

															<li class="media">
																<div class="media-left">
																	<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
																</div>
																
																<div class="media-body">
																	<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
																	<div class="media-annotation">Dec 18, 18:36</div>
																</div>
															</li>

															<li class="media">
																<div class="media-left">
																	<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
																</div>
																
																<div class="media-body">
																	Have Carousel ignore keyboard events
																	<div class="media-annotation">Dec 12, 05:46</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Media list <span class="caret"></span>
											</a>
											
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-heading">
													Media list
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<ul class="media-list dropdown-content-body width-300">
													<li class="media">
														<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
														<div class="media-body">
															<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
															<span class="display-block text-muted text-size-small">Lead web developer</span>
														</div>
														<div class="media-right media-middle"><span class="status-mark bg-success"></span></div>
													</li>

													<li class="media">
														<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
														<div class="media-body">
															<a href="#" class="media-heading text-semibold">Will Brason</a>
															<span class="display-block text-muted text-size-small">Marketing manager</span>
														</div>
														<div class="media-right media-middle"><span class="status-mark bg-danger"></span></div>
													</li>

													<li class="media">
														<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
														<div class="media-body">
															<a href="#" class="media-heading text-semibold">Hanna Walden</a>
															<span class="display-block text-muted text-size-small">Project manager</span>
														</div>
														<div class="media-right media-middle"><span class="status-mark bg-success"></span></div>
													</li>

													<li class="media">
														<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
														<div class="media-body">
															<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
															<span class="display-block text-muted text-size-small">Business developer</span>
														</div>
														<div class="media-right media-middle"><span class="status-mark bg-warning-300"></span></div>
													</li>

													<li class="media">
														<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
														<div class="media-body">
															<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
															<span class="display-block text-muted text-size-small">UX expert</span>
														</div>
														<div class="media-right media-middle"><span class="status-mark bg-grey-300"></span></div>
													</li>
												</ul>

												<div class="dropdown-content-footer">
													<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Linked media list <span class="caret"></span>
											</a>
											
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-heading">
													Linked media list
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<ul class="media-list media-list-linked media-list-bordered width-400">
													<li class="media">
														<a href="#" class="media-link">
															<div class="media-left">
																<img src="assets/images/placeholder.jpg" class="media-object img-circle img-sm" alt="">
															</div>

															<div class="media-body">
																<span class="media-heading text-semibold">Rolled out online <span class="media-annotation dotted">2 hours ago</span></span>
																Returned toucan yikes slavishly plankton emu immaculately some a labrador
															</div>
														</a>
													</li>

													<li class="media">
														<a href="#" class="media-link">
															<div class="media-left">
																<img src="assets/images/placeholder.jpg" class="media-object img-circle img-sm" alt="">
															</div>

															<div class="media-body">
																<span class="media-heading text-semibold">Elephant gosh <span class="media-annotation dotted">5 hours ago</span></span>
																Slung far vulture this this considerable much crud indecisive hey hello
															</div>
														</a>
													</li>

													<li class="media">
														<a href="#" class="media-link">
															<div class="media-left">
																<img src="assets/images/placeholder.jpg" class="media-object img-circle img-sm" alt="">
															</div>

															<div class="media-body">
																<span class="media-heading text-semibold">Before regardless <span class="media-annotation dotted">20 hours ago</span></span>
																Conservatively disconsolate goodness more lazy less exclusively more unlike
															</div>
														</a>
													</li>
												</ul>

												<div class="dropdown-content-footer">
													<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Progress bars <span class="caret"></span>
											</a>
											
											<div class="dropdown-menu dropdown-content width-300">
												<div class="dropdown-content-heading">
													Progress list
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<div class="dropdown-content-body">
													<ul class="progress-list">
											            <li>
											                <label>CPU usage <span>50%</span></label>
															<div class="progress progress-xxs">
																<div class="progress-bar progress-bar-info" style="width: 50%">
																	<span class="sr-only">50% Complete</span>
																</div>
															</div>
											            </li>
											            <li>
											                <label>RAM usage <span>70%</span></label>
															<div class="progress progress-xxs">
																<div class="progress-bar progress-bar-danger" style="width: 70%">
																	<span class="sr-only">70% Complete</span>
																</div>
															</div>
											            </li>
											            <li>
											                <label>Disc space <span>80%</span></label>
															<div class="progress progress-xxs">
																<div class="progress-bar progress-bar-success" style="width: 80%">
																	<span class="sr-only">80% Complete</span>
																</div>
															</div>
											            </li>
											            <li>
											                <label>Bandwidth <span>60%</span></label>
															<div class="progress progress-xxs">
																<div class="progress-bar progress-bar-primary" style="width: 60%">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
											            </li>
											        </ul>
										        </div>

												<div class="dropdown-content-footer">
													<a href="#" data-popup="tooltip" title="All statistics"><i class="icon-menu display-block"></i></a>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">
												Switches <span class="caret"></span>
											</a>

											<div class="dropdown-menu dropdown-content width-300">
												<div class="dropdown-content-heading">
													Switches
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<div class="dropdown-content-body">
													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery" checked="checked">
															Allow direct changes
														</label>	
													</div>

													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery">
															Allow new registrations
														</label>
													</div>

													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery" checked="checked">
															Navbar is visible to users
														</label>
													</div>

													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery" checked="checked">
															Enable sessions
														</label>
													</div>

													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery">
															Save without reload
														</label>
													</div>

													<div class="checkbox checkbox-switchery checkbox-right switchery-sm">
														<label class="display-block">
															<input type="checkbox" class="switchery" checked="checked">
															Allow layout changes
														</label>
													</div>
												</div>

											</div>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
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
									</ul>
								</div>
							</div>

							<p class="text-semibold">Example markup:</p>
							<pre class="language-markup content-group-lg"><code>&lt;!-- Navigation with mega menu -->
&lt;ul class="nav navbar-nav">

	&lt;!-- Auto width -->
	&lt;li class="mega-menu">
		&lt;a href="#" data-toggle="dropdown" class="dropdown-toggle">Auto width &lt;span class="caret">&lt;/span>&lt;/a>
		&lt;div class="dropdown-menu dropdown-content">
			&lt;div class="dropdown-content-body">...&lt;/div>
		&lt;/div>
	&lt;/li>
	&lt;!-- /auto width -->

	&lt;!-- Fixed width -->
	&lt;li class="dropdown">
		&lt;a href="#" data-toggle="dropdown" class="dropdown-toggle">Auto width &lt;span class="caret">&lt;/span>&lt;/a>
		&lt;div class="dropdown-menu dropdown-content width-300">
			&lt;div class="dropdown-content-body">...&lt;/div>
		&lt;/div>
	&lt;/li>
	&lt;!-- /fixed width -->

	&lt;!-- Full width -->
	&lt;li class="mega-menu mega-menu-wide">
		&lt;a href="#" data-toggle="dropdown" class="dropdown-toggle">Full width &lt;span class="caret">&lt;/span>&lt;/a>
		&lt;div class="dropdown-menu dropdown-content">
			&lt;div class="dropdown-content-body">...&lt;/div>
		&lt;/div>
	&lt;/li>
	&lt;!-- /full width -->

&lt;/ul>
&lt;!-- /navigation with mega menu -->
</code></pre>


							<h6 class="text-semibold">Menu and content options</h6>
							<p class="content-group">All mega dropdowns support additional options for menu itself and content inside - menu header, menu footer, block titles, custom colors for menu's list background and menu borders, or its components. Different types of lists support all components and options available for basic dropdown menu component, such as labels, badges, switches, icons, headers etc. Custom background colors available only for simple dropdown menu.</p>

							<p class="text-semibold">Example menu</p>
							<div class="navbar navbar-inverse bg-indigo-400 navbar-component" style="position: relative; z-index: 28;">
								<div class="navbar-header visible-xs-block">
									<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

									<ul class="nav navbar-nav pull-right">
										<li><a data-toggle="collapse" data-target="#demo2"><i class="icon-tree5"></i></a></li>
									</ul>
								</div>

								<div class="navbar-collapse collapse" id="demo2">
									<ul class="nav navbar-nav">
										<li class="dropdown mega-menu">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Block titles <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="row">
														<div class="col-md-6">
															<span class="menu-heading underlined">Underlined title</span>
															<ul class="menu-list">
																<li><a href="navigation_horizontal_click">Submenu on click</a></li>
																<li><a href="navigation_horizontal_hover">Submenu on hover <span class="label label-info">New</span></a></li>
																<li><a href="navigation_horizontal_elements">With custom elements</a></li>
																<li><a href="navigation_horizontal_tabs">Tabbed navigation <span class="badge badge-danger">28</span></a></li>
																<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																<li class="active"><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
															</ul>
														</div>

														<div class="col-md-6">
															<span class="menu-heading">Default title</span>
															<div class="thumbnail frameless">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus3"></i></span>
																	</a>
																</div>
															</div>
														</div>																
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Menu heading <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content width-500">
												<div class="dropdown-content-heading">
													<i class="icon-printer4 position-left"></i>
													Mega menu header
													<ul class="icons-list">
														<li><a href="#"><i class="icon-cog3"></i></a></li>
													</ul>
												</div>

												<div class="dropdown-content-body">
													<span class="menu-heading">Thumbnails</span>
													<div class="row">
														<div class="col-sm-6">
															<div class="thumbnail frameless">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus3"></i></span>
																	</a>
																</div>
															</div>
														</div>

														<div class="col-sm-6">
															<div class="thumbnail frameless">
																<div class="thumb">
																	<a href="#">
																		<img src="assets/images/placeholder.jpg" alt="">
																		<span class="zoom-image"><i class="icon-plus3"></i></span>
																	</a>
																</div>
															</div>
														</div>
													</div>

													<span class="menu-heading underlined">Text block</span>
													<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village.</p>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Menu footer <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content width-350">
												<div class="dropdown-content-heading">
													Mega menu title
													<ul class="icons-list">
														<li><a href="#"><i class="icon-gear"></i></a></li>
													</ul>
												</div>

												<ul class="media-list dropdown-content-body">
													<li class="media">
														<div class="media-left">
															<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
														</div>

														<div class="media-body">
															Drop the IE <a href="#">specific hacks</a> for temporal inputs
															<div class="media-annotation">4 minutes ago</div>
														</div>
													</li>

													<li class="media">
														<div class="media-left">
															<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
														</div>
														
														<div class="media-body">
															Add full font overrides for popovers and tooltips
															<div class="media-annotation">36 minutes ago</div>
														</div>
													</li>

													<li class="media">
														<div class="media-left">
															<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
														</div>
														
														<div class="media-body">
															<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
															<div class="media-annotation">2 hours ago</div>
														</div>
													</li>

													<li class="media">
														<div class="media-left">
															<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
														</div>
														
														<div class="media-body">
															<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
															<div class="media-annotation">Dec 18, 18:36</div>
														</div>
													</li>

													<li class="media">
														<div class="media-left">
															<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
														</div>
														
														<div class="media-body">
															Have Carousel ignore keyboard events
															<div class="media-annotation">Dec 12, 05:46</div>
														</div>
													</li>
												</ul>

												<div class="dropdown-content-footer">
													<a href="#">All messages <i class="icon-circle-right2 position-right"></i></a>
												</div>
											</div>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Combined headers <span class="caret"></span></a>
											<ul class="dropdown-menu dropdown-content width-250">
												<li class="dropdown-content-heading">
													Context menu
													<ul class="icons-list">
														<li><a href="#"><i class="icon-cog3"></i></a></li>
													</ul>
												</li>

												<li class="dropdown-header">Find</li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-command"></i>F</span> Find</a></li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-command"></i>G</span> Find Next</a></li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-shift"></i><i class="icon-command"></i>G</span> Find Previous</a></li>

												<li class="dropdown-header">Edit</li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-command"></i>C</span> Copy</a></li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-command"></i>X</span> Cut</a></li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-shift"></i><i class="icon-command"></i>V</span> Paste and indent</a></li>
												<li><a href="#"><span class="pull-right text-size-large"><i class="icon-opt"></i><i class="icon-command"></i>V</span> Paste from history</a></li>
											</ul>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown dropdown-user">
											<a class="dropdown-toggle" data-toggle="dropdown">
												<img src="assets/images/placeholder.jpg" alt="">
												<span>Victoria</span>
												<i class="caret"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
												<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
												<li><a href="#"><i class="icon-comment-discussion"></i> Messages <span class="badge bg-primary pull-right">58</span></a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
												<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<p class="text-semibold">Example heading markup:</p>
									<pre class="language-markup content-group" data-line="4-10"><code>&lt;!-- Dropdown menu with heading -->
&lt;div class="dropdown-menu dropdown-content">

	&lt;!-- Dropdown heading -->
	&lt;div class="dropdown-content-heading">
		&lt;ul class="icons-list">
			&lt;li>&lt;a href="#">&lt;i class="icon-menu7">&lt;/i>&lt;/a>&lt;/li>
		&lt;/ul>
	&lt;/div>
	&lt;!-- /dropdown heading -->

	&lt;!-- Dropdown content -->
	&lt;div class="dropdown-content-body">...&lt;/div>
	&lt;!-- /dropdown content -->

&lt;/div>
&lt;!-- /dropdown menu with heading -->
</code></pre>
								</div>

								<div class="col-md-6">
									<p class="text-semibold">Example footer markup:</p>
									<pre class="language-markup content-group" data-line="8-14"><code>&lt;!-- Dropdown menu with footer -->
&lt;div class="dropdown-menu dropdown-content">

	&lt;!-- Dropdown content -->
	&lt;div class="dropdown-content-body">...&lt;/div>
	&lt;!-- /dropdown content -->

	&lt;!-- Dropdown footer -->
	&lt;div class="dropdown-content-footer">
		&lt;a href="#">
			See all messages &lt;i class="icon-circle-right2">&lt;/i>
		&lt;/a>
	&lt;/div>
	&lt;!-- /dropdown footer -->

&lt;/div>
&lt;!-- /dropdown menu with footer -->
</code></pre>
								</div>
							</div>


							<h6 class="text-semibold">Mega menu grid</h6>
							<p class="content-group">Mega menu component supports a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code> inside mega menu dropdown.</p>

							<p class="text-semibold">Example menu</p>
							<div class="navbar navbar-inverse bg-blue-600 navbar-component" style="position: relative; z-index: 27;">
								<div class="navbar-header visible-xs-block">
									<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>
									<ul class="nav navbar-nav pull-right">
										<li><a data-toggle="collapse" data-target="#demo3"><i class="icon-tree5"></i></a></li>
									</ul>
								</div>

								<div class="navbar-collapse collapse" id="demo3">
									<ul class="nav navbar-nav">
										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Grid <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="grid-demo">
														<div class="row">
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
															<div class="col-md-1"><div>.col-md-1</div></div>
														</div>

														<div class="row">
															<div class="col-md-8"><div>.col-md-8</div></div>
															<div class="col-md-4"><div>.col-md-4</div></div>
														</div>

														<div class="row">
															<div class="col-md-4"><div>.col-md-4</div></div>
															<div class="col-md-4"><div>.col-md-4</div></div>
															<div class="col-md-4"><div>.col-md-4</div></div>
														</div>

														<div class="row">
															<div class="col-md-6"><div>.col-md-6</div></div>
															<div class="col-md-6"><div>.col-md-6</div></div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Nesting <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="grid-demo">
														<div class="row">
															<div class="col-sm-12">
																<div>Level 1: .col-sm-12</div>

																<div class="row">
																	<div class="col-xs-8 col-sm-6">
																		<div>Level 2: .col-xs-8 .col-sm-6</div>
																	</div>

																	<div class="col-xs-4 col-sm-6">
																		<div>Level 2: .col-xs-4 .col-sm-6</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="dropdown mega-menu mega-menu-wide">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Offset <span class="caret"></span></a>
											<div class="dropdown-menu dropdown-content">
												<div class="dropdown-content-body">
													<div class="grid-demo">
														<div class="row">
															<div class="col-sm-12"><div>.col-sm-12</div></div>
															<div class="col-sm-10 col-sm-offset-1"><div>.col-sm-10.col-sm-offset-1</div></div>
															<div class="col-sm-8 col-sm-offset-2"><div>.col-sm-8.col-sm-offset-2</div></div>
															<div class="col-sm-6 col-sm-offset-3"><div>.col-sm-6.col-sm-offset-3</div></div>
															<div class="col-sm-4 col-sm-offset-4"><div>.col-sm-4.col-sm-offset-4</div></div>
															<div class="col-sm-2 col-sm-offset-5"><div>.col-sm-2.col-sm-offset-5</div></div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Classic <span class="caret"></span></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">Second level</a></li>
												<li class="dropdown-submenu dropdown-submenu-left">
													<a href="#">Second level with child</a>
													<ul class="dropdown-menu">
														<li><a href="#">Third level</a></li>
														<li class="dropdown-submenu dropdown-submenu-left">
															<a href="#">Third level with child</a>
															<ul class="dropdown-menu">
																<li><a href="#">Fourth level</a></li>
																<li><a href="#">Fourth level</a></li>
																<li><a href="#">Fourth level</a></li>
															</ul>
														</li>
														<li><a href="#">Third level</a></li>
													</ul>
												</li>
												<li><a href="#">Second level</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<p class="text-semibold">Example markup:</p>
							<pre class="language-markup content-group"><code>&lt;!-- Dropdown menu grid -->
&lt;div class="dropdown-menu dropdown-content">
	&lt;div class="dropdown-content-body">
		&lt;div class="row">
			&lt;div class="col-md-3 col-sm-6">First column content&lt;/div>
			&lt;div class="col-md-3 col-sm-6">Second column content&lt;/div>
			&lt;div class="col-md-3 col-sm-6">Third column content&lt;/div>
			&lt;div class="col-md-3 col-sm-6">Fourth column content&lt;/div>
		&lt;/div>
	&lt;/div>
&lt;/div>
&lt;!-- /dropdown menu grid --></code></pre>
						</div>
					</div>
					<!-- /mega menu component -->


					<!-- Mega menu classes -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Mega menu classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Mega menu - responsive navbar component driven by CSS and a small piece of jquery code. This table displays custom classes for navbar mega menu needed for proper look and correct functionality.
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.dropdown-content</code></td>
										<td>Prevents dropdown menu from closing on click. Some of the components need additional jquery initialization such as tabs and children dropdowns</td>
									</tr>
									<tr>
										<td><code>li.mega-menu</code></td>
										<td>This class changes dropdown menu position from <code>absolute</code> to <code>static</code> to remove dependency from parent container</td>
									</tr>
									<tr>
										<td><code>li.mega-menu-wide</code></td>
										<td>Adds 100% width to children dropdown menu. Must be used with <code>.mega-menu</code> class</td>
									</tr>
									<tr>
										<td><code>.dropdown-content-body</code></td>
										<td>Similar to <code>.panel-body</code> adds padding to the content. Sometimes some components don't require padding, just remove this div to get a full sized content without spacing</td>
									</tr>
									<tr>
										<td><code>.menu-list</code></td>
										<td>Specific class for menu lists. It adds additional padding to list items and adds background color to hover and focus states</td>
									</tr>
									<tr>
										<td><code>.menu-heading</code></td>
										<td>Headings for menu content. 2 options available: default and underlined. For underlined heading add <code>.underlined</code> class to the same div</td>
									</tr>
									<tr>
										<td><code>.dropdown-content-heading</code></td>
										<td>Dropdown menu heading. Supports custom background color options and list of links. See examples below</td>
									</tr>
									<tr>
										<td><code>.dropdown-content-footer</code></td>
										<td>Dropdown menu footer. Could be both link and group of content similar to dropdown heading. See examples below</td>
									</tr>
									<tr>
										<td><code>.dropdown-content.col-*</code></td>
										<td>Optional column classes for %-based width of the dropdown menu. This type of dropdowns don't have fixed width and change it according to the window size</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /mega menu classes -->


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
