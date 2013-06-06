<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery-ui-1.10.1.custom.js"></script>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    
	<link rel="stylesheet" href="css/my_main_style.css">
	<link rel="stylesheet" type="text/css" href="css/products_support_for_quicksand.css" />
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
		  $carousel_height = 500;
		  $carousel_width = 375;
		}
		else if($projectType=='web'){
		  $carousel_height = 500;
		  $carousel_width = 700;
		}

            }
    ?>
     
        
    <!--Water wheeler add-ons -->   
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 1,
	  separation:200,
	  opacityMultiplier:0.4,
	  autoPlay:3000,
	  keyboardNav:true,
	  preloadImages:false,
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
	background: white;
	border: 1px solid #ccc;
	-moz-box-shadow: 2px 2px 2px #ccc;
	-webkit-box-shadow: 2px 2px 2px #ccc;
	box-shadow: 2px 2px 2px #ccc;
      }
      .carousel-links {
	position: relative;
	
	}
        
    #project_title{
    text-align: center;
font-size: 21px;
background: rgba(197, 197, 197, 0.26);
padding: 10px;
border-bottom: 1px solid #CCC;
font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
font-weight: 400;
text-shadow: rgba(255, 255, 255, 0.85) 0 0 3px;
    }
    #project_desc{
        width: 100%;
	min-height: 80px;
	float: left;
	font-size: 18px;
	border-bottom: 1px solid #CCC;
	text-indent: 25px;
    }
    #project_media{
        width: 100%;
min-height: 600px;
float: left;
text-align: center;
padding-top: 40px;
margin-left: -1px;
border-left: 1px solid rgba(185, 185, 185, 0.38);
background: rgba(247, 247, 247, 0.12);

    }
    a {
color: #555;
}
body{
  min-height: 0px;
}
#download_repository{
margin: 2px 37.5%;
margin-bottom: 10px;
margin-top: 10px;
width: 25%;
min-width: 180px;
height: 25px;
font-size: 18px;
font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
border: 1px solid rgba(32, 30, 30, 0.45);
}
</style>
</head>

<body>
        <div class="container">
            
		<?php include("includes/header2.php");?>
	     
	</div>

<div id="my_work" class="section">
  
</div>
<div id="project_title">
    <a href="#">
    <?php echo $projectName;?>
    </a>
    
</div>

<div id="project_desc">
    <a href="#home" id="download_repository" class="btn_blue btn" style="float: right">
      Download Repository from Github
    </a>

    <?php echo $projectDesc;?>
</div>
<div id="project_media">
    
    <?php
        include("includes/carousel.php");
    
    ?>
</div>
</body>