@extends('layout.app')
@section('content')
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4>DASHBOARD</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
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

					<!-- /main charts -->

					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

							<!-- First Rapat -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title text-center bg-purple">Sedang Berlangsung</h6>
								</div>
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th class="col-md-1">No</th>
												<th class="col-md-2">
													<div>
														<span>Ruang</span>
													</div>
													<div>
														<span class="text-muted">Jam Mulai</span>
													</div>
												</th>
												<th class="col-md-6">
													<div>
														<span>Agenda</span>
													</div>
													<div>
														<span class="text-muted">Tema</span>
													</div>
												</th>
												<th class="col-md-2">Absensi</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													1
												</td>
												<td>
													<div>
														<span class="text">Ruang 1</span>
													</div>
													<div>
														<span class="text-muted">00:12</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text">9 Anggota DPRD</span>
													</div>
													<div>
														<span class="text">2 Narasumber</span>
													</div>
													<div>
														<span class="text">2 Masyarakat</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td>
													2
												</td>
												<td>
													<div>
														<span class="text">Ruang 2</span>
													</div>
													<div>
														<span class="text-muted">08:20</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text">6 Anggota DPRD</span>
													</div>
													<div>
														<span class="text">1 Narasumber</span>
													</div>
													<div>
														<span class="text"> </span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- Second Rapat -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title text-center bg-slate">Agenda Rapat / Sidang / Musyawarah selanjutnya</h6>
								</div>
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th class="col-md-1">No</th>
												<th class="col-md-2">
													<div>
														<span>Tanggal</span>
													</div>
													<div>
														<span class="text-muted">Jam</span>
													</div>
												</th>
												<th class="col-md-6">
													<div>
														<span>Agenda</span>
													</div>
													<div>
														<span class="text-muted">Tema</span>
													</div>
												</th>
												<th class="col-md-2">Ruang</th>
												<th class="col-md-2">Peserta</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													1
												</td>
												<td>
													<div>
														<span class="text">15 Sep</span>
													</div>
													<div>
														<span class="text-muted">09:00</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													Ruang 2
												</td>
												<td>
													<div>
														<span class="text">9 Anggota DPRD</span>
													</div>
													<div>
														<span class="text">2 Narasumber</span>
													</div>
													<div>
														<span class="text">2 Masyarakat</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													2
												</td>
												<td>
													<div>
														<span class="text">18 Sep</span>
													</div>
													<div>
														<span class="text-muted">08:30</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													Ruang 1
												</td>
												<td>
													<div>
														<span class="text">6 Anggota DPRD</span>
													</div>
													<div>
														<span class="text">1 Narasumber</span>
													</div>
													<div>
														<span class="text"></span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													3
												</td>
												<td>
													<div>
														<span class="text">19 Sep</span>
													</div>
													<div>
														<span class="text-muted">09:00</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													Ruang 2
												</td>
												<td>
													<div>
														<span class="text">9 Anggota DPRD</span>
													</div>
													<div>
														<span class="text">2 Narasumber</span>
													</div>
													<div>
														<span class="text">2 Mitra Kerja</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- Third Rapat -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title text-center bg-grey">Rapat / Sidang / Musyawarah sebelumnya</h6>
								</div>
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th class="col-md-1">No</th>
												<th class="col-md-2">
													<div>
														<span>Tanggal</span>
													</div>
													<div>
														<span class="text-muted">Jam</span>
													</div>
												</th>
												<th class="col-md-5">
													<div>
														<span>Agenda</span>
													</div>
													<div>
														<span class="text-muted">Tema</span>
													</div>
												</th>
												<th class="col-md-3">
													<div>
														<span>Ruang</span>
														
													</div>
													<div>
														<span class="text-muted">Kehadiran</span>
													</div>
												</th>
												<th class="col-md-2">Hasil</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td>
													<div>
														<span class="text">15 Sep</span>
													</div>
													<div>
														<span class="text-muted">09:00 - 13:08</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													<div>
														<span>Ruang 2</span>
													</div>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 50%">
															<span>50%</span>
														</div>
													</div>
													
												</td>
												<td>
													<div>
														<span class="text">Ditunda tgl..</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													2
												</td>
												<td>
													<div>
														<span class="text">10 Sep</span>
													</div>
													<div>
														<span class="text-muted">13:23 - 17:42</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													<div>
														<span>Ruang 1</span>
													</div>
													<div class="progress">
														<div class="progress-bar progress-bar-success" style="width: 65%">
															<span>65%</span>
														</div>
													</div>
													
												</td>
												<td>
													<div>
														<span class="text">Selesai</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													3
												</td>
												<td>
													<div>
														<span class="text">05 Sep</span>
													</div>
													<div>
														<span class="text-muted">07:21 - 08:05</span>
													</div>
												</td>
												<td>
													<div>
														<span class="text-semibold">Rapat xxxx</span>
													</div>
													<div>
														<span class="text-muted">lorem itsum</span>
													</div>
												</td>
												<td>
													<div>
														<span>Ruang 2</span>
													</div>
													<div class="progress">
														<div class="progress-bar progress-bar-danger" style="width: 20%">
															{{-- <span>20%</span> --}}
														</div>
														<span>20%</span>
													</div>
													
												</td>
												<td>
													<div>
														<span class="text">Dibatalkan</span>
													</div>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<!-- /marketing campaigns -->
						</div>
					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->
@endsection