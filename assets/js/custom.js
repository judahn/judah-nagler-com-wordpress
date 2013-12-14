/*
 *	CUSTOM JAVASCRIPT
 */

$j=jQuery.noConflict();

// Set active nav item for single posts based on URL
$j(document).ready(function() {
    var pathname        = window.location.pathname;
    var nav_portfolio   = $j("#menu-item-14");
    var nav_blog        = $j("#menu-item-24");

	if (pathname.indexOf("blog") >= 0) {
		nav_blog.addClass("active");
	}
	if (pathname.indexOf("portfolio") >= 0) {
		nav_portfolio.addClass("active");
	}

	$j(".image").load(function(){
		$j(this).height("auto").css({"padding-bottom":"0 !important"});
	});
});