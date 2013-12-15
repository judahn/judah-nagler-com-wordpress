/*
 *  CUSTOM JAVASCRIPT
 */

$j=jQuery.noConflict();

// Set active nav item for single posts based on URL
$j(document).ready(function() {
	var pathname        = window.location.pathname;
	
	var nav_about       = $j("#menu-item-130");
	var nav_blog        = $j("#menu-item-24");
	var nav_responsive  = $j("#menu-item-76");
	var nav_interactive = $j("#menu-item-116");
	var nav_design      = $j("#menu-item-77");
	var nav_contact  	= $j("#menu-item-84");

	
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
});