<!-- Start Header -->

<?php include 'header.php' ?>
			
			<div role="main" class="main" id="home">
				
				<section class="section section-primary mt-none" id="projects">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><strong>اعلانات مسبقة</strong></h2>
								<?php for ($i=0; $i < 5; $i++) { ?>
								<div class="portfolio-item col-sm-6 " style="margin-bottom: 20px;">
									<a href="single.php">
										<span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
											<span class="thumb-info-wrapper">
												<img src="img/slide_3.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">العنوان</span>
												</span>
												<span class="thumb-info-description">
													هذا النص تجريبى لاختبار شكل وحجم النصوص 
												</span>
												<span class="thumb-info-phone">
													010000000000
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
				

				<div class="container" id="adds">
					<div class="row mb-xl">
						<div class="col-md-12 center">
							<div class="portfolio-item">
								<a href="#add" class="hidden-xs">
									<button class="btn btn-primary btn-lg pull-left">
										اتصل بنا
									</button>
								</a>
							</div>
							<a href="tel:+15555555555">
								<button class="btn btn-primary btn-lg pull-right app-link">
									 اتصل بنا 
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>

			
<!-- Start footer -->

<?php include 'footer.php' ?>