var can_touch, scroll_top, $window, $scroll_target, $menu, $fixiemenu, nav_initial_y_offset, nav_is_fixed, win_width;

$window        = $(window);
$scroll_target = $(window);
$menu          = $('.js-menu');
$fixiemenu     = $('.js-fixie-menu');

can_touch = (!!('ontouchstart' in window) || !!('onmsgesturechange' in window) ? true : false);
win_width = $window.width();

nav_initial_y_offset = $menu.offset().top + 1; // plus 1 b/c of the -1px top pos
nav_is_fixed = false;

scroll_top = (window.pageYOffset ? window.pageYOffset : $scroll_target.scrollTop());

function set_nav() {
	if (!can_touch && win_width >= 740) {
		var native_y_offset = window.pageYOffset;

		scroll_top = (native_y_offset ? native_y_offset : $scroll_target.scrollTop());

		if (!nav_is_fixed && scroll_top > nav_initial_y_offset) {
			$fixiemenu.show();
			nav_is_fixed = true;
		} else if (nav_is_fixed && scroll_top <= nav_initial_y_offset) {
			$fixiemenu.hide();
			nav_is_fixed = false;
		}
	} else {
		$fixiemenu.hide();
		nav_is_fixed = false;
	}
}

$scroll_target.on('scroll', function(){
	set_nav();
});

$window.on('resize', function(){
	win_width = $window.width();
	set_nav();
});