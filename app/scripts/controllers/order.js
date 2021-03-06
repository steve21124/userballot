'use strict';

userballotApp.controller('OrderCtrl', function($scope, $location, $http, $routeParams, angularFire, angularFireAuth, userballotAuthSvc) {
	$scope.formData = {};
	$scope.generalError = null;
	$scope.submitting = false;

	var APP_DOMAIN = window.location.hostname;
	var FIREBASE_DOMAIN;
	alert($scope.user.email);
	
	// Set the Stripe API key. Stripe library is included in the template
	switch(APP_DOMAIN){
		case 'app.userballot.com':
			// Set production Stripe key
			Stripe.setPublishableKey('pk_live_YFL2ah0sPFrgonpwoIHqd4VB');
		break;
		default:
			// Set test Stripe key for staging
			Stripe.setPublishableKey('pk_test_XXkWU5p7DzBrBqIAqOIjtEzL');
		break;
	}

	// Define the response handler for Stripe
	var stripeResponseHandler = function(status, response) {
		var $form = $('#order-form');

		if (response.error) {
			// Show the errors on the form
			$scope.generalError = response.error.message;
			$scope.submitting = false;
		} else {
			$scope.generalError = "";
			// token contains id, last4, and card type
			var token = response.id;
			// Insert the token into the form so it gets submitted to the server
			$scope.formData.stripeToken = token;
			$scope.formData.plan = $routeParams.plan;
			$scope.formData.email = user.email;
			
			// Submit the form the order processor
			$http({
				method  : 'POST',
				url     : 'order.php',
				data    : $.param($scope.formData),  // pass in data as strings
				headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			})
			.success(function(data) {
				// Yay, we've saved our token and set up the subscription. If the user is authenticated, associated the
				// plan ID in firebase. Otherwise, we need to create a new account and associate the plan ID.
				alert(data);
				console.log(data);
				if (data.success) {
					alert("Hooray! The order has gone through");
				} else {
					$scope.generalError = data.error;
					$scope.submitting = false;
				}
			});
		}
		$scope.$apply();
	};

	// process a new order
	$scope.placeOrder = function() {
		var form = document.getElementById("order-form");

		// Disable the submit button to prevent repeated clicks
		$scope.submitting = true;

		Stripe.card.createToken(form, stripeResponseHandler);

		// Prevent the form from submitting with the default action
		return false;
	}

});

