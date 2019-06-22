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
<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<p class="navbar-text"><span class="label bg-success">Online</span></p>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#"><i class="icon-cog3"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">55</span>
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
						<span>ADMIN</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
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

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">DPRD KABUPATEN XXXX</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;PROVINSI JAWA TIMUR
									</div>
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
								<li class="navigation-header"><span class="badge bg-warning-400">42</span><span>Dashboard Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="dashboard"><i class="icon-home4"></i> <span>Halaman Utama</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Perencanaan Rapat</span></a>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Rapat Sedang Berjalan</span>
									<span class="badge bg-warning-400">3</span>
								</a>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i><span>Cari</span>
									<span class="badge bg-warning-400">1</span>
								</a>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Pengaturan</span></a>
									<ul>
										<li><a href="#">Daftar Anggota Dewan</a></li>
										<li><a href="#">Daftar Fraksi</a></li>
										<li><a href="#">Daftar Partai</a></li>
										<li><a href="#">Daftar Alat Kelengkapan Dewan</a></li>
										<li><a href="#">Daftar Jenis Sidang / Rapat</a></li>
										<li><a href="#">Daftar Agenda / Tema Sidang</a></li>
										<li><a href="#">Daftar Pengguna Aplikasi</a></li>
										<li><a href="#">Daftar Grup Pengguna</a></li>
										<li><a href="#">Daftar Jabatan Dewan</a></li>
										<li><a href="#">Daftar Narasumber</a></li>
										<li><a href="#">Daftar Komisi Ad-Hoc</a></li>
										<li><a href="#">Daftar Pegawai Sek-wan</a></li>
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
			@yield('content')
		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
