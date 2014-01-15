/*
 *  CUSTOM.JS - Authored by Judah Nagler, 2014
 */


// Set custom jQuery var

$j = jQuery.noConflict();


// On document ready:

$j(document).ready(function() {




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




	// Set image container height and bottom padding on load

	$j(".image").load(function(){
		$j(this).height("auto").css({"padding-bottom":"0 !important"});
	});



	
	/* 
	 * 	Scroll Functions
	 */

	var winW 		= $j(window).width();
	var tablet      = 768;
	var phone       = 480;
	var currView    = 0;
	var lastView    = -1;

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

		// Fade in main content & fade out top header

		if (!isSingle && winW >= tablet){
			if (tgtOp >= maxOp){
				tgtOp  = maxOp;
			}
			if (tgtOp <= minOp){
				tgtOp  = minOp;
			}
			if (navOp <= 0){
				navOp  = 0;
			}	
			if (currView != lastView) {
				$j.stellar();
			}
			currView = 1;
		} else {
			currView = 0;
			tgtOp = navOp = hdrOp = 1;
		}

		$j(".main-content").css({"opacity":tgtOp});
		$j(".above-header h1").css({"opacity":(hdrOp)});

		lastView = currView;


		// set min top position for cherry blossoms on mobile scroll 

		/*var cba     = $j("#cb-a");
		var cbaMin  = -86;
		var cbaTop 	= parseInt(cba.position().top);

		console.log("cbaTop: "+cbaTop, "cbaMin: "+cbaMin, cbaTop <= cbaMin);

		if (isSingle && winW <= tablet){
			
			if (cbaTop <= cbaMin){
				cba.css({ "top" : cbaMin + " !important" });
			}
		}*/
	}

	onWindowScroll();


	

	/*
	 * 	Responsive: Slideshow
	 */ 

	var currThumbGroup = -1;
	var thumbGroups = ["#mq-thumbs-a", "#mq-thumbs-b", "#mq-thumbs-c"];

	// Fade out all thumb groups

	function resetThumbGroup(thmGrp){
		for (var i = 0; i < $j(thmGrp).length; i++) {
			var thm = $j($j(thmGrp)[i]);
				thm.css({ "opacity" : 0 });
		}
	}

	// Animate in next thumb group

	function showNextThumbGroup(){

		currThumbGroup++;

		var thmGrp = thumbGroups[currThumbGroup];
		 $j(thmGrp).css({"opacity":1});
		
		var thms = $j(thmGrp +" li");
		for (var i = 0; i < thms.length; i++) {
			var thm = $j($j(thms)[i]);
				thm.css({"opacity":0});
				thm.delay( 1000 + (i * 100) ).animate({ "opacity" : 1 }, 500);
		}
	}

	// Run Slideshow

	function responsiveSlideshow(){
		resetThumbGroup("#mq-thumbs-a");
		resetThumbGroup("#mq-thumbs-b");
		resetThumbGroup("#mq-thumbs-c");

		showNextThumbGroup();
	}

	// If single-repsonsive page, run slideshow

	if ($j("body").hasClass("single-responsive")){
		responsiveSlideshow();
	}




	/*
	 * 	Bind window scroll function to 'scroll' and 'resize'
	 */
	
	$j(window).bind("scroll", onWindowScroll);
	$j(window).bind("resize", onWindowScroll);





	/*
	 * 	Stellar.js
	 */ 

	$j.stellar({
		hideDistantElements: false
	});





	/*
	 * 	Auto Scroll
	 */

	/*var i = -1;
	window.setInterval(function(){
		i++;
		$j(window).scrollTop(i);
	}, 1);*/

	// intro animation

	/*function introAnimation() {
		// fade in elements
	}*/
});
