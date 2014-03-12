/*
 *  CUSTOM.JS - JS authored by Judah Nagler, 2014
 */


// Set custom jQuery var

$j = jQuery.noConflict();


// On document ready:

$j(document).ready(function() {

	/*
	 *	Navigation
	 */
	
	// Set active nav item based on URL

	function setActiveNav() {
		var navItems    = $j("#main-menu li");
		var pathname    = String(window.location.pathname);

		// Cycle thru nav items

		for (var i = 0; i < navItems.length; i++) {

			// Get item name
			var itemName = String($j(navItems[i]).children()[0].innerHTML.toLowerCase());

			// If item name contains path name, add 'active' claSS
			if (pathname.indexOf(itemName) === 1) {
				$j(navItems[i]).addClass("active");
			}
		}
	}

	setActiveNav();



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
		var isSearch	= $j("body").hasClass("search");
		var minOp       = 0;
		var maxOp       = 1;
		var mainOffset  = 391;
		var h1_Offset   = 666;
		var h1_Op 		= ((h1_Offset * 0.618) - scroll) / 200;
		var tgtOp		= (scroll / mainOffset);	

		// Get window width
		winW = $j(window).width();

		// If not 'single' page and above 'tablet' breakpoint
		if (!isSingle && !isSearch && winW >= tablet){

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
			tgtOp = navOp = h1_Op = 1;

			// Set current view
			currView = 0;
		}


		// If not search page or mobile view, init Stellar parallax fx

		if (!isSearch && winW >= tablet) {
			$j.stellar({
				hideDistantElements: false
			});
		}

		// Apply target opacities to elements
		$j(".above-header h1").css({"opacity":h1_Op});
		   $j(".main-content").css({"opacity":tgtOp});
				 $j("#footer").css({"opacity":tgtOp});

		// Set previous view
		prevView = currView;

		if (scroll > 1){
			scrollDownStop();
		}
	}

	// Init Window Scroll

	onWindowScroll();




	/*
	 * 	Scroll Down Teaser
	 */

	var _scrollDown  		= $j("#scroll-down");
	var _scrollDownTime 	= 300;
	var _scrollState		= 0;

	function scrollDownIn() {
		$j(_scrollDown).delay(1500).animate({"bottom":"20px"}, _scrollDownTime, "easeOutQuad", scrollDownOut);
	}
	function scrollDownOut() {
		$j(_scrollDown).animate({"bottom":"0px"}, _scrollDownTime * 3, "easeOutBounce", scrollDownIn);
	}
	function scrollDownStop() {
		if (_scrollState == 1) return;
		$j(_scrollDown).stop().animate({"opacity":0}, _scrollDownTime, "easeOutQuad", function(){
			_scrollDown.remove();
		});
		_scrollState = 1;
	}
	// scrollDownIn();

	
	/*
	 * 	Developer Slideshow
	 */ 

	function developerSlideshow(){

		// If current page is not 'single-developer', go no further

		if (!$j("body").hasClass("single-developer")) return;

		// Vars

		var current         = -1;
		var thumbGroups     = [];
		var min             = 0;
		var max             = 0;

		var _timer;
		var _time           = 6000;
		var _delayOffset    = 210;
		var _animTime   	= 1000;
		var _animType   	= "easeInOutQuad";

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

				// Set target thumb
				var thm = $j($j(thms)[i]);

				// Fade in thumb with delay
				thm.css({"opacity":0}).delay(i * _delayOffset).animate({ "opacity" : 1}, _animTime, _animType);
			}	
				
			// Fade out previous group
			if (prvGrp) $j(prvGrp).css({"z-index":-1}).delay(_animTime * 2).animate({"opacity":0}, 900);
			
			// Fade in current group and bring to front
			$j(curGrp).css({"opacity":1, "z-index":1});

			// Start timer
			startTimer();
		}

		// Init sequence
		init();
	}

	// Init Responsive Slideshow

	developerSlideshow();



	/*
	 * 	Window Event Bindings
	 */
	
	$j(window).bind("scroll", onWindowScroll);
	$j(window).bind("resize", onWindowScroll);


});
