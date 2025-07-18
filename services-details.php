	<?php
	include("header/header.php");
	include("include/db.php");
	error_reporting(0);

	$getPrdid = $_GET['product'];

	?>

    <body>

		<!-- Start Preloader Area -->
		<div class="loader-wrapper">
			<div class="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!-- End Preloader Area -->

		<?php
				
			$getallPrd = mysqli_query($conn, "SELECT * FROM `products` WHERE `id` = '$getPrdid'");
			$All_Prd = mysqli_num_rows($getallPrd);

			if($All_Prd > 0){

				$row_all_prd = mysqli_fetch_assoc($getallPrd);

					$prd_id_all       = $row_all_prd['id'];
					$prd_image_all        = $row_all_prd['image'];
					$prd_header			  = $row_all_prd['header'];
					$prd_paragraph_all    = $row_all_prd['paragraph'];
			}
		
		?>

		<!-- Start Page Title Area -->
		<div class="page-title-area bg-23">
			<div class="container">
				<div class="page-title-content">
					<h2>Services Details</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li>Services</li>
						<li class="active">Services Details</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
		
		<!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
				<div class="col-lg-8 col-md-12">
						<div class="services-details">
							<h3><?php echo $prd_header;?></h3>

							<img src="assets/img/solution-img/<?php echo $prd_image_all;?>" width="100%" alt="Image">

							<p><?php echo $prd_paragraph_all;?></p>

							<div class="choose-wrap">
								<h2>Why Choose Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
			
								<ul>
									<li>
										<i class="bx bx-check"></i>
										Extemly low response  time at all time
									</li>
									<li>
										<i class="bx bx-check"></i>
										We are always ready for your growth
									</li>
									<li>
										<i class="bx bx-check"></i>
										We understand security and compliance
									</li>
								</ul>
							</div><br><br>

							<h3>Cloud Security</h3>

							<img src="assets/img/services-details/2.jpg" alt="Image">

							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet comes from a line in section 1.10.32.</p>

							<!-- <h3 class="services-related-post">Related Post</h3> -->
							<!-- <div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="single-solutions solutions-time-bg-8 mb-0 mb-ud">
										<div class="solutions-content">
											<h3>Secure Managed IT</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorer</p>
											<a href="services-details.html" class="read-more">
												Read More
											</a>
										</div>
									</div>
								</div>
			
								<div class="col-lg-6 col-sm-6">
									<div class="single-solutions solutions-time-bg-2 mb-0">
										<div class="solutions-content">
											<h3>Compliance</h3>
											<p>Lorem ipsum dolor sit amet sed, consectetur adipiscing elit do</p>
											<a href="services-details.html" class="read-more">
												Read More
											</a>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>

					<div class="col-lg-4 col-md-12">
						<aside class="widget-area" id="secondary">
							<div class="widget widget_search">
								<h3 class="widget-title">Search Now</h3>
								<div class="post-wrap">
									<form class="search-form">
										<label>
											<span class="screen-reader-text">Search for:</span>
											<input type="search" class="search-field" placeholder="Search...">
										</label>
										<button type="submit"><i class='bx bx-search'></i></button>
									</form>
								</div>
							</div>
							
							<section class="widget widget_categories">
								<h3 class="widget-title">Categories</h3>
								<div class="post-wrap">
									<ul>
										<li>
											<a href="#">Blockchain <span>(10)</span></a>
										</li>
										<li>
											<a href="#">Cyber security <span>(20)</span></a>
										</li>
										<li>
											<a href="#">Cybercrime <span>(10)</span></a>
										</li>
										<li>
											<a href="#">Global news <span>(12)</span></a>
										</li>
										<li>
											<a href="#">Ransomware <span>(16)</span></a>
										</li>
										<li>
											<a href="#">Whitepapers <span>(17)</span></a>
										</li>
									</ul>
								</div>
							</section>

							<section class="widget widget_tag_cloud">
								<h3 class="widget-title">Tags</h3>
								<div class="post-wrap">
									<div class="tagcloud">
										<a href="#">Blockchain (3)</a>
										<a href="#">Cyber security (3)</a>
										<a href="#">Cybercrime (2)</a>
										<a href="#">Global news (2)</a>
										<a href="#">Ransomware (1)</a>
										<a href="#">Whitepapers (2) </a>
									</div>
								</div>
							</section>       
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Details Area -->

		<?php
			include("footer/footer.php");
		?>
	
    </body>
</html>