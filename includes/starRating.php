<?php
	function generateStarRating($rating) {
	    
		$rating_stars = '';

	    for ($i = 1; $i <= 5; $i++) {

	        if ($rating >= $i) {
	        	$rating_stars .= '<span class="fa fa-star checked"></span>';
	        } 
	        else {
	        	$rating_stars .= '<span class="fa fa-star"></span>';
	        }
	    }

	    return $rating_stars;

	}
?>