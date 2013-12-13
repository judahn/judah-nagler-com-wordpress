/*
 *	CUSTOM JAVASCRIPT
 */

$j=jQuery.noConflict();

// Set active nav item for single posts based on URL
$j(document).ready(function() {
	var pathname = window.location.pathname;
	var navBlog = jQuery("#menu-item-24");
	if (pathname.indexOf("blog") >= 0) {
		navBlog.addClass("active");
	}
});