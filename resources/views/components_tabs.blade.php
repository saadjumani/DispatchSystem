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
	<link href="{{url('assets/css/extras/animate.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="visible-xs-inline-block position-right">Git updates</span>
						<span class="badge bg-warning-400">9</span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Git updates
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
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
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<p class="navbar-text">
				<span class="label bg-success">Online</span>
			</p>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
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
							<li><a href="#"><span class="badge bg-blue pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
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

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="index"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
									<ul>
										<li><a href="layout_navbar_fixed">Fixed navbar</a></li>
										<li><a href="layout_navbar_sidebar_fixed">Fixed navbar &amp; sidebar</a></li>
										<li><a href="layout_sidebar_fixed_native">Fixed sidebar native scroll</a></li>
										<li><a href="layout_navbar_hideable">Hideable navbar</a></li>
										<li><a href="layout_navbar_hideable_sidebar">Hideable &amp; fixed sidebar</a></li>
										<li><a href="layout_footer_fixed">Fixed footer</a></li>
										<li class="navigation-divider"></li>
										<li><a href="boxed_default">Boxed with default sidebar</a></li>
										<li><a href="boxed_mini">Boxed with mini sidebar</a></li>
										<li><a href="boxed_full">Boxed full width</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
									<ul>
										<li><a href="../../../layout_1/LTR/index" id="layout1">Layout 1</a></li>
										<li><a href="index" id="layout2">Layout 2 <span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../../layout_3/LTR/index" id="layout3">Layout 3</a></li>
										<li><a href="../../../layout_4/LTR/index" id="layout4">Layout 4</a></li>
										<li><a href="../../../layout_5/LTR/index" id="layout5">Layout 5</a></li>
										<li class="disabled"><a href="../../../layout_6/LTR/index" id="layout6">Layout 6 <span class="label label-transparent">Coming soon</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
									<ul>
										<li><a href="colors_primary">Primary palette</a></li>
										<li><a href="colors_danger">Danger palette</a></li>
										<li><a href="colors_success">Success palette</a></li>
										<li><a href="colors_warning">Warning palette</a></li>
										<li><a href="colors_info">Info palette</a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink">Pink palette</a></li>
										<li><a href="colors_violet">Violet palette</a></li>
										<li><a href="colors_purple">Purple palette</a></li>
										<li><a href="colors_indigo">Indigo palette</a></li>
										<li><a href="colors_blue">Blue palette</a></li>
										<li><a href="colors_teal">Teal palette</a></li>
										<li><a href="colors_green">Green palette</a></li>
										<li><a href="colors_orange">Orange palette</a></li>
										<li><a href="colors_brown">Brown palette</a></li>
										<li><a href="colors_grey">Grey palette</a></li>
										<li><a href="colors_slate">Slate palette</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										<li><a href="starters/horizontal_nav">Horizontal navigation</a></li>
										<li><a href="starters/1_col">1 column</a></li>
										<li><a href="starters/2_col">2 columns</a></li>
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual">Dual sidebars</a></li>
												<li><a href="starters/3_col_double">Double sidebars</a></li>
											</ul>
										</li>
										<li><a href="starters/4_col">4 columns</a></li>
										<li>
											<a href="#">Detached layout</a>
											<ul>
												<li><a href="starters/detached_left">Left sidebar</a></li>
												<li><a href="starters/detached_right">Right sidebar</a></li>
												<li><a href="starters/detached_sticky">Sticky sidebar</a></li>
											</ul>
										</li>
										<li><a href="starters/layout_boxed">Boxed layout</a></li>
										<li class="navigation-divider"></li>
										<li><a href="starters/layout_navbar_fixed_main">Fixed main navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_secondary">Fixed secondary navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_both">Both navbars fixed</a></li>
										<li><a href="starters/layout_fixed">Fixed layout</a></li>
									</ul>
								</li>
								<li><a href="changelog"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.6</span></span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
									<ul>
										<li><a href="form_inputs_basic">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups">Input groups</a></li>
										<li><a href="form_controls_extended">Extended controls</a></li>
										<li><a href="form_floating_labels">Floating labels</a></li>
										<li>
											<a href="#">Selects</a>
											<ul>
												<li><a href="form_select2">Select2 selects</a></li>
												<li><a href="form_multiselect">Bootstrap multiselect</a></li>
												<li><a href="form_select_box_it">SelectBoxIt selects</a></li>
												<li><a href="form_bootstrap_select">Bootstrap selects</a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs">Tag inputs</a></li>
										<li><a href="form_dual_listboxes">Dual Listboxes</a></li>
										<li><a href="form_editable">Editable forms</a></li>
										<li><a href="form_validation">Validation</a></li>
										<li><a href="form_inputs_grid">Inputs grid</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-file-css"></i> <span>JSON forms</span></a>
									<ul>
										<li><a href="alpaca_basic">Basic inputs</a></li>
										<li><a href="alpaca_advanced">Advanced inputs</a></li>
										<li><a href="alpaca_controls">Controls</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-footprint"></i> <span>Wizards</span></a>
									<ul>
										<li><a href="wizard_steps">Steps wizard</a></li>
										<li><a href="wizard_form">Form wizard</a></li>
										<li><a href="wizard_stepy">Stepy wizard</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
									<ul>
										<li><a href="editor_summernote">Summernote editor</a></li>
										<li><a href="editor_ckeditor">CKEditor</a></li>
										<li><a href="editor_wysihtml5">WYSIHTML5 editor</a></li>
										<li><a href="editor_code">Code editor</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-select2"></i> <span>Pickers</span></a>
									<ul>
										<li><a href="picker_date">Date &amp; time pickers</a></li>
										<li><a href="picker_color">Color pickers</a></li>
										<li><a href="picker_location">Location pickers</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
									<ul>
										<li><a href="form_layout_vertical">Vertical form</a></li>
										<li><a href="form_layout_horizontal">Horizontal form</a></li>
									</ul>
								</li>
								<!-- /forms -->

								<!-- Appearance -->
								<li class="navigation-header"><span>Appearance</span> <i class="icon-menu" title="Appearance"></i></li>
								<li>
									<a href="#"><i class="icon-grid"></i> <span>Components</span></a>
									<ul>
										<li><a href="components_modals">Modals</a></li>
										<li><a href="components_dropdowns">Dropdown menus</a></li>
										<li class="active"><a href="components_tabs">Tabs component</a></li>
										<li><a href="components_pills">Pills component</a></li>
										<li><a href="components_navs">Accordion and navs</a></li>
										<li><a href="components_buttons">Buttons</a></li>
										<li><a href="components_notifications_pnotify">PNotify notifications</a></li>
										<li><a href="components_notifications_others">Other notifications</a></li>
										<li><a href="components_popups">Tooltips and popovers</a></li>
										<li><a href="components_alerts">Alerts</a></li>
										<li><a href="components_pagination">Pagination</a></li>
										<li><a href="components_labels">Labels and badges</a></li>
										<li><a href="components_loaders">Loaders and bars</a></li>
										<li><a href="components_thumbnails">Thumbnails</a></li>
										<li><a href="components_page_header">Page header</a></li>
										<li><a href="components_breadcrumbs">Breadcrumbs</a></li>
										<li><a href="components_media">Media objects</a></li>
										<li><a href="components_affix">Affix and Scrollspy</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-puzzle2"></i> <span>Content appearance</span></a>
									<ul>
										<li><a href="appearance_content_panels">Content panels</a></li>
										<li><a href="appearance_panel_heading">Panel heading elements</a></li>
										<li><a href="appearance_panel_footer">Panel footer elements</a></li>
										<li><a href="appearance_draggable_panels">Draggable panels</a></li>
										<li><a href="appearance_text_styling">Text styling</a></li>
										<li><a href="appearance_typography">Typography</a></li>
										<li><a href="appearance_helpers">Helper classes</a></li>
										<li><a href="appearance_syntax_highlighter">Syntax highlighter</a></li>
										<li><a href="appearance_content_grid">Grid system</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
									<ul>
										<li><a href="extra_sliders_noui">NoUI sliders</a></li>
										<li><a href="extra_sliders_ion">Ion range sliders</a></li>
										<li><a href="extra_session_timeout">Session timeout</a></li>
										<li><a href="extra_idle_timeout">Idle timeout</a></li>
										<li><a href="extra_trees">Dynamic tree views</a></li>
										<li><a href="extra_context_menu">Context menu</a></li>
										<li><a href="extra_fab">Floating action buttons</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
									<ul>
										<li><a href="animations_css3">CSS3 animations</a></li>
										<li>
											<a href="#">Velocity animations</a>
											<ul>
												<li><a href="animations_velocity_basic">Basic usage</a></li>
												<li><a href="animations_velocity_ui">UI pack effects</a></li>
												<li><a href="animations_velocity_examples">Advanced examples</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
									<ul>
										<li><a href="icons_glyphicons">Glyphicons</a></li>
										<li><a href="icons_icomoon">Icomoon</a></li>
										<li><a href="icons_fontawesome">Font awesome</a></li>
									</ul>
								</li>
								<!-- /appearance -->

								<!-- Layout -->
								<li class="navigation-header"><span>Layout</span> <i class="icon-menu" title="Layout options"></i></li>
								<li>
									<a href="#"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
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
										<li>
											<a href="#">Detached sidebar</a>
											<ul>
												<li><a href="sidebar_detached_left">Left position</a></li>
												<li><a href="sidebar_detached_right">Right position</a></li>
												<li><a href="sidebar_detached_sticky_custom">Sticky (custom scroll)</a></li>
												<li><a href="sidebar_detached_sticky_native">Sticky (native scroll)</a></li>
												<li><a href="sidebar_detached_separate">Separate categories</a></li>
											</ul>
										</li>
										<li><a href="sidebar_hidden">Hidden sidebar</a></li>
										<li><a href="sidebar_light">Light sidebar</a></li>
										<li><a href="sidebar_components">Sidebar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
									<ul>
										<li><a href="navigation_vertical_collapsible">Collapsible menu</a></li>
										<li><a href="navigation_vertical_accordion">Accordion menu</a></li>
										<li><a href="navigation_vertical_sizing">Navigation sizing</a></li>
										<li><a href="navigation_vertical_bordered">Bordered navigation</a></li>
										<li><a href="navigation_vertical_right_icons">Right icons</a></li>
										<li><a href="navigation_vertical_labels_badges">Labels and badges</a></li>
										<li><a href="navigation_vertical_disabled">Disabled navigation links</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
									<ul>
										<li><a href="navigation_horizontal_click">Submenu on click</a></li>
										<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
										<li><a href="navigation_horizontal_elements">With custom elements</a></li>
										<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
										<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-menu3"></i> <span>Navbars</span></a>
									<ul>
										<li><a href="navbar_single">Single navbar</a></li>
										<li>
											<a href="#">Multiple navbars</a>
											<ul>
												<li><a href="navbar_multiple_navbar_navbar">Navbar + navbar</a></li>
												<li><a href="navbar_multiple_navbar_header">Navbar + header</a></li>
												<li><a href="navbar_multiple_header_navbar">Header + navbar</a></li>
												<li><a href="navbar_multiple_top_bottom">Top + bottom</a></li>
											</ul>
										</li>
										<li><a href="navbar_colors">Color options</a></li>
										<li><a href="navbar_sizes">Sizing options</a></li>
										<li><a href="navbar_hideable">Hide on scroll</a></li>
										<li><a href="navbar_components">Navbar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-tree5"></i> <span>Menu levels</span></a>
									<ul>
										<li><a href="#"><i class="icon-IE"></i> Second level</a></li>
										<li>
											<a href="#"><i class="icon-firefox"></i> Second level with child</a>
											<ul>
												<li><a href="#"><i class="icon-android"></i> Third level</a></li>
												<li>
													<a href="#"><i class="icon-apple2"></i> Third level with child</a>
													<ul>
														<li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
														<li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="icon-windows"></i> Third level</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
									</ul>
								</li>
								<!-- /layout -->

								<!-- Data visualization -->
								<li class="navigation-header"><span>Data visualization</span> <i class="icon-menu" title="Data visualization"></i></li>
								<li>
									<a href="#"><i class="icon-graph"></i> <span>Echarts library</span></a>
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
									<a href="#"><i class="icon-statistics"></i> <span>D3 library</span></a>
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
									<a href="#"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
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
								<li>
									<a href="#"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
									<ul>
										<li><a href="c3_lines_areas">Lines and areas</a></li>
										<li><a href="c3_bars_pies">Bars and pies</a></li>
										<li><a href="c3_advanced">Advanced examples</a></li>
										<li><a href="c3_axis">Chart axis</a></li>
										<li><a href="c3_grid">Grid options</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i> <span>Google visualization</span></a>
									<ul>
										<li><a href="google_lines">Line charts</a></li>
										<li><a href="google_bars">Bar charts</a></li>
										<li><a href="google_pies">Pie charts</a></li>
										<li><a href="google_scatter_bubble">Bubble &amp; scatter charts</a></li>
										<li><a href="google_other">Other charts</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-map5"></i> <span>Maps integration</span></a>
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
								<!-- /data visualization -->

								<!-- Extensions -->
								<li class="navigation-header"><span>Extensions</span> <i class="icon-menu" title="Extensions"></i></li>
								<li>
									<a href="#"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
									<ul>
										<li><a href="extension_image_cropper">Image cropper</a></li>
										<li><a href="extension_blockui">Block UI</a></li>
										<li><a href="extension_dnd">Drag and drop</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-popout"></i> <span>JQuery UI</span></a>
									<ul>
										<li><a href="jqueryui_interactions">Interactions</a></li>
										<li><a href="jqueryui_forms">Forms</a></li>
										<li><a href="jqueryui_components">Components</a></li>
										<li><a href="jqueryui_sliders">Sliders</a></li>
										<li><a href="jqueryui_navigation">Navigation</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-upload"></i> <span>File uploaders</span></a>
									<ul>
										<li><a href="uploader_plupload">Plupload</a></li>
										<li><a href="uploader_bootstrap">Bootstrap file uploader</a></li>
										<li><a href="uploader_dropzone">Dropzone</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
									<ul>
										<li><a href="extension_fullcalendar_views">Basic views</a></li>
										<li><a href="extension_fullcalendar_styling">Event styling</a></li>
										<li><a href="extension_fullcalendar_formats">Language and time</a></li>
										<li><a href="extension_fullcalendar_advanced">Advanced usage</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-sphere"></i> <span>Internationalization</span></a>
									<ul>
										<li><a href="internationalization_switch_direct">Direct translation</a></li>
										<li><a href="internationalization_switch_query">Querystring parameter</a></li>
										<li><a href="internationalization_on_init">Set language on init</a></li>
										<li><a href="internationalization_after_init">Set language after init</a></li>
										<li><a href="internationalization_fallback">Language fallback</a></li>
										<li><a href="internationalization_callbacks">Callbacks</a></li>
									</ul>
								</li>
								<!-- /extensions -->

								<!-- Tables -->
								<li class="navigation-header"><span>Tables</span> <i class="icon-menu" title="Tables"></i></li>
								<li>
									<a href="#"><i class="icon-table2"></i> <span>Basic tables</span></a>
									<ul>
										<li><a href="table_basic">Basic examples</a></li>
										<li><a href="table_sizing">Table sizing</a></li>
										<li><a href="table_borders">Table borders</a></li>
										<li><a href="table_styling">Table styling</a></li>
										<li><a href="table_elements">Table elements</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-grid7"></i> <span>Data tables</span></a>
									<ul>
										<li><a href="datatable_basic">Basic initialization</a></li>
										<li><a href="datatable_styling">Basic styling</a></li>
										<li><a href="datatable_advanced">Advanced examples</a></li>
										<li><a href="datatable_sorting">Sorting options</a></li>
										<li><a href="datatable_api">Using API</a></li>
										<li><a href="datatable_data_sources">Data sources</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
									<ul>
										<li><a href="datatable_extension_reorder">Columns reorder</a></li>
										<li><a href="datatable_extension_row_reorder">Row reorder</a></li>
										<li><a href="datatable_extension_fixed_columns">Fixed columns</a></li>
										<li><a href="datatable_extension_fixed_header">Fixed header</a></li>
										<li><a href="datatable_extension_autofill">Auto fill</a></li>
										<li><a href="datatable_extension_key_table">Key table</a></li>
										<li><a href="datatable_extension_scroller">Scroller</a></li>
										<li><a href="datatable_extension_select">Select</a></li>
										<li>
											<a href="#">Buttons</a>
											<ul>
												<li><a href="datatable_extension_buttons_init">Initialization</a></li>
												<li><a href="datatable_extension_buttons_flash">Flash buttons</a></li>
												<li><a href="datatable_extension_buttons_print">Print buttons</a></li>
												<li><a href="datatable_extension_buttons_html5">HTML5 buttons</a></li>
											</ul>
										</li>

										<li><a href="datatable_extension_colvis">Columns visibility</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
									<ul>
										<li><a href="handsontable_basic">Basic configuration</a></li>
										<li><a href="handsontable_advanced">Advanced setup</a></li>
										<li><a href="handsontable_cols">Column features</a></li>
										<li><a href="handsontable_cells">Cell features</a></li>
										<li><a href="handsontable_types">Basic cell types</a></li>
										<li><a href="handsontable_custom_checks">Custom &amp; checkboxes</a></li>
										<li><a href="handsontable_ac_password">Autocomplete &amp; password</a></li>
										<li><a href="handsontable_search">Search</a></li>
										<li><a href="handsontable_context">Context menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-versions"></i> <span>Responsive options</span></a>
									<ul>
										<li><a href="table_responsive">Responsive basic tables</a></li>
										<li><a href="datatable_responsive">Responsive data tables</a></li>
									</ul>
								</li>
								<!-- /tables -->

								<!-- Page kits -->
								<li class="navigation-header"><span>Page kits</span> <i class="icon-menu" title="Page kits"></i></li>
								<li>
									<a href="#"><i class="icon-grid6"></i> <span>General pages</span></a>
									<ul>
										<li><a href="general_feed">Feed</a></li>
										<li><a href="general_widgets_content">Content widgets</a></li>
										<li><a href="general_widgets_stats">Statistics widgets</a></li>
										<li><a href="general_embeds">Embeds</a></li>
										<li><a href="general_faq">FAQ page</a></li>
										<li><a href="general_knowledgebase">Knowledgebase</a></li>
										<li>
											<a href="#">Blog</a>
											<ul>
												<li><a href="blog_classic_v">Classic vertical</a></li>
												<li><a href="blog_classic_h">Classic horizontal</a></li>
												<li><a href="blog_grid">Grid</a></li>
												<li><a href="blog_single">Single post</a></li>
												<li class="navigation-divider"></li>
												<li><a href="blog_sidebar_left">Left sidebar</a></li>
												<li><a href="blog_sidebar_right">Right sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Timelines</a>
											<ul>
												<li><a href="timelines_left">Left timeline</a></li>
												<li><a href="timelines_right">Right timeline</a></li>
												<li><a href="timelines_center">Centered timeline</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Gallery</a>
											<ul>
												<li><a href="gallery_grid">Media grid</a></li>
												<li><a href="gallery_titles">Media with titles</a></li>
												<li><a href="gallery_description">Media with description</a></li>
												<li><a href="gallery_library">Media library</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-wrench3"></i> <span>Service pages</span></a>
									<ul>
										<li><a href="service_sitemap">Sitemap</a></li>
										<li>
											<a href="#">Invoicing</a>
											<ul>
												<li><a href="invoice_template">Invoice template</a></li>
												<li><a href="invoice_grid">Invoice grid</a></li>
												<li><a href="invoice_archive">Invoice archive</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Authentication</a>
											<ul>
												<li><a href="login_simple">Simple login</a></li>
												<li><a href="login_advanced">More login info</a></li>
												<li><a href="login_registration">Simple registration</a></li>
												<li><a href="login_registration_advanced">More registration info</a></li>
												<li><a href="login_unlock">Unlock user</a></li>
												<li><a href="login_password_recover">Reset password</a></li>
												<li><a href="login_hide_navbar">Hide navbar</a></li>
												<li><a href="login_transparent">Transparent box</a></li>
												<li><a href="login_background">Background option</a></li>
												<li><a href="login_validation">With validation</a></li>
												<li><a href="login_tabbed">Tabbed form</a></li>
												<li><a href="login_modals">Inside modals</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Error pages</a>
											<ul>
												<li><a href="error_403">Error 403</a></li>
												<li><a href="error_404">Error 404</a></li>
												<li><a href="error_405">Error 405</a></li>
												<li><a href="error_500">Error 500</a></li>
												<li><a href="error_503">Error 503</a></li>
												<li><a href="error_offline">Offline page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-people"></i> <span>User pages</span></a>
									<ul>
										<li><a href="user_pages_list">User list</a></li>
										<li><a href="user_pages_cards">User cards</a></li>
										<li><a href="user_pages_profile">Simple profile</a></li>
										<li><a href="user_pages_profile_tabbed">Tabbed profile</a></li>
										<li><a href="user_pages_profile_cover">Profile with cover</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-cube3"></i> <span>Application pages</span></a>
									<ul>
										<li>
											<a href="#">Task manager</a>
											<ul>
												<li><a href="task_manager_grid">Task grid</a></li>
												<li><a href="task_manager_list">Task list</a></li>
												<li><a href="task_manager_detailed">Task detailed</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Inbox</a>
											<ul>
												<li><a href="mail_list">Mail list</a></li>
												<li><a href="mail_list_detached">Mail list (detached)</a></li>
												<li><a href="mail_read">Read mail</a></li>
												<li><a href="mail_write">Write mail</a></li>
												<li class="navigation-divider"></li>
												<li><a href="chat_layouts">Chat layouts</a></li>
												<li><a href="chat_options">Chat options</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Search</a>
											<ul>
												<li><a href="search_basic">Basic search results</a></li>
												<li><a href="search_users">User search results</a></li>
												<li><a href="search_images">Image search results</a></li>
												<li><a href="search_videos">Video search results</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Job search</a>
											<ul>
												<li><a href="job_list_cards">Cards view</a></li>
												<li><a href="job_list_panel">Panel view</a></li>
												<li><a href="job_detailed">Job detailed</a></li>
												<li><a href="job_apply">Apply</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Learning</a>
											<ul>
												<li><a href="learning_list">List view</a></li>
												<li><a href="learning_grid">Grid view</a></li>
												<li><a href="learning_detailed">Detailed course</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Ecommerce set</a>
											<ul>
												<li><a href="ecommerce_product_list">Product list</a></li>
												<li><a href="ecommerce_product_grid">Product grid</a></li>
												<li><a href="ecommerce_orders_history">Orders history</a></li>
												<li><a href="ecommerce_customers">Customers</a></li>
												<li><a href="ecommerce_pricing">Pricing tables</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Components</span> - Tabs</h4>
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
							<li><a href="components_tabs">Components</a></li>
							<li class="active">Tabs</li>
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

					<!-- Basic tabs title -->
					<h6 class="content-group text-semibold">
						Basic tabs layout
						<small class="display-block">Default tabs layout options</small>
					</h6>
					<!-- /basic tabs title -->


					<!-- Basic tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Basic tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#basic-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#basic-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#basic-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#basic-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="basic-tab1">
												Basic tabs example using <code>.nav-tabs</code> class. Also requires base <code>.nav</code> class.
											</div>

											<div class="tab-pane" id="basic-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="basic-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="basic-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Basic justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-justified">
											<li class="active"><a href="#basic-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#basic-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#basic-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#basic-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="basic-justified-tab1">
												Easily make tabs equal widths of their parent with <code>.nav-justified</code> class.
											</div>

											<div class="tab-pane" id="basic-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="basic-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="basic-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /basic tabs -->


					<!-- Rounded basic tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Basic rounded</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-component">
											<li class="active"><a href="#basic-rounded-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#basic-rounded-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#basic-rounded-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#basic-rounded-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="basic-rounded-tab1">
												Use <code>.nav-tabs-component</code> class to round corners if the tabs are a separate component.
											</div>

											<div class="tab-pane" id="basic-rounded-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="basic-rounded-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="basic-rounded-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified rounded</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-component nav-justified">
											<li class="active"><a href="#basic-rounded-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#basic-rounded-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#basic-rounded-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#basic-rounded-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="basic-rounded-justified-tab1">
												For justified tabs use <code>.nav-justified .nav-tabs-component</code> classes.
											</div>

											<div class="tab-pane" id="basic-rounded-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="basic-rounded-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="basic-rounded-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded basic tabs -->


					<!-- Highlighted tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Highlighted tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#highlight-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#highlighted-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#highlighted-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#highlighted-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-tab1">
												Highlight top border of the active tab by adding <code>.nav-tabs-highlight</code> class.
											</div>

											<div class="tab-pane" id="highlighted-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="highlighted-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="highlighted-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Highlighted justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#highlighted-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#highlighted-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#highlighted-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#highlighted-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-highlight</code> classes.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /highlighted tabs -->



					<!-- Tabs with top line -->
					<h6 class="content-group text-semibold">
						Top line tabs
						<small class="display-block">Display only <code>top</code> border in active tab</small>
					</h6>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Top line tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top">
											<li class="active"><a href="#top-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#top-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#top-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#top-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="top-tab1">
												Add <code>top</code> border to the active tab with <code>.nav-tabs-top</code> class.
											</div>

											<div class="tab-pane" id="top-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="top-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="top-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Top line divided</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top top-divided">
											<li class="active"><a href="#top-divided-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#top-divided-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#top-divided-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#top-divided-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="top-divided-tab1">
												Hide bottom border in top line layout by adding <code>.top-divided</code> class.
											</div>

											<div class="tab-pane" id="top-divided-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="top-divided-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="top-divided-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Top line justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top nav-justified">
											<li class="active"><a href="#top-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#top-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#top-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#top-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="top-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top</code> classes.
											</div>

											<div class="tab-pane" id="top-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="top-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="top-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Top line divided/justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top top-divided nav-justified">
											<li class="active"><a href="#top-justified-divided-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#top-justified-divided-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#top-justified-divided-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#top-justified-divided-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="top-justified-divided-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top .top-divided</code> classes.
											</div>

											<div class="tab-pane" id="top-justified-divided-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="top-justified-divided-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="top-justified-divided-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /tabs with top line -->



					<!-- Tabs with bottom line -->
					<h6 class="content-group text-semibold">
						Bottom line tabs
						<small class="display-block">Display only <code>bottom</code> border in active tab</small>
					</h6>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bottom line tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom">
											<li class="active"><a href="#bottom-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bottom-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bottom-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bottom-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="bottom-tab1">
												Add <code>bottom</code> border to the active tab with <code>.nav-tabs-bottom</code> class.
											</div>

											<div class="tab-pane" id="bottom-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="bottom-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="bottom-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bottom line divided</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom bottom-divided">
											<li class="active"><a href="#bottom-divided-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bottom-divided-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bottom-divided-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bottom-divided-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="bottom-divided-tab1">
												Hide bottom border in bottom line layout by adding <code>.bottom-divided</code> class.
											</div>

											<div class="tab-pane" id="bottom-divided-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="bottom-divided-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="bottom-divided-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bottom line justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="active"><a href="#bottom-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bottom-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bottom-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bottom-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="bottom-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom</code> classes.
											</div>

											<div class="tab-pane" id="bottom-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="bottom-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="bottom-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bottom line divided/justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom bottom-divided nav-justified">
											<li class="active"><a href="#bottom-justified-divided-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bottom-justified-divided-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bottom-justified-divided-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bottom-justified-divided-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="bottom-justified-divided-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom .bottom-divided</code> classes.
											</div>

											<div class="tab-pane" id="bottom-justified-divided-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="bottom-justified-divided-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="bottom-justified-divided-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /tabs with bottom line -->



					<!-- Solid tabs title -->
					<h6 class="content-group text-semibold">
						Solid tabs
						<small class="display-block">Add visual difference to the tabs</small>
					</h6>
					<!-- /solid tabs title -->


					<!-- Tabs with solid background -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Solid tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid">
											<li class="active"><a href="#solid-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#solid-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#solid-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#solid-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-tab1">
												Add solid background color to the tabs with <code>.nav-tabs-solid</code> class.
											</div>

											<div class="tab-pane" id="solid-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Solid justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid nav-justified">
											<li class="active"><a href="#solid-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#solid-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#solid-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#solid-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-solid</code> classes.
											</div>

											<div class="tab-pane" id="solid-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /tabs with solid background -->


					<!-- Rounded solid tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Solid rounded</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-component">
											<li class="active"><a href="#solid-rounded-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#solid-rounded-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#solid-rounded-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#solid-rounded-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-rounded-tab1">
												In solid tabs <code>.nav-tabs-component</code> class rounds tabs container and first tab corners.
											</div>

											<div class="tab-pane" id="solid-rounded-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-rounded-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-rounded-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Rounded justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
											<li class="active"><a href="#solid-rounded-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#solid-rounded-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#solid-rounded-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#solid-rounded-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-rounded-justified-tab1">
												For justified tabs use <code>.nav-justified .nav-tabs-solid .nav-tabs-component</code> classes.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded solid tabs -->



					<!-- Vertical tabs -->
					<h6 class="content-group text-semibold">
						Vertical tabs
						<small class="display-block">Display tabs nav on left or right side</small>
					</h6>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Left side placement</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable nav-tabs-vertical nav-tabs-left">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#left-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#left-tab2" data-toggle="tab"><i class="icon-mention position-left"></i> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="#left-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#left-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active has-padding" id="left-tab1">
												Basic tabs example using <code>.nav-tabs</code> class. Also requires base <code>.nav</code> class.
											</div>

											<div class="tab-pane has-padding" id="left-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane has-padding" id="left-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane has-padding" id="left-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Right side placement</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable nav-tabs-vertical nav-tabs-right">
										<div class="tab-content">
											<div class="tab-pane active has-padding" id="right-tab1">
												Basic tabs example using <code>.nav-tabs</code> class. Also requires base <code>.nav</code> class.
											</div>

											<div class="tab-pane has-padding" id="right-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane has-padding" id="right-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane has-padding" id="right-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>

										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#right-tab1" data-toggle="tab"><span class="label label-danger pull-right">Bug</span> Active</a></li>
											<li><a href="#right-tab2" data-toggle="tab"><span class="label label-info pull-right">Fixed</span> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-success pull-right">37</span> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="#right-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#right-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /vertical tabs -->



					<!-- Colored tabs title -->
					<h6 class="content-group text-semibold">
						Colored tabs
						<small class="display-block">Tabs with custom background color</small>
					</h6>
					<!-- /colored tabs title -->


					<!-- Colored tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Colored tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs bg-teal-400">
											<li class="active"><a href="#colored-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="colored-tab1">
												Add <code>custom</code> background color to the tabs using <code>.bg-*</code> class.
											</div>

											<div class="tab-pane" id="colored-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="colored-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="colored-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Colored justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs bg-teal-400 nav-justified">
											<li class="active"><a href="#colored-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="colored-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .bg-*</code> classes.
											</div>

											<div class="tab-pane" id="colored-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="colored-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="colored-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /colored tabs -->


					<!-- Rounded colored tabs -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Colored rounded</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs bg-slate nav-tabs-component">
											<li class="active"><a href="#colored-rounded-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-rounded-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-rounded-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-rounded-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="colored-rounded-tab1">
												In colored tabs <code>.nav-tabs-component</code> class rounds tabs container and first tab corners.
											</div>

											<div class="tab-pane" id="colored-rounded-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="colored-rounded-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="colored-rounded-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Rounded justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs bg-slate nav-tabs-component nav-justified">
											<li class="active"><a href="#colored-rounded-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-rounded-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-rounded-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-rounded-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="colored-rounded-justified-tab1">
												For justified tabs use <code>.nav-justified .bg-* .nav-tabs-component</code> classes.
											</div>

											<div class="tab-pane" id="colored-rounded-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="colored-rounded-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="colored-rounded-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded colored tabs -->



					<!-- Tab options title -->
					<h6 class="content-group text-semibold">
						Other tab options
						<small class="display-block">Animations, position, borders, content</small>
					</h6>
					<!-- /tab options title -->


					<!-- Animations -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Fade animation</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#fade-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#fade-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#fade-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#fade-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane fade in active" id="fade-tab1">
												To make tabs fade in, add <code>.fade</code> to each <code>.tab-pane</code> and <code>.in</code> to the active tab.
											</div>

											<div class="tab-pane fade" id="fade-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane fade" id="fade-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane fade" id="fade-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">CSS animations</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#css-animate-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#css-animate-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#css-animate-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#css-animate-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane animated bounceIn active" id="css-animate-tab1">
												To use custom animations, add animation classes to each <code>.tab-pane</code> container.
											</div>

											<div class="tab-pane animated fadeInUp" id="css-animate-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane animated zoomIn" id="css-animate-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane animated flipInX" id="css-animate-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /animations -->


					<!-- Tabs position -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Centered position</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight text-center">
											<li class="active"><a href="#centered-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#centered-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#centered-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#centered-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="centered-tab1">
												To use centered tabs, add <code>.text-center</code> to the <code>.nav-tabs</code> class.
											</div>

											<div class="tab-pane" id="centered-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="centered-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="centered-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Right position</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight text-right">
											<li class="active"><a href="#right-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#right-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#right-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#right-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="right-tab1">
												To use right aligned tabs, add <code>.text-right</code> to the <code>.nav-tabs</code> class.
											</div>

											<div class="tab-pane" id="right-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="right-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="right-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /tabs position -->


					<!-- Bordered tab content -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bordered tab content</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable tab-content-bordered">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#bordered-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bordered-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bordered-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bordered-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane has-padding active" id="bordered-tab1">
												To apply border and padding to the tab content, add <code>.tab-content-bordered</code> to the parent container.
											</div>

											<div class="tab-pane has-padding" id="bordered-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane has-padding" id="bordered-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane has-padding" id="bordered-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bordered justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable tab-content-bordered">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#bordered-justified-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#bordered-justified-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#bordered-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#bordered-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane has-padding active" id="bordered-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and <code>.tab-content-bordered</code> to the parent container.
											</div>

											<div class="tab-pane has-padding" id="bordered-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane has-padding" id="bordered-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane has-padding" id="bordered-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /bordered tab content -->



					<!-- Tab icons -->
					<h6 class="content-group text-semibold">
						Tabs with icons
						<small class="display-block">Show icons in different positions</small>
					</h6>
					<!-- /tab icons title -->


					<!-- Left icons -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with left icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#left-icon-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#left-icon-tab2" data-toggle="tab"><i class="icon-mention position-left"></i> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear position-left"></i> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#left-icon-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#left-icon-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="left-icon-tab1">
												Add icon markup <code>before</code> tab nav text to display icons on the left side.
											</div>

											<div class="tab-pane" id="left-icon-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="left-icon-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="left-icon-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs. Left icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#justified-left-icon-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#justified-left-tab2" data-toggle="tab"><i class="icon-mention position-left"></i> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear position-left"></i> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-left-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-left-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-left-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-left-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-left-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-left-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /left icons -->


					<!-- Right icons -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with right icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom">
											<li class="active"><a href="#right-icon-tab1" data-toggle="tab">Active <i class="icon-menu7 position-right"></i></a></li>
											<li><a href="#right-icon-tab2" data-toggle="tab">Inactive <i class="icon-mention position-right"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear position-right"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#right-icon-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#right-icon-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="right-icon-tab1">
												Add icon markup <code>after</code> tab nav text to display icons on the right side.
											</div>

											<div class="tab-pane" id="right-icon-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="right-icon-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="right-icon-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs. Right icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="active"><a href="#justified-right-icon-tab1" data-toggle="tab">Active <i class="icon-menu7 position-right"></i></a></li>
											<li><a href="#justified-right-icon-tab2" data-toggle="tab">Inactive <i class="icon-mention position-right"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear position-right"></i><span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-right-icon-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-right-icon-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-right-icon-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-right-icon-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-right-icon-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-right-icon-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /right icons -->


					<!-- Top icons -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with top icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom bottom-divided nav-tabs-icon">
											<li class="active"><a href="#top-icon-tab1" data-toggle="tab"><i class="icon-menu7"></i> Active</a></li>
											<li><a href="#top-icon-tab2" data-toggle="tab"><i class="icon-mention"></i> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#top-icon-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#top-icon-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="top-icon-tab1">
												To display icon on top, add icon code and <code>.nav-tabs-icon</code> class to the tabs nav container.
											</div>

											<div class="tab-pane" id="top-icon-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="top-icon-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="top-icon-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs. Top icons</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-bottom bottom-divided nav-justified nav-tabs-icon">
											<li class="active"><a href="#justified-top-icon-tab1" data-toggle="tab"><i class="icon-menu7"></i> Active</a></li>
											<li><a href="#justified-top-icon-tab2" data-toggle="tab"><i class="icon-mention"></i> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-top-icon-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-top-icon-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-top-icon-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-top-icon-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-top-icon-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-top-icon-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /top icons -->


					<!-- Icons only -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with icons only</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top">
											<li class="active">
												<a href="#icon-only-tab1" data-toggle="tab">
													<i class="icon-menu7"></i>
													<span class="visible-xs-inline-block position-right">Active</span>
												</a>
											</li>

											<li>
												<a href="#icon-only-tab2" data-toggle="tab">
													<i class="icon-mention"></i>
													<span class="visible-xs-inline-block position-right">Inactive</span>
												</a>
											</li>

											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear"></i>
													<span class="visible-xs-inline-block position-right">Dropdown</span>
													<span class="caret"></span>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#icon-only-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#icon-only-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="icon-only-tab1">
												If tab nav doesn't have a text, add icon markup to display icon only.
											</div>

											<div class="tab-pane" id="icon-only-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="icon-only-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="icon-only-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs. Icons only</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top nav-justified">
											<li class="active">
												<a href="#justified-icon-only-tab1" data-toggle="tab">
													<i class="icon-menu7"></i>
													<span class="visible-xs-inline-block position-right">Active</span>
												</a>
											</li>

											<li>
												<a href="#justified-icon-only-tab2" data-toggle="tab">
													<i class="icon-mention"></i>
													<span class="visible-xs-inline-block position-right">Inactive</span>
												</a>
											</li>

											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear"></i>
													<span class="visible-xs-inline-block position-right">Dropdown</span>
													<span class="caret"></span>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-icon-only-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-icon-only-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-icon-only-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-icon-only-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-icon-only-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-icon-only-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /icons only -->



					<!-- Tab labels title -->
					<h6 class="content-group text-semibold">
						Tabs with labels
						<small class="display-block">Display labels and badges</small>
					</h6>
					<!-- /tab labels title -->


					<!-- Labels -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with labels</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#label-tab1" data-toggle="tab"><span class="label label-danger position-left">Bug</span> Active</a></li>
											<li><a href="#label-tab2" data-toggle="tab">Inactive <span class="label bg-slate position-right">Fixed</span></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-info">Priority</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#label-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#label-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="label-tab1">
												Display <code>labels</code> on the left/right sides and in empty tab nav. Empty labels are hidden.
											</div>

											<div class="tab-pane" id="label-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="label-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="label-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs with labels</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#justified-label-tab1" data-toggle="tab"><span class="label label-danger position-left">Bug</span> Active</a></li>
											<li><a href="#justified-label-tab2" data-toggle="tab">Inactive <span class="label label-info position-right">Fixed</span></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-success">Priority</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-label-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-label-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-label-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and label markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-label-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-label-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-label-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /labels -->


					<!-- Badges -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs with badges</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#badges-tab1" data-toggle="tab"><span class="badge badge-success position-left">78</span> Active</a></li>
											<li><a href="#badges-tab2" data-toggle="tab">Inactive <span class="badge badge-danger position-right">23</span></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge bg-slate">34</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#badges-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#badges-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="badges-tab1">
												Display <code>badges</code> on the left/right sides and in empty tab nav. Empty badges are hidden.
											</div>

											<div class="tab-pane" id="badges-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="badges-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="badges-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Justified tabs with badges</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#justified-badges-tab1" data-toggle="tab"><span class="badge badge-danger position-left">87</span> Active</a></li>
											<li><a href="#justified-badges-tab2" data-toggle="tab">Inactive <span class="badge bg-slate position-right">23</span></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-info">34</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#justified-badges-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#justified-badges-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-badges-tab1">
												To use in tabs with equal widths add <code>.nav-justified</code> and badge markup to the tab nav.
											</div>

											<div class="tab-pane" id="justified-badges-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="justified-badges-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="justified-badges-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /badges -->



					<!-- Tabs sizing title -->
					<h6 class="content-group text-semibold">
						Tabs sizing
						<small class="display-block">Available tabs sizing with elements</small>
					</h6>
					<!-- /tabs sizing title -->


					<!-- Large size -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Large size</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-lg nav-tabs nav-tabs-solid nav-tabs-component">
											<li class="active"><a href="#large-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#large-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#large-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#large-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="large-tab1">
												To use large size, add <code>.nav-tabs-lg</code> class to the <code>.nav-tabs</code> base class.
											</div>

											<div class="tab-pane" id="large-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="large-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="large-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Large with elements</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-lg nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
											<li class="active"><a href="#large-justified-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#large-justified-tab2" data-toggle="tab"><span class="label label-danger position-left">Done</span> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="badge bg-slate position-right">39</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#large-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#large-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="large-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-lg</code> classes.
											</div>

											<div class="tab-pane" id="large-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="large-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="large-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /large size -->


					<!-- Default size -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Default size</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-component">
											<li class="active"><a href="#default-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#default-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#default-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#default-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="default-tab1">
												Default tabs size doesn't require any additional sizing classes.
											</div>

											<div class="tab-pane" id="default-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="default-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="default-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Default with elements</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
											<li class="active"><a href="#default-justified-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#default-justified-tab2" data-toggle="tab"><span class="label label-danger position-left">Done</span> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="badge bg-slate position-right">39</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#default-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#default-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="default-justified-tab1">
												To use in default tabs with equal widths add <code>.nav-justified</code> class.
											</div>

											<div class="tab-pane" id="default-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="default-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="default-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /default size -->


					<!-- Small size -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Small size</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-sm nav-tabs nav-tabs-solid nav-tabs-component">
											<li class="active"><a href="#small-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#small-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#small-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#small-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="small-tab1">
												To use small size, add <code>.nav-tabs-sm</code> class to the <code>.nav-tabs</code> base class.
											</div>

											<div class="tab-pane" id="small-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="small-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="small-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /small size -->

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Small with elements</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-sm nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
											<li class="active"><a href="#small-justified-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#small-justified-tab2" data-toggle="tab"><span class="label label-danger position-left">Done</span> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="badge bg-slate position-right">39</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#small-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#small-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="small-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-sm</code> classes.
											</div>

											<div class="tab-pane" id="small-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="small-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="small-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Mini size -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Mini size</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-xs nav-tabs nav-tabs-solid nav-tabs-component">
											<li class="active"><a href="#mini-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#mini-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#mini-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#mini-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="mini-tab1">
												To use mini size, add <code>.nav-tabs-xs</code> class to the <code>.nav-tabs</code> base class.
											</div>

											<div class="tab-pane" id="mini-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="mini-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="mini-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Mini with elements</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable">
										<ul class="nav nav-xs nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
											<li class="active"><a href="#mini-justified-tab1" data-toggle="tab"><i class="icon-menu7 position-left"></i> Active</a></li>
											<li><a href="#mini-justified-tab2" data-toggle="tab"><span class="label label-danger position-left">Done</span> Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="badge bg-slate position-right">39</span> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#mini-justified-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#mini-justified-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="mini-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-xs</code> classes.
											</div>

											<div class="tab-pane" id="mini-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="mini-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="mini-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /mini size -->


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
