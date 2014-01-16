/*
 *  CUSTOM.JS - Authored by Judah Nagler, 2014
 */


// Set custom jQuery var

$j = jQuery.noConflict();


// On document ready:

$j(document).ready(function() {

	

	/*
	 *	Navigation
	 */
	
	// Set active nav item for single posts based on URL

	var pathname        = window.location.pathname;
	var nav_about       = $j("#menu-item-130");
	var nav_blog        = $j("#menu-item-359");
	var nav_responsive  = $j("#menu-item-360");
	var nav_interactive = $j("#menu-item-160");
	var nav_design      = $j("#menu-item-135");
	var nav_contact  	= $j("#menu-item-145");
	
	if (pathname.indexOf("about") >= 0) {
		nav_about.addClass("active");
	}
	if (pathname.indexOf("blog") >= 0) {
		nav_blog.addClass("active");
	}
	if (pathname.indexOf("responsive") >= 0) {
		nav_responsive.addClass("active");
	}
	if (pathname.indexOf("interactive") >= 0) {
		nav_interactive.addClass("active");
	}
	if (pathname.indexOf("design") >= 0) {
		nav_design.addClass("active");
	}
	if (pathname.indexOf("contact") >= 0) {
		nav_contact.addClass("active");
	}



	/*
	 *	Image Padding
	 */

	// Set image container height and bottom padding on load

	$j(".image").load(function(){
		$j(this).height("auto").css({"padding-bottom":"0 !important"});
	});


	
	/* 
	 * 	Window Scroll
	 */

	var winW 		= $j(window).width();
	var tablet      = 768;
	var phone       = 480;
	var currView    = 0;
	var prevView    = -1;

	// On window scroll, update certain properties for UI elements

	function onWindowScroll() {
		var scroll      = $j(window).scrollTop();
		var isSingle	= $j("body").hasClass("single");
		var offsetTop   = 350;
		var minOp       = 0;
		var maxOp       = 1;
		var tgtOp		= (scroll / offsetTop);	
		var navOp		= tgtOp * 4;		
		var hdrOp 		= ((offsetTop * 0.618) - scroll) / 100;

		// Get window width
		winW = $j(window).width();

		// If not 'single' page and above 'tablet' breakpoint
		if (!isSingle && winW >= tablet){

			// Set target opacity for header and main-content
			if (tgtOp >= maxOp){
				tgtOp  = maxOp;
			}
			if (tgtOp <= minOp){
				tgtOp  = minOp;
			}	

			// Set current view
			currView = 1;

		} else {
			// Set opacity on all target elements to 1
			tgtOp = navOp = hdrOp = 1;

			// Set current view
			currView = 0;
		}

		// Apply target opacities to elements
		$j(".main-content").css({"opacity":tgtOp});
		$j(".above-header h1").css({"opacity":(hdrOp)});

		// Set previous view
		prevView = currView;
	}

	// Init Window Scroll
	onWindowScroll();


	
	/*
	 * 	Responsive Slideshow
	 */ 

	function responsiveSlideshow(){

		// If current page is not 'single-responsive', go no further

		if (!$j("body").hasClass("single-responsive")) return;

		// Vars

        var current         = -1;
        var thumbGroups     = [];
        var min             = 0;
        var max             = 0;

		var _timer;
        var _time           = 6000;
        var _delayOffset    = 150;

        // Init: Fade out all thumb groups and move to back

		function init() {

			// If thumb group exists, add it to array
			if ($j("#mq-thumbs-a").length) thumbGroups.push("#mq-thumbs-a");
			if ($j("#mq-thumbs-b").length) thumbGroups.push("#mq-thumbs-b");
			if ($j("#mq-thumbs-c").length) thumbGroups.push("#mq-thumbs-c");

			// Set max number of thumb groups
			max = thumbGroups.length - 1;

			// If only one thumb group, go no further
			if (max <= 0) return;

			for (var i = 0; i < thumbGroups.length; i++) {
				$j(thumbGroups[i]).css({"opacity":0, "z-index":-1});
			}
			showNext();
		}

		// Return previous group's array index

		function prev(){
			var prev = current - 1;
			if (prev < min) prev = max;
			return prev;
		}

		// Start slideshow timer

		function startTimer() {
			_timer = setTimeout( function(){
				showNext();
			}, _time);
		}

		// Fade in next set of thumbs

		function showNext(){

			// Set current var, reset if beyond scope of array
				current++;
			if (current >= thumbGroups.length) 
				current = 0;

			// Set vars for current and previous groups
			var curGrp = thumbGroups[current];
			var prvGrp = thumbGroups[prev()];

			// Target list elements in thumb group
			var thms = $j(curGrp +" li");

			// Fade in list elements (thumbs)
			for (var i = 0; i < thms.length; i++) {

				var _animTime = 500;
				var _animType = "easeInOutQuad";

				// Set delay time
				var _delay = (i * 100);

				// Set target thumb
				var thm = $j($j(thms)[i]);

				// Fade in thumb with delay
				thm.css({"opacity":0}).delay(i * _delayOffset).animate({ "opacity" : 1}, _animTime, _animType);
			}	
				
			// Fade out previous group
			if (prvGrp) $j(prvGrp).css({"z-index":-1}).animate({"opacity":0}, 900);
			
			// Fade in current group and bring to front
			$j(curGrp).css({"opacity":1, "z-index":1});

			// Start timer
			startTimer();
		}

		// Init sequence
		init();
	}

	// Init Responsive Slideshow
	responsiveSlideshow();



	/*
	 * 	Window Event Bindings
	 */
	
	$j(window).bind("scroll", onWindowScroll);
	$j(window).bind("resize", onWindowScroll);



	/*
	 *  Stellar.js
	 */ 

	// Init Stellar

	$j.stellar({
		hideDistantElements: false
	});


});
