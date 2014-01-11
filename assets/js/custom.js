/*
 *  CUSTOM JAVASCRIPT
 */

$j=jQuery.noConflict();

// Set active nav item for single posts based on URL
$j(document).ready(function() {
	var pathname        = window.location.pathname;
	var nav_about       = $j("#menu-item-130");
	var nav_blog        = $j("#menu-item-97");
	var nav_responsive  = $j("#menu-item-143");
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

	$j(".image").load(function(){
		$j(this).height("auto").css({"padding-bottom":"0 !important"});
	});
	
	// init stellar

	$j.stellar();

	// scroll opacity

	var currView = 0;
    var lastView = 0;

	function onWindowScroll() {
        var scroll      = $j(window).scrollTop();
        var offsetTop   = 350;
        var minOp       = 0;
        var maxOp       = 1;
        var tgtOp		= (scroll / offsetTop);	
        var navOp		= tgtOp * 4;		
        var hdrOp 		= ((offsetTop * 0.618) - scroll) / 100;

        var isSingle	= $j("body").hasClass("single");



        // fade in main content

        if ($j(window).width() >= 768 && !isSingle){
        	if (tgtOp >= maxOp){
	            tgtOp  = maxOp;
	        }
	        if (tgtOp <= minOp){
	            tgtOp  = minOp;
	        }
	        if (navOp <= 0){
	            navOp  = 0;
	        }	
	        currView = 1;
        } else {
        	tgtOp = navOp = hdrOp = 1;
        	currView = 0;
        }

        $j(".main-content").css({"opacity":tgtOp});
        $j(".above-header h1").css({"opacity":(hdrOp)});

        if (currView != lastView) {
        	$j.stellar();
        }
        lastView = currView;
    }

	$j(window).bind("scroll", onWindowScroll);
	$j(window).bind("resize", onWindowScroll);
	onWindowScroll();


	// auto scroll

	/*var i = -1;
	window.setInterval(function(){
		i++;
		$j(window).scrollTop(i);
	}, 1);*/
	

	// intro animation

	function introAnimation() {
		// fade in elements
	}
});

