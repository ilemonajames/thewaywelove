<?php $page="patient-dependent";?>
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
								<div class="card-body dependent pt-0">
									<p class="help-title">WHO NEEDS HELP?</p>
											<div class="row justify-content-center">
												
												<div class="col-md-3">
													<img src="assets/img/patients/patient.jpg" class="dependent-img" alt="Patient Image">
													<p class="depedent-name pt-3 pl-4">Jacopo</p>
												</div>
												<div class="col-md-3">
													<img src="assets/img/patients/patient1.jpg" class="dependent-img" alt="Patient Image">
													<p class="depedent-name pt-3 pl-4">Alessandro</p>
												</div>
												<div class="col-md-3">
													<a href="patient-add-dependent" target="_blank" class="add-dependent-link">
														<!-- <img src="assets/img/patients/add-dependent.png" class="add-dependent-img"> -->
														<i class="fa fa-plus add-dependent-img" aria-hidden="true"></i>
													</a>
													<p class="add-depedent-name pt-3">Add dependent</p>
												</div>

											</div>									
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			</div>
	   @endsection
	  