/*
 *	CUSTOM JAVASCRIPT
 */

$j=jQuery.noConflict();

// Set active nav item for single posts based on URL
$j(document).ready(function() {
    var pathname        = window.location.pathname;
    var nav_portfolio   = jQuery("#menu-item-14");
    var nav_blog        = jQuery("#menu-item-24");

	if (pathname.indexOf("blog") >= 0) {
		nav_blog.addClass("active");
	}
	if (pathname.indexOf("portfolio") >= 0) {
		nav_portfolio.addClass("active");
	}
});