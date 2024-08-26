<?php $page="map-list";?>
@extends('layout.mainlayout')
@section('content')		
<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

	            <div class="row">
					<div class="col-xl-7 col-lg-12 order-md-last order-sm-last order-last map-left">
				
						<div class="row align-items-center mb-4">
							<div class="col-md-6 col">
								<h4>2245 Counsellors found</h4>
							</div>

							<div class="col-md-6 col-auto">
								<div class="view-icons">
									<a href="map-grid" class="grid-view"><i class="fas fa-th-large"></i></a>
									<a href="map-list" class="list-view active"><i class="fas fa-bars"></i></a>
								</div>
								<div class="sort-by d-sm-block d-none">
									<span class="sortby-fliter">
										<select class="select">
											<option>Sort by</option>
											<option class="sorting">Rating</option>
											<option class="sorting">Popular</option>
											<option class="sorting">Latest</option>
											<option class="sorting">Free</option>
										</select>
									</span>
								</div>
							</div>
						</div>

						<!-- Counsellor Widget -->
						<div class="card">
							<div class="card-body">
								<div class="counsellor-widget">
									<div class="counc-info-left">
										<div class="counsellor-img">
											<a href="councellor-profile">
												<img src="assets/img/counsellors/counsellor-thumb-01.jpg" class="img-fluid" alt="User Image">
											</a>
										</div>
										<div class="counc-info-cont">
											<h4 class="counc-name"><a href="councellor-profile">Ruby Perrin</a></h4>
											<p class="counc-speciality">Masters Degree</p>
											<h5 class="counc-department">Counsellor</h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(17)</span>
											</div>
											<div class="clinic-details">
												<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
												<ul class="clinic-gallery">
													<li>
														<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-01.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
															<img  src="assets/img/features/feature-02.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-03.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-04.jpg" alt="Feature">
														</a>
													</li>
												</ul>
											</div>
											<div class="clinic-services">
												<span>Online Councelling</span>
												<span> Impulsivity</span>
											</div>
										</div>
									</div>
									<div class="counc-info-right">
										<div class="clini-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> 98%</li>
												<li><i class="far fa-comment"></i> 17 Feedback</li>
												<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
												<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
											</ul>
										</div>
										<div class="clinic-booking">
											<a class="view-pro-btn" href="councellor-profile">View Profile</a>
											<a class="apt-btn" href="booking">Book Appointment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Counsellor Widget -->

						<!-- Counsellor Widget -->
						<div class="card">
							<div class="card-body">
								<div class="counsellor-widget">
									<div class="counc-info-left">
										<div class="counsellor-img">
											<a href="councellor-profile">
												<img src="assets/img/counsellors/counsellor-thumb-02.jpg" class="img-fluid" alt="User Image">
											</a>
										</div>
										<div class="counc-info-cont">
											<h4 class="counc-name"><a href="councellor-profile">Darren Elder</a></h4>
											<p class="counc-speciality">Bachelors Degree</p>
											<h5 class="counc-department">Counsellor</h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(35)</span>
											</div>
											<div class="clinic-details">
												<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
												<ul class="clinic-gallery">
													<li>
														<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-01.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
															<img  src="assets/img/features/feature-02.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-03.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-04.jpg" alt="Feature">
														</a>
													</li>
												</ul>
											</div>
											<div class="clinic-services">
												<span>Online Councelling</span>
												<span> Impulsivity</span>
											</div>
										</div>
									</div>
									<div class="counc-info-right">
										<div class="clini-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> 100%</li>
												<li><i class="far fa-comment"></i> 35 Feedback</li>
												<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
												<li><i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
											</ul>
										</div>
										<div class="clinic-booking">
											<a class="view-pro-btn" href="councellor-profile">View Profile</a>
											<a class="apt-btn" href="booking">Book Appointment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Counsellor Widget -->

						<!-- Counsellor Widget -->
						<div class="card">
							<div class="card-body">
								<div class="counsellor-widget">
									<div class="counc-info-left">
										<div class="counsellor-img">
											<a href="councellor-profile">
												<img src="assets/img/counsellors/counsellor-thumb-03.jpg" class="img-fluid" alt="User Image">
											</a>
										</div>
										<div class="counc-info-cont">
											<h4 class="counc-name"><a href="councellor-profile">Deborah Angel</a></h4>
											<p class="counc-speciality">Masters Degree</p>
											<p class="counc-department">Counsellor</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(27)</span>
											</div>
											<div class="clinic-details">
												<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
												<ul class="clinic-gallery">
													<li>
														<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-01.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
															<img  src="assets/img/features/feature-02.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-03.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-04.jpg" alt="Feature">
														</a>
													</li>
												</ul>
											</div>
											<div class="clinic-services">
												<span>Online Councelling</span>
												<span> Impulsivity</span>
											</div>
										</div>
									</div>
									<div class="counc-info-right">
										<div class="clini-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> 99%</li>
												<li><i class="far fa-comment"></i> 35 Feedback</li>
												<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
												<li><i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
											</ul>
										</div>
										<div class="clinic-booking">
											<a class="view-pro-btn" href="councellor-profile">View Profile</a>
											<a class="apt-btn" href="booking">Book Appointment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Counsellor Widget -->

						<!-- Counsellor Widget -->
						<div class="card">
							<div class="card-body">
								<div class="counsellor-widget">
									<div class="counc-info-left">
										<div class="counsellor-img">
											<a href="councellor-profile">
												<img src="assets/img/counsellors/counsellor-thumb-04.jpg" class="img-fluid" alt="User Image">
											</a>
										</div>
										<div class="counc-info-cont">
											<h4 class="counc-name"><a href="councellor-profile">Sofia Brient</a></h4>
											<p class="counc-speciality">Bachelors Degree</p>
											<p class="counc-department">Counsellor</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4)</span>
											</div>
											<div class="clinic-details">
												<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Louisiana, USA</p>
												<ul class="clinic-gallery">
													<li>
														<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-01.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
															<img  src="assets/img/features/feature-02.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-03.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-04.jpg" alt="Feature">
														</a>
													</li>
												</ul>
											</div>
											<div class="clinic-services">
												<span>Online Councelling</span>
												<span> Impulsivity</span>
											</div>
										</div>
									</div>
									<div class="counc-info-right">
										<div class="clini-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> 97%</li>
												<li><i class="far fa-comment"></i> 4 Feedback</li>
												<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
												<li><i class="far fa-money-bill-alt"></i> $150 - $250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
											</ul>
										</div>
										<div class="clinic-booking">
											<a class="view-pro-btn" href="councellor-profile">View Profile</a>
											<a class="apt-btn" href="booking">Book Appointment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Counsellor Widget -->

						<!-- Counsellor Widget -->
						<div class="card">
							<div class="card-body">
								<div class="counsellor-widget">
									<div class="counc-info-left">
										<div class="counsellor-img">
											<a href="councellor-profile">
												<img src="assets/img/counsellors/counsellor-thumb-06.jpg" class="img-fluid" alt="User Image">
											</a>
										</div>
										<div class="counc-info-cont">
											<h4 class="counc-name"><a href="councellor-profile">Katharine Berthold</a></h4>
											<p class="counc-speciality">Masters Degree</p>
											<p class="counc-department">Counsellor</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(52)</span>
											</div>
											<div class="clinic-details">
												<p class="counc-location"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
												<ul class="clinic-gallery">
													<li>
														<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-01.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
															<img  src="assets/img/features/feature-02.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-03.jpg" alt="Feature">
														</a>
													</li>
													<li>
														<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
															<img src="assets/img/features/feature-04.jpg" alt="Feature">
														</a>
													</li>
												</ul>
											</div>
											<div class="clinic-services">
												<span>Online Councelling</span>
												<span> Impulsivity</span>
											</div>
										</div>
									</div>
									<div class="counc-info-right">
										<div class="clini-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> 100%</li>
												<li><i class="far fa-comment"></i> 52 Feedback</li>
												<li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
												<li><i class="far fa-money-bill-alt"></i> $100 - $500 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
											</ul>
										</div>
										<div class="clinic-booking">
											<a class="view-pro-btn" href="councellor-profile">View Profile</a>
											<a class="apt-btn" href="booking">Book Appointment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Counsellor Widget -->
							
					<div class="load-more text-center">
						<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>	
					</div>
	            </div>
	            <!-- /content-left-->
	            <div class="col-xl-5 col-lg-12 map-right">
	                <div id="map" class="map-listing"></div>
	                <!-- map-->
	            </div>
	            <!-- /map-right-->
	        </div>
	        <!-- /row-->
	   
				</div>

			</div>		
			<!-- /Page Content -->
			</div>
	   @endsection
	  