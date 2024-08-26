<?php $page="patient-dashboard";?>
@extends('layout.mainlayout')
@section('content')		
<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-counc-img">
											<img src="assets/img/patients/patient.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="patient-dashboard">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="favourites">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li>
												<a href="chat">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="profile-settings">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Upcoming</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Requested</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pat_billing" data-toggle="tab">History</a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Upcoming Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr class="patient-appoint">
																	<th>Patient</th>
																	<th>Details</th>
																	<th>Counsellor</th>
																	<th>Appointment Date</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
                                  									<td>
																		<h2 class="table-avatar">
																			<a href="patient-profile" class="patient-name-appoint">Jacopo</a>
																		</h2>
																	</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="councellor-profile" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/counsellors/counsellor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="councellor-profile">Ruby Perrin </a>
																		</h2>
																	</td>
																	<td>12 Mar 2020
																		<span class="d-block text-info">12:00AM - 12.30AM</span>
																	</td>
																	<td>
																		<i class="fas fa-video appoint-video"></i>  
																		<p class="go-visit mb-0">GO TO VISIT</p>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="patient-profile" class="patient-name-appoint">Jacopo</a>
																		</h2>
																	</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="councellor-profile" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/counsellors/counsellor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="councellor-profile">Ruby Perrin </a>
																		</h2>
																	</td>
																	<td>12 Mar 2020
																		<span class="d-block text-info">12:00AM - 12.30AM</span>
																	</td>
																	<td>
                                  										<i class="fas fa-video appoint-video"></i>  
                                   										<p class="go-visit mb-0">GO TO VISIT</p>
																	</td>
																</tr>					
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Upcoming Tab -->
										
										<!-- Requested Tab -->
										<div class="tab-pane fade" id="pat_prescriptions">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">	
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Requested Tab -->
										
										<!-- History Tab -->
										<div id="pat_billing" class="tab-pane fade">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr class="patient-appoint">
																	<th>Patient</th>
																	<th>Details</th>
																	<th>Counsellor</th>
																	<th>Survey</th>
																	<th>Med.</th>
																	<th>Appointment Date</th>
																	<th>Share</th>
																</tr>
															</thead>
															<tbody>
																<tr>
                                  									<td>
																		<h2 class="table-avatar">
																			<a href="patient-profile" class="patient-name-appoint">Jacopo</a>
																		</h2>
																	</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="councellor-profile" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/counsellors/counsellor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="councellor-profile">Ruby Perrin </a>
																		</h2>
                                  									</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
                                      										<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																		</div>
                                  									</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
                                      										</a>
                                      										<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																		</div>
																	</td>
																	<td>12 Mar 2020
																		<span class="d-block text-info">12:00AM - 12.30AM</span>
																	</td>
																	<td>
                                  										<i class="fa fa-check"></i> 
                                  									</td>
																</tr>
																<tr>
                                  									<td>
																		<h2 class="table-avatar">
																			<a href="patient-profile" class="patient-name-appoint">Jacopo</a>
																		</h2>
																	</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="councellor-profile" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/counsellors/counsellor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="councellor-profile">Ruby Perrin </a>
																		</h2>
                                  									</td>
                                  									<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
                                      										</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																		</div>
                                  									</td>
																	<td>
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
                                      										<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																		</div>
																	</td>
																	<td>12 Mar 2020
																		<span class="d-block text-info">12:00AM - 12.30AM</span>
																	</td>
																	<td>
																		<i class="fa fa-check"></i> 
																	</td>
																</tr>					
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /History Tab -->
										
									</div>
									<!-- Tab Content -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			</div>
	   @endsection
	  