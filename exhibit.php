<style>
	#exhibitPage {
		padding-top: 80px;
		padding-bottom: 80px;
	}
	#exhibitPage .container {
		margin-bottom: 20px;
	}
	/* Exhibit Title */
	#exhibitTitleContainer .row {
		align-items: center;
	}
	#exhibitTitleContainer #exhibitLogoContainer img {
		display: block;
		width: 100%;
	}
	#exhibitTitleContainer #exhibitTaglineContainer {
		text-align: right;
		color: #008EBA;
	}
	
	/* Exhibit Info */
	#exhibitInfoContainer h3 {
		color: #008EBA;
	}
	
	/* Exhibit Social */
	#exhibitSocialRow{
		display: flex;
	}
	#exhibitSocialRow .btn {
		margin-right: 10px;
	}
	.social-link-container {
		margin: 0 5px;
		background: #008EBA;
	    padding: 10px;
	    border-radius: 100%;
	    color: #fff;
	    width: 40px;
	    text-align: center
	}
	.social-link {
		color: #FFF !important;
		font-size: 20px;
	}
	
	
	
</style>

<?php include('template-parts/header-exhibit.html'); ?>

	<!-- EXHIBIT PAGE -->
	<section id="exhibitPage">
		
		<!-- Exhbit Title -->
		<div class="container" id="exhibitTitleContainer">
			<div class="row">
				<div class="col-sm-3">
					<!-- Exhibit Logo Container -->
					<div id="exhibitLogoContainer">
						<img src="./assets/img/scout-logo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-9">
					<!-- Exhibit Tageline Container -->
					<div id="exhibitTaglineContainer">
						<h3><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit…</i></h3>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Exhbit Slideshow Container -->
		<div class="container" id="exhibitSlideshowContainer">
			<div class="row">
				<div class="col-sm-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					  	<ol class="carousel-indicators">
					    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
							<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
							<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
					  	</ol>
					  	<div class="carousel-inner">
					    	<div class="carousel-item active">
								<img src="./assets/img/home-cat-sail.jpg" class="d-block w-100" alt="...">
					    	</div>
							<div class="carousel-item">
								<img src="./assets/img/home-cat-power.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      	<img src="./assets/img/home-cat-charter.jpg" class="d-block w-100" alt="...">
						    </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
					  	</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Exhbit Info Container -->
		<div class="container" id="exhibitInfoContainer">
			<div class="row">
				<div class="col-sm-12">
					<h3>Lorem ipsum dolor sit amet</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br/>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<h3>Lorem ipsum</h3>
					<p>Lorem ipsum dolor sit amet</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
					</ul>
					<p><strong>Lorem ipsum dolor sit amet</strong></p>
					<p>
						Lorem ipsum dolor sit amet<br/>
						consectetur adipiscing elit<br/>
						Ut enim ad minim veniam
					</p>
				</div>
			</div>
		</div>
		
		<!-- Exhbit Social Container -->
		<div class="container" id="exhibitSocialContainer">
			<div class="row">
				<div class="col-sm-12">
					<div id="exhibitSocialRow">
						<a href="" class="btn btn-primary">Visit Website</a>
						
						<div class="social-link-container">
							<a href="" class="social-link"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="social-link-container">
							<a href="" class="social-link"><i class="fab fa-twitter"></i></a>
						</div>
						<div class="social-link-container">
							<a href="" class="social-link"><i class="fab fa-instagram"></i></a>
						</div>
						<div class="social-link-container">
							<a href="" class="social-link"><i class="fab fa-youtube"></i></a>
						</div>
						<div class="social-link-container">
							<a href="" class="social-link"><i class="far fa-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</section>
	
<?php include('template-parts/footer-exhibit.html'); ?>