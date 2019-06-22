<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css" >
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<!-- <div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Form Layouts</span> - Vertical</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_layout_vertical.html">Form layouts</a></li>
							<li class="active">Vertical</li>
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
				</div> -->
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row justify-content-center">
						<div class="col-md-4"></div>
						<div class="col-md-4">

							<!-- Basic layout-->
							<form action="#">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Form Register</h5>
										<!-- <div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div> -->
									</div>

									<div class="panel-body">
										<div class="form-group">
											<label>Name:</label>
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control" placeholder="Ekopyov">
										</div>
										<div class="form-group">
											<label>Password:</label>
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
										<div class="form-group">
											<label class="display-block">Gender:</label>

											<label class="radio-inline">
												<input type="radio" class="styled" name="gender" checked="checked">
												Male
											</label>

											<label class="radio-inline">
												<input type="radio" class="styled" name="gender">
												Female
											</label>
										</div>

										<div class="form-group">
											<label>Foto Profil:</label>
											<input type="file" class="file-styled">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>
					<!-- /vertical form options -->


					<!-- Centered forms -->
					<!-- /form centered -->


					<!-- Fieldset legend -->
					<!-- /fieldset legend -->


					<!-- 2 columns form -->
					<!-- /2 columns form -->


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
