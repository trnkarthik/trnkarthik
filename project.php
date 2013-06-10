<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery-ui-1.10.1.custom.js"></script>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    
	<link rel="stylesheet" href="css/my_main_style.css">
	<link rel="stylesheet" type="text/css" href="css/products_support_for_quicksand.css" />
	
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
    <?php
        include("includes/connect.php");
	
        $id = (int)(mysql_real_escape_string($_GET['id']));
	
            $query = "select projectName,ProjectStartDate,ProjectEndDate,ProjectTools,ProjectDesc,ProjectURL,ProjectType
                        from projectDetails where projectID='$id'";
            $result = mysql_query($query);
            if(!$result){
                echo "Please try again";
            }
            else{
                $row = mysql_fetch_array($result);
                $projectName = $row[0];
                $projectStartDate = $row[1];
                $projectEndDate = $row[2];
                $projectTools = $row[3];
                $projectDesc = $row[4];
                $projectURL = $row[5];
                $projectType = $row[6];
		if($projectType=='android'){
		  $carousel_height = 600;
		  $carousel_width = 350;
		  $carousel_separation = 125;
		}
		else if($projectType=='web'){
		  $carousel_height = 500;
		  $carousel_width = 700;
		  $carousel_separation = 175;
		}

            }
    ?>
     
        
    <!--Water wheeler add-ons -->   
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 1,
	  separation:<?php echo $carousel_separation;?>,
	  opacityMultiplier:0.6,
	  autoPlay:3000,
	  keyboardNav:true,
	  preloadImages:true,
	  forcedImageWidth:<?php echo $carousel_width;?>,
	  forcedImageHeight:<?php echo $carousel_height;?>,
	  captionBelow:true,
	  
	  
	   clickedCenter: function($clickedItem) {
      // $clickedItem is a jQuery wrapped object describing the image that was clicked.
      var imageUrl = $clickedItem.attr('src');
      alert('The center image was just clicked. The URL of the image is: ' + imageUrl);
    },
        });
             
        /*  clickedCenter: function ($item) {
            //alert("center clicked!");
	          var imageID = $newCenterItem.attr('id'); // Get the HTML element "id" for this image. Let's say it's "tigerpicture"
      $('#'+imageID+'-information').show(); // this will show the HTML element with id of "tigerpicture-information" on your site.

	    
           // $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
	    alert(imageID );
          }
        });
      */
	
        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });
	
        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });
	
	
      });
     
      
    </script>

<style type="text/css">
      body {
        font-family:Arial;
        font-size:12px;
	font-family: 'Open Sans Condensed','Arial Narrow', serif;
	font-weight: 400;
	background: #DDD url(./images/bg2.png) repeat;
      }
      .example-desc {
        margin:3px 0;
        padding:5px;
      }

      #carousel {
        width:100%;
        border:0px solid #222;
        height:550px;
        position:relative;
        clear:both;
        overflow:hidden;
	margin-left: auto;
	margin-right: auto;
      }
      #carousel img {
        visibility:hidden; /* hide images until carousel can handle them */
        cursor:pointer; /* otherwise it's not as obvious items can be clicked */
      }
      .carousel-links {
position: relative;
text-align: center;
margin-right: 20px;
padding-bottom: 20px;
padding-top: 0px;
	}
.carousel-links i{
color: #555;
font-weight: bold;
font-size: 1.8em;
	}  
.carousel-links i:hover{
color: black;
	}  
    #project_title{
    text-align: center;
font-size: 21px;
background: rgba(248, 248, 248, 0.9);
padding: 10px;
font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
font-weight: 400;
text-shadow: rgba(255, 255, 255, 0.85) 0 0 3px;
border-bottom: 1px solid rgba(211, 211, 211, 0.49);
    }
    #project_desc{
        background: #FFF;
position: relative;
top: 0px;
left: 5%;
min-height: 100px;
width: 90%;
border-top: 0px;
font-size: 18px;
padding: 1px;
    }
    #project_media{
      background: #FFF;
      position: relative;
      top: 20px;
      left: 5%;
      min-height: 100px;
      width: 90%;
      border-top: 0px;
      font-size: 18px;
      padding: 1px;
    }
    #project_credits{
      background: #FFF;
      position: relative;
      top: 40px;
      left: 5%;
      min-height: 100px;
      width: 90%;
      border-top: 0px;
      font-size: 18px;
      padding: 1px;
    }
    a {
color: #555;
}
body{
  min-height: 0px;
}
#download_repository{
margin: 2px 37.5%;
margin-bottom: 20px;
margin-top: 10px;
width: 25%;
min-width: 180px;
height: 25px;
font-size: 18px;
font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
border: 1px solid rgba(32, 30, 30, 0.45);
}
.section_title{
  font-size: 21px;
}
</style>

	<script src="js/jquery.smooth-scroll.js"></script>
	<script src="js/viewportcheck.js"></script>


<script type="text/javascript">
	
	$(document).ready(function() {
	        $('#left_nav_bar a').smoothScroll({offset:0});
	        $('.header a').smoothScroll();
	    });
	
	$(document).ready(function() {
	    $("#totop").hide();
	    var s = $(".header");
	    var pos = s.position();                    
	    $(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= 60) {
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

</head>

<body>
        <div class="container">
            
		<?php include("includes/header.php");?>
	     
	</div>

<div id="project_title">
    <a href="#">
    <?php echo $projectName;?>
    </a>
    
</div>

<div id="project_desc" class="section">
     <div class="section_title">About <?php echo $projectName;?></div>
      <div style="margin: 30px;">
	  <?php echo $projectDesc;?>
      </div>
    <a href="#home" id="download_repository" class="btn_blue btn">
      Download Source Code from Github
    </a>
</div>

<div id="project_media" class="section">
		    <div class="section_title_special">Screen shots</div>
		    <?php include("includes/carousel.php"); ?>
</div>

<div id="project_credits" class="section">
     <div class="section_title">Project Credits</div>
      <div style="margin: 30px;">
	  <?php echo $projectDesc;?>
      </div>
    <a href="#home" id="download_repository" class="btn_blue btn">
      Download Repository from Github
    </a>
</div>

  <?php include("includes/footer.php"); ?>

</body>