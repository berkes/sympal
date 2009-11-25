$(document).ready(function(){
	$('#sidebar').prepend('<a id="sidebar_toggler" href="#">Expand sidebar</a>');
	
	$('#content').removeClass('grid_12').addClass('grid_15');
	$('#sidebar').removeClass('grid_4').addClass('grid_1');
	$('#sidebar .block').css({ opacity: '0' });
	
	$('#sidebar_toggler').click(function(){
		if ($('#sidebar').is('.grid_4')) {
			$(this).text('Expand sidebar').removeClass('expanded');
			
			$('#content').animate({ width: '880px' }, 250).removeClass('grid_12').addClass('grid_15');
			$('#sidebar').animate({ width: '40px' }, 250).removeClass('grid_4').addClass('grid_1');
			$('#sidebar .block').animate({ opacity: '0' }, 250);
		} else {
			$(this).text('Collapse sidebar').addClass('expanded');
			
			$('#content').animate({ width: '700px' }, 250).removeClass('grid_15').addClass('grid_12');
			$('#sidebar').animate({ width: '220px' }, 250).removeClass('grid_1').addClass('grid_4');
			$('#sidebar .block').animate({ opacity: '1' }, 250);
		}
		
		return false;
	});
});