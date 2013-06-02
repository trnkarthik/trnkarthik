var topRange = 200,  // measure from the top of the viewport to X pixels down
		    edgeMargin    = 20,   // margin above the top or margin from the end of the page
		    animationTime = 1200, // time in milliseconds
		    contentTop = [];
		    
		    $(document).ready(function(){ 
			// Stop animated scroll if the user does something
			$('html,body').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e){
			    if ( e.which > 0 || e.type == 'mousedown' || e.type == 'mousewheel' ){
			    $('html,body').stop();
			    }
			}
		    )
			
		    // Set up content an array of locations
		    $('#left_nav_bar').find('a').each(function(){
		     contentTop.push( $( $(this).attr('href') ).offset().top );
		    })
		    
		    // adjust side menu
		    $(window).scroll(function(){
			var winTop = $(window).scrollTop(),
		        bodyHt = $(document).height(),
		        vpHt = $(window).height() + edgeMargin;  // viewport height + margin
			$.each( contentTop, function(i,loc){
			    if ( ( loc > winTop - edgeMargin && ( loc < winTop + topRange || ( winTop + vpHt ) >= bodyHt ) ) ){
				$('#left_nav_bar li a i')
				 .removeClass('selected')
				 .eq(i).addClass('selected');
			    }
			})
		    })
		     
		    })