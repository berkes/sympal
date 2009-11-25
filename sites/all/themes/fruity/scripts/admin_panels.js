var admin_panels = new Array();

$(document).ready(function(){

	/**
	 * Check which admin panel has the highest height.
	 */
	i = 0;
	
	$('.admin .body').each(function(){
		admin_panels[i] = $(this).height();
		i++;
	});
	
	admin_panels = admin_panels.sort(function(a, b){ return b - a; });
	
	/**
	 * Apply height of highest panel to the other panels.
	 */
	$('.admin .body').css({ height: admin_panels[0] + 'px' });
	
	/**
	 * Collapse all panels except the last one.
	 */
	$('.admin .body:not(:last)').hide();
	$('.admin h3:last').addClass('active');
	
	panel_activated = 1;
	
	/**
	 * Expand a panel when hovering over it's title.
	 */
	$('.admin h3').hover(
		function(){
			if ($(this).is(':not(.active)')) {
				current_panel = $(this);
				
				setTimeout(function(){
					if (panel_activated == 1) {
						$('.admin .body').slideUp(250);
						current_panel.next().slideDown(250);
						
						$('.admin h3.active').removeClass('active');
						current_panel.addClass('active');
						
						panel_activated = 0;
						
						setTimeout(function(){ panel_activated = 1; }, 500);
					}
				}, 500);
			}
		},
		function(){
		
		}
	);
});