<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery-ui-1.10.1.custom.js"></script>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

    <?php
        include("includes/connect.php");
        $id = $_GET['id'];
        //echo $id;
            $query = "select projectName,ProjectStartDate,ProjectEndDate,ProjectTools,ProjectDesc,ProjectURL
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
            }
    ?>
     
        
    <!--Water wheeler add-ons -->   
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 1,
	  separation:150,
	  //sizeMultiplier:0.2,
	  opacityMultiplier:0.4,
	  autoPlay:3000,
	  //orientation:'vertical',
	  keyboardNav:true,
	  preloadImages:false,
	  forcedImageWidth:300,
	  forcedImageHeight:400,
          clickedCenter: function ($item) {
            //alert("center clicked!");
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
	    alert($item );
          }
        });
      
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
        background:#ededed;
      }
      .example-desc {
        margin:3px 0;
        padding:5px;
      }

      #carousel {
        width:660px;
        border:0px solid #222;
        height:450px;
        position:relative;
        clear:both;
        overflow:hidden;
        background:#FFF;
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
	left: 90%;
	}
        
    #project_title{
    text-align: center;
    font-size: 25px;
    background: #F00;        
    }
    #project_desc{
        background: #008000;
        width: 27.5%;
        min-height: 100px;
        float: left;
        text-align: center;
    }
    #project_media{
        background: blue;
        width: 72.5%;
        min-height: 100px;
        float: left;
        text-align: center;
    }
</style>
</head>

<body>
<div id="project_title">
    <?php echo $projectName;?>
</div>
<div id="project_desc">
    <?php echo $projectDesc;?>
</div>
<div id="project_media">
    
    <?php
        include("includes/carousel.php");
    
    ?>
</div>
</body>