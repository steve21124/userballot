<?php
	include('inc/environment.php');
?>
<!DOCTYPE html>
<html>
	<head>
		 <!-- Basic Page Needs
	    ================================================== -->
    	<meta charset="utf-8">
	    <title>UserBallot</title>
    	<meta name="description" content="">
    	<meta name="author" content="">

	    <?php
    	    include('inc/head.php');
	    ?>
	</head>
	<body class="page">
		<?php
        	include('inc/topnav.php');
    	?>
		<div class="page-wrap">        
		    <div class="masthead">
	            <div class="twelve columns alpha">
	                <div class="page-title">
	                    <h1>Plans and Pricing</h1>
	                </div>
	            </div>
	        </div>      
	        <h1 style="text-align: center;">So now you're curious...how much of a dent will this make to buy?</h1>
	        <p style="text-align: center; font-weight: bold;">Here's the good news.</p>
	        <br>
	        <div class="container pricing-container">
	        	<div class="pricing pricing-border">
	        		<h1>Trial</h1>
	        		<p>Try Us <strong>Free!</strong></p>
	        		<br>
	        		<h1>FREE</h1>
	        		<br><br>
	        		<p><strong>500</strong> Responses</p>
	        		<br>
	        		<p style="text-decoration: underline;">Question Analytics Included</p>
	        		<br><br>
	        		<a style="" class="buy-btn" plan="trial">Try Us Out</a>
	        	</div>
	        	<div class="pricing pricing-border">
	        		<h1>Entry</h1>
	        		<p>Most Affordable!</p>
	        		<br>
	        		<h1>$7</h1>
	        		<p>per month</p>
	        		<br>
	        		<p><strong>2,500</strong> Responses Monthly</p>
	        		<br>
	        		<p style="text-decoration: underline;">Question Analytics Included</p>
	        		<br><br>
	        		<a style="" class="buy-btn" plan="entry">Let's Rock</a>
	        	</div>
	        	<div class="pricing pricing-border">
	        		<h1>Standard</h1>
	        		<p>Double the Responses!</p>
	        		<br>
	        		<h1 style="color: #2ecc71">$10</h1>
	        		<p>per month</p>
	        		<br>
	        		<p><strong>5,000</strong> Responses Monthly</p>
	        		<br>
	        		<p style="text-decoration: underline;">Question Analytics Included</p>
	        		<br><br>
	        		<a style="" class="buy-btn" plan="standard">Time to Roll</a>
	        	</div>
	        	<div class="pricing">
	        		<h1>Deluxe</h1>
	        		<p>Best Value!</p>
	        		<br>
	        		<h1>$25</h1>
	        		<p>per month</p>
	        		<br>
	        		<p><strong>25,000</strong> Responses Monthly</p>
	        		<br>
	        		<p style="text-decoration: underline;">Question Analytics Included</p>
	        		<br><br>
	        		<a style="" class="buy-btn" plan="delux" >Super Size Me</a>
	        	</div>
	        </div>
	        <br><br><br>
	        <p style="text-align: center;">For high volume and custom orders, contact us at <strong>info@userballot.com</strong>.</p>
		    <!-- <div class="container">
	        	<ul  style="width: 500px">
	        		<li>
	        			<h2>Price plan 1</h2>
	        			<button style="float:right" plan="test-plan-1" type="button" class="plan-button topcoat-button--large--cta">Order Now</button>
	        			<p>Features</p>
	        			<ul>
							<li>This and that</li>
							<li>The other thing</li>
						</ul>
      				</li>
	        		<li>
	        			<h2>Price plan 2</h2>
	        			<button style="float:right" plan="test-plan-2" type="button" class="plan-button topcoat-button--large--cta">Order Now</button>
	        			<p>Features</p>
	        			<ul>
							<li>More good stuff</li>
							<li>The kitchen sink</li>
						</ul>
						
      				</li>

	        	</ul>
	   		</div> -->
	   		<input type="hidden" id="app-url" value="<?php echo UB_APP_DOMAIN?>">
    	</div>
    <div class="footer" style="position: absolute !important">
	            &copy;UserBallot.com
	</div>
	</body>
</html>