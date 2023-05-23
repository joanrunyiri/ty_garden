<!DOCTYPE html>
<html lang="en">
<?php 
include ('header.php'); 
include('connect.php');
?>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/5.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
				<h1 class="mb-2">From Ordinary to Extraordinary Gardens</h1>

	              <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> -->
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
				<h1 class="mb-2">Your Dream Garden Awaits </h1>
	              <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> -->
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style=" background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Categories</h2>
										<p>Protect the health of every garden</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/seeds.webp);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Seeds</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/merch.webp);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Merch</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/salve.webp);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Salves</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/plant.webp);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Live Plants</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Protect the health of every garden</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
		<div class="row">

		<?php

// Assuming you have a database connection established

// Perform a query to retrieve data
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Loop through the results
while ($row = mysqli_fetch_assoc($result)) {
    // Your existing HTML code here, using the $row variable
    echo '

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
					<a href="product.php?id=' . $row["id"] . '" class="img-prod"><img class="img-fluid" src="' . $row["image"] . '" alt="Colorlib Template">    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href=="product.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$' . $row["price"] . '</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>'
				;
}

// Don't forget to close the database connection when you're done
$conn->close();
?>



    		</div>

    	</div>
		<!-- TIKTOKS -->
		<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Grow with Ty:</span>
        <h2 class="mb-4">TikTok Tales from the Garden</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <!-- <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)"> -->
              <span class="quote d-flex align-items-center justify-content-center">
              </span>
              <!-- </div> -->
              <div class="text text-center">
				<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@tythegardenguy/video/7179622164033981742" data-video-id="7179622164033981742" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@tythegardenguy" href="https://www.tiktok.com/@tythegardenguy?refer=embed">@tythegardenguy</a> Replying to @thefitfoodiegardener <a target="_blank" title="♬ Pretty Girl Era - LU KALA" href="https://www.tiktok.com/music/Pretty-Girl-Era-7127800191360551686?refer=embed">♬ Pretty Girl Era - LU KALA</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>					
                <!-- <span class="position">Marketing Manager</span> -->
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <!-- <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)"> -->
              <span class="quote d-flex align-items-center justify-content-center">
              </span>
              <!-- </div> -->
              <div class="text text-center">
			  <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@tythegardenguy/video/7178557653344374058" data-video-id="7178557653344374058" style="max-width: 605px;min-width: 325px;" >
			   <section> <a target="_blank" title="@tythegardenguy" href="https://www.tiktok.com/@tythegardenguy?refer=embed">@tythegardenguy</a> 🐩 or 🐈  let me know in the comments which is better and why <a title="strudelthegoldendoodle" target="_blank" href="https://www.tiktok.com/tag/strudelthegoldendoodle?refer=embed">#strudelthegoldendoodle</a> <a title="sorrelsoup" target="_blank" href="https://www.tiktok.com/tag/sorrelsoup?refer=embed">#sorrelsoup</a> <a title="chickenlife🐓" target="_blank" href="https://www.tiktok.com/tag/chickenlife%F0%9F%90%93?refer=embed">#chickenlife🐓</a> <a target="_blank" title="♬ Thunder Sound - Tmsoft&#39;s White Noise Sleep Sounds" href="https://www.tiktok.com/music/Thunder-Sound-6755226794120448002?refer=embed">♬ Thunder Sound - Tmsoft&#39;s White Noise Sleep Sounds</a> 
			</section> 
		</blockquote>
		 <script async src="https://www.tiktok.com/embed.js"></script>
				</div>                
                <!-- <span class="position">Interface Designer</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- </section>
		
		<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Deal of the day</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <h3><a href="#">Spinach</a></h3>
            <span class="price">$10 <a href="#">now $5 only</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
          </div>
        </div>   		
    	</div>
    </section> -->

	<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Our satisfied customer says</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <!-- <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)"> -->
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <!-- </div> -->
              <div class="text text-center">
                <p class="mb-5 pl-4 line">"Ty the Garden Guy has completely transformed my garden. I was struggling to keep anything alive, but with his help, I now have a thriving and beautiful space that provides me with fresh food all season long. I highly recommend his services to anyone looking to create a sustainable and productive garden."</p>
                <p class="name">Jane D</p>
                <!-- <span class="position">Marketing Manager</span> -->
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <!-- <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)"> -->
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <!-- </div> -->
              <div class="text text-center">
                <p class="mb-5 pl-4 line">"I was skeptical at first, but working with Ty has been a game-changer. His knowledge and expertise have helped me create a garden that is not only beautiful, but also produces an abundance of fresh fruits and vegetables. The results have been amazing, and I can't thank him enough for all his help."</p>
                <p class="name">Tom S.</p>
                <!-- <span class="position">Interface Designer</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <hr>

		<!-- <section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section> -->

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="subscriptions.php" class="subscribe-form" method="POST">
              <div class="form-group d-flex">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php
include('footer.php')
?>    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>