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
	
            $query = "select projectName,ProjectStartDate,ProjectEndDate,ProjectTools,ProjectDesc,
		      ProjectURL,ProjectType,ProjectCredits
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
                $projectCredits = $row[7];
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
      //alert('The center image was just clicked. The URL of the image is: ' + imageUrl);
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
margin-bottom: 30px;
margin-top: 10px;
width: 25%;
min-width: 180px;
height: 25px;
font-size: 18px;
font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
border: 1px solid rgba(32, 30, 30, 0.45);
}
.section_title,.section_title_special{
  font-size: 21px;
}
.project_desc_head{
  text-align: left;
  color: #DA7527;
}
.project_desc_body{
  margin-left: 30px;
  font-size: 16px;
  margin-top: 20px;
}
.project_credits_block{
  text-align: left;
}
.project_credits_block_head{
  text-align: left;
  color: #DA7527;
}
.project_credits_block table{
  margin-left: 55px;
}
.project_desc_sub_head{
display: block;
text-indent: 20px;
color: #DA7527;
font-size: 16px;
}
.project_desc_sub_body{
display: block;
text-indent: 40px;
font-size: 16px;
}
.project_desc_sub_body bit{
display: block;
text-indent: 40px;
font-size: 16px;
}
b{
color: #1E9DB9;
}
body {
font-family: Arial;
font-size: 12px;
font-family: 'Open Sans Condensed','Arial Narrow', serif;
font-weight: 400;
font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
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
      <div style="margin: 40px;margin-bottom: 5px;">
	    <span class="project_desc_head">
	    <?php echo $projectName;?>
	    </span><br/>
	      <?php echo $projectDesc;?>
	    <!-- project desc start 
	    <p>
	      <div class="project_desc_body">
		<span class="project_desc_sub_head">
		<b>Why</b> do you need this ?
		</span>
		<span class="project_desc_sub_body">
		<bit>Social networks are always important.Social Network is an efficient tool to keep in contact
		with several people at the same time.Social Networks,ofcourse provides great entertainment.</bit>
		</span><br/>
		<span class="project_desc_sub_head">
		<b>What</b> we did
		</span>
		<span class="project_desc_sub_body">
		<bit>Social Networking plus plus (SNPP) provides many major services of a social networking
		websits along with life defining features that are unique to SNPP service.</bit>
		<bit>This main intent of this project is to enhance the social networking experience.
		We have used the following services to do that.</bit>
		<bit style="text-indent: 60px;color: #DA7527">User profiles</bit>
		<bit style="text-indent: 90px">Show people who you are.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Hangouts</bit>
		<bit style="text-indent: 90px">Place where people meet.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Trick Sharing Application</bit>
		<bit style="text-indent: 90px">Share your knowledge with your friends.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Wish Sharing Application</bit>
		<bit style="text-indent: 90px">Make a wish.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Photo Albums</bit>
		<bit style="text-indent: 90px">Share your moments with your friends.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Online Diary Application</bit>
		<bit style="text-indent: 90px">Describe your life.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Fame Meter Application</bit>
		<bit style="text-indent: 90px">Let people know how famous you are.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Display Picture Assignment Application</bit>
		<bit style="text-indent: 90px">Lets your friends assign a picture to you.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Connections</bit>
		<bit style="text-indent: 90px">Form connections in all new way.</bit>
		<bit style="text-indent: 60px;color: #DA7527">Interactive Help.</bit>
		</span>
	      </div>
	    </p>
	    <br/>
	    <!-- project desc end -->
	     
	  <span class="project_desc_head">Tools and Technologies Used</span>
	    <p>
	      <span class="project_desc_body">
		<?php echo $projectTools;?>
	      </span>
	    </p><br/>
	      
      </div>
      <?php if($projectURL!=""){ ?>
	<a href="<?php echo $projectURL; ?>" id="download_repository" class="btn_blue btn">
	    Download Repository from Github
	</a>
      <?php } ?>
</div>

<div id="project_media" class="section">
		    <div class="section_title_special">Screen shots</div>
		    <?php include("includes/carousel.php"); ?>
</div>

<div id="project_credits" class="section">
     <div class="section_title">Project Credits</div>
	<div style="margin: 30px;">
	    <?php echo $projectCredits;?>  
	</div>
</div>

  <?php include("includes/footer.php"); ?>

</body>