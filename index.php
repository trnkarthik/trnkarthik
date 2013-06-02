<!DOCTYPE html>
<html lang="en">
    <head>
	
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Raja Narasimha Karthik Tangirala(trnkarthik)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Raja Narasimha Karthik Tangirala(trnkarthik) professional website" />
        <meta name="keywords" content="Raja Narasimha Karthik Tangirala,trnkarthik,software engineer,entrepreneur,
					web designer,mobile developer,android developer,database developer" />
        <meta name="author" content="Raja Narasimha Karthik Tangirala(trnkarthik)" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
	<![endif]-->
	<!-- jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- jmpress plugin -->
	<script type="text/javascript" src="js/jmpress.min.js"></script>
	<!-- jmslideshow plugin : extends the jmpress plugin -->
	<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
	<noscript>
		<style>
		.step {
			width: 100%;
			position: relative;
		}
		.step:not(.active) {
			opacity: 1;
			filter: alpha(opacity=99);
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
		}
		.step:not(.active) a.jms-link{
			opacity: 1;
			margin-top: 40px;
		}
		</style>
		</noscript>
	         
		 
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/my_main_style.css">
		
	<script>!window.jQuery && document.write(unescape('%3Cscript src="../lib/jquery/jquery.js"%3E%3C/script%3E'));</script>
                  
	<script src="js/jquery.smooth-scroll.js"></script>
	<script src="js/viewportcheck.js"></script>
		
	<script>
	    $(document).ready(function() {
	        $('#left_nav_bar a').smoothScroll({offset:0});
	        $('.header a').smoothScroll();
	    });
	     
	    $(document).ready(function() {
		    $('#skill_table').bind('inview', function (event, visible) {
			if (visible == true) {
			    // element is now visible in the viewport
			    var levelArray = $('.graph').map( function() {
				var skill_level = $(this).attr('skill_level');
				var obj = this;
				$(obj).animate({
				    width: skill_level*5,
				    opacity: 1,
				}, 1500 );
			    });
			    $('#skill_table').unbind('inview');
			}
			else {
			// element has gone out of viewport
			}
		    });
		});
	</script>
		
	<script src="js/highlight_selected_nav_item.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function() {
	    $("#totop").hide();
	    var s = $(".header");
	    var pos = s.position();                    
	    $(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= 550) {
		    s.removeClass("header"); 
		    s.addClass("stick");
		} else{
		    s.removeClass("stick"); 
		    s.addClass("header");
		}
		
		if(s.attr('class')=="header"){
		    $("#totop").hide();
		}
		else{
		    $("#totop").show();
		}
	    });
	});	
	</script>
	<script type="text/javascript" src="js/pdfobject.js"></script>
	<script type="text/javascript">      
	window.onload = function (){
	    var success = new PDFObject({ url: "RajaNarasimhaKarthikTangirala.pdf" }).embed("pdf");
	};
	</script>
	 
		
    </head>
    <body>
        <div class="container">
            
		<?php include("includes/header.php");?>
		<?php include("includes/left_nav_bar.php");?>
		<?php include("includes/slide_show.php");?>
	     
	</div>
	         
		 <!--My work section -->
		 <?php include("includes/my_work.php");?>
		 
		 <!--What I Love section -->
		 <?php include("includes/what_i_love.php");?>
		 
		 <!--What I Know section -->
		 <?php include("includes/what_i_know.php");?>
		 
		 <!--Awards and Certifications section -->
		 <?php include("includes/awards.php");?>
		 
		 <!--Contact Me section -->
		 <?php include("includes/contact_me.php");?>
		
		
		
    </body>
</html>