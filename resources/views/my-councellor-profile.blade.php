<?php $page="councellor-profile";?>
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
									<li class="breadcrumb-item active" aria-current="page">Counsellor Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Counsellor Profile</h2>
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
						<div class="col-md-5 col-lg-4 col-xl-3">
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

							<!-- Counsellor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="counsellor-widget">
										<div class="counc-info-left">
											<div class="counsellor-img">
												<img src="assets/img/counsellors/counsellor-thumb-02.jpg" class="img-fluid" alt="User Image">
											</div>
											<div class="counc-info-cont">
												<h4 class="counc-name">Elizabeth Hall</h4>
												<!-- <p class="counc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p> -->
												<p class="counc-department">Counsellor</p>
												<div class="rating">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(0)</span>
												</div>
												<div class="clinic-details">
													<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>											
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<!-- /Counsellor Widget -->
							
							<!-- Counsellor Details Tab -->
							<div class="card">
								<div class="card-body">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
											</li>								
											<li class="nav-item">
												<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
									
										<!-- Overview Content -->
										<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
											<div class="row">
												<div class="col-md-12 col-lg-9">
												
													<!-- About Details -->
													<div class="widget about-widget">
														<h4 class="widget-title">About Me</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div>
													<!-- /About Details -->
												
													<!-- Education Details -->
													<div class="widget education-widget">
														<h4 class="widget-title">Education</h4>
														<div class="experience-box">
															<ul class="experience-list">
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<a href="#/" class="name">American University</a>
																			<div>Bachelor Degree</div>
																			<span class="time">1998 - 2003</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<a href="#/" class="name">American University</a>
																			<div>Master Degree</div>
																			<span class="time">2003 - 2005</span>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<!-- /Education Details -->
											
													<!-- Experience Details -->
													<div class="widget experience-widget">
														<h4 class="widget-title">Work & Experience</h4>
														<div class="experience-box">
															<ul class="experience-list">
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<a href="#/" class="name">Glowing Smiles Family Couselling Clinic</a>
																			<span class="time">2010 - Present (5 years)</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<a href="#/" class="name">Comfort Care Couselling Clinic</a>
																			<span class="time">2007 - 2010 (3 years)</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<a href="#/" class="name">Dream Smile Couselling Practice</a>
																			<span class="time">2005 - 2007 (2 years)</span>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<!-- /Experience Details -->
										
													<!-- Awards Details -->
													<div class="widget awards-widget">
														<h4 class="widget-title">Awards</h4>
														<div class="experience-box">
															<ul class="experience-list">
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<p class="exp-year">July 2019</p>
																			<h4 class="exp-title">Humanitarian Award</h4>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<p class="exp-year">March 2011</p>
																			<h4 class="exp-title">Certificate for International Volunteer Service</h4>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<p class="exp-year">May 2008</p>
																			<h4 class="exp-title">The Couselling Professional of The Year Award</h4>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<!-- /Awards Details -->
													
													<!-- Services List -->
													<div class="service-list">
														<h4>Services</h4>
														<ul class="clearfix">
															<li>Online Counselling</li>
															<li>Numerous Services</li>
															<li>Career Counselling</li>
															<li>Direct Counselling</li>
															<li>Chronic Impulsivity</li>
															<li>Self-Esteem Issues</li>
														</ul>
													</div>
													<!-- /Services List -->
													
													<!-- Specializations List -->
													<div class="service-list">
														<h4>Specializations</h4>
														<ul class="clearfix">
															<li>Dating & Relationship</li>
															<li>Young Adult Intensive</li>	
															<li>Numerous Services</li>	
															<li>Chronic Impulsivity</li>
															<li>Online Counselling</li>	
															<li>Career Counselling</li>
														</ul>
													</div>
													<!-- /Specializations List -->

												</div>
											</div>
										</div>
										<!-- /Overview Content -->										
										
										<!-- Reviews Content -->
										<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
										
											<!-- Review Listing -->
											<div class="widget review-listing">
												<ul class="comments-list">
												
													<!-- Comment List -->
													<li>
														<div class="comment">
															<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
															<div class="comment-body">
																<div class="meta-data">
																	<span class="comment-author">Richard Wilson</span>
																	<span class="comment-date">Reviewed 2 Days ago</span>
																	<div class="review-count rating">
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star"></i>
																	</div>
																</div>
																<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the counsellor</p>
																<p class="comment-content">
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																	Ut enim ad minim veniam, quis nostrud exercitation.
																	Curabitur non nulla sit amet nisl tempus
																</p>
																<div class="comment-reply">
																	<a class="comment-btn" href="#">
																		<i class="fas fa-reply"></i> Reply
																	</a>
																<p class="recommend-btn">
																	<span>Recommend?</span>
																	<a href="#" class="like-btn">
																		<i class="far fa-thumbs-up"></i> Yes
																	</a>
																	<a href="#" class="dislike-btn">
																		<i class="far fa-thumbs-down"></i> No
																	</a>
																</p>
																</div>
															</div>
														</div>
														
														<!-- Comment Reply -->
														<ul class="comments-reply">
															<li>
																<div class="comment">
																	<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
																	<div class="comment-body">
																		<div class="meta-data">
																			<span class="comment-author">Charlene Reed</span>
																			<span class="comment-date">Reviewed 3 Days ago</span>
																			<div class="review-count rating">
																				<i class="fas fa-star filled"></i>
																				<i class="fas fa-star filled"></i>
																				<i class="fas fa-star filled"></i>
																				<i class="fas fa-star filled"></i>
																				<i class="fas fa-star"></i>
																			</div>
																		</div>
																		<p class="comment-content">
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																			Ut enim ad minim veniam.
																			Curabitur non nulla sit amet nisl tempus
																		</p>
																		<div class="comment-reply">
																			<a class="comment-btn" href="#">
																				<i class="fas fa-reply"></i> Reply
																			</a>
																			<p class="recommend-btn">
																				<span>Recommend?</span>
																				<a href="#" class="like-btn">
																					<i class="far fa-thumbs-up"></i> Yes
																				</a>
																				<a href="#" class="dislike-btn">
																					<i class="far fa-thumbs-down"></i> No
																				</a>
																			</p>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
														<!-- /Comment Reply -->
														
													</li>
													<!-- /Comment List -->
													
													<!-- Comment List -->
													<li>
														<div class="comment">
															<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
															<div class="comment-body">
																<div class="meta-data">
																	<span class="comment-author">Travis Trimble</span>
																	<span class="comment-date">Reviewed 4 Days ago</span>
																	<div class="review-count rating">
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star"></i>
																	</div>
																</div>
																<p class="comment-content">
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																	Ut enim ad minim veniam, quis nostrud exercitation.
																	Curabitur non nulla sit amet nisl tempus
																</p>
																<div class="comment-reply">
																	<a class="comment-btn" href="#">
																		<i class="fas fa-reply"></i> Reply
																	</a>
																	<p class="recommend-btn">
																		<span>Recommend?</span>
																		<a href="#" class="like-btn">
																			<i class="far fa-thumbs-up"></i> Yes
																		</a>
																		<a href="#" class="dislike-btn">
																			<i class="far fa-thumbs-down"></i> No
																		</a>
																	</p>
																</div>
															</div>
														</div>
													</li>
													<!-- /Comment List -->
													
												</ul>
												
												<!-- Show All -->
												<div class="all-feedback text-center">
													<a href="#" class="btn btn-primary btn-sm">
														Show all feedback <strong>(167)</strong>
													</a>
												</div>
												<!-- /Show All -->
												
											</div>
											<!-- /Review Listing -->
										
											<!-- Write Review -->
											<div class="write-review">
												<h4>Write a review for <strong>Elizabeth Hall</strong></h4>
												
												<!-- Write Review Form -->
												<form>
													<div class="form-group">
														<label>Review</label>
														<div class="star-rating">
															<input id="star-5" type="radio" name="rating" value="star-5">
															<label for="star-5" title="5 stars">
																<i class="active fa fa-star"></i>
															</label>
															<input id="star-4" type="radio" name="rating" value="star-4">
															<label for="star-4" title="4 stars">
																<i class="active fa fa-star"></i>
															</label>
															<input id="star-3" type="radio" name="rating" value="star-3">
															<label for="star-3" title="3 stars">
																<i class="active fa fa-star"></i>
															</label>
															<input id="star-2" type="radio" name="rating" value="star-2">
															<label for="star-2" title="2 stars">
																<i class="active fa fa-star"></i>
															</label>
															<input id="star-1" type="radio" name="rating" value="star-1">
															<label for="star-1" title="1 star">
																<i class="active fa fa-star"></i>
															</label>
														</div>
													</div>
													<div class="form-group">
														<label>Title of your review</label>
														<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
													</div>
													<div class="form-group">
														<label>Your review</label>
														<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
													
													<div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
													</div>
													<hr>
													<div class="form-group">
														<div class="terms-accept">
															<div class="custom-checkbox">
															<input type="checkbox" id="terms_accept">
															<label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
															</div>
														</div>
													</div>
													<div class="submit-section">
														<button type="submit" class="btn btn-primary submit-btn">Add Review</button>
													</div>
												</form>
												<!-- /Write Review Form -->
												
											</div>
											<!-- /Write Review -->
								
										</div>
										<!-- /Reviews Content -->
										
									
										
									</div>
								</div>
							</div>
							<!-- /Counsellor Details Tab -->
						</div>
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
			</div>
	   @endsection  