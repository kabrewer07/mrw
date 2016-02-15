(function(doc) {

	var addEvent = 'addEventListener',
	    type = 'gesturestart',
	    qsa = 'querySelectorAll',
	    scales = [1, 1],
	    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

	function fix() {
		meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
		doc.removeEventListener(type, fix, true);
	}

	if ((meta = meta[meta.length - 1]) && addEvent in doc) {
		fix();
		scales = [.25, 1.6];
		doc[addEvent](type, fix, true);
	}

}(document));

jQuery(document).ready(function($) {

	if( $('.mobile-primary-toggle').length ) {		
		$('.mobile-primary-toggle').click(function() {
			$('.nav-primary').animate({"height": "toggle"}, { duration: 300 });
			$('#nav').animate({"height": "toggle"}, { duration: 300 });
		});

		$(window).resize(function() {	
			if ($('.mobile-primary-toggle').css('display') == 'none' ) {
				$('.nav-primary').css('display', 'block');
				$('#nav').css('display', 'block');
			} else if ($('.mobile-primary-toggle').css('display') == 'block' ) {
				$('.nav-primary').css('display', 'none');
				$('#nav').css('display', 'none');
			}
		});
	}

	if( $('.mobile-secondary-toggle').length ) {		
		$('.mobile-secondary-toggle').click(function() {
			$('.nav-secondary').animate({"height": "toggle"}, { duration: 300 });
			$('#subnav').animate({"height": "toggle"}, { duration: 300 });
		});

		$(window).resize(function() {	
			if ($('.mobile-secondary-toggle').css('display') == 'none' ) {
				$('.nav-secondary').css('display', 'block');
				$('#subnav').css('display', 'block');
			} else if ($('.mobile-secondary-toggle').css('display') == 'block' ) {
				$('.nav-secondary').css('display', 'none');
				$('#subnav').css('display', 'none');
			}
		});
	}

	if( $('#dropdown-nav-form select').length ) {
		$('#dropdown-nav-form select').change(function() {
			window.location = $(this).find('option:selected').val();
		});
	}
	
	if( $('#dropdown-subnav-form select').length ) {
		$('#dropdown-subnav-form select').change(function() {
			window.location = $(this).find('option:selected').val();
		});
	}

});