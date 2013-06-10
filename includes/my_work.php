<?php include("connect.php"); ?>

<!-- QuickSand Plugin-->
		<script src="js/jquery-ui-1.10.1.custom.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/products_support_for_quicksand.css" />
		<script type="text/javascript" src="js/jquery.quicksand.js" ></script>
		<link href="css/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
                <link href="css/jquery-ui-1.10.1.custom.css" rel="stylesheet">
                 
<!-- PrettyPhoto Plugin-->
                <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
   
   <style>
      .image-grid li{
	 background: none repeat scroll 0 0 rgba(255, 255, 255);
	 border-radius: 5px 5px 5px 5px;
	 box-shadow: 4px 4px rgba(0, 0, 0, 0.05);
	 margin-bottom: 2.8125%;
	 position: relative;
         text-align: center;
	 top: 20px;
	 width: 270px;
	 height: 272px;
   	 background: rgb(255, 255, 255);
	 border: 1px solid rgb(231, 231, 231);
      }
      .clearfix{
         display: block;
	 margin-left: auto;
	 margin-right: auto;
      }
      #filter_by_type{
	 position: relative;
         top: 40px;
         margin-left: auto;
         margin-right: auto;
         width: 440px;
         border: 0px;
      }
      #filter_by_sort{
	 position: relative;
         right: 45px;
         width: 140px;
         border: 0px;
         margin-left: auto;
      }
      .product_desc{
	 padding: 15px;
      }
      .more_desc{
	 padding: 15px;
      }
      .project_period_web{
        background: #1E9DB9;
        padding: 4px;
        color: #FFF;
        -webkit-box-shadow: 3px 3px 3px #CCC;
      }
      .project_period_android{
        background: #DA7527;
        padding: 4px;
        color: #FFF;
        -webkit-box-shadow: 3px 3px 3px #CCC;
      }
     .webapp_active{
        border-top: 3px solid #1E9DB9;
     }
     .android_active{
        border-top: 3px solid #DA7527;
     }

   </style>
   
 




<div id="my_work_link" class="section_link" style="margin-top: -50px;"></div>
<div id="my_work" class="section">
    
    <div class="section_title">My work</div>
    <div>
        
        
        <form id="filter">
    <div id="radio">
      <fieldset id="filter_by_type">
	 <input type="radio" name="radio1" id="radio1" filters="type" value="all" checked="checked"  />
            <label for="radio1">All Projects</label>
	 <input type="radio" name="radio1" id="radio2" filters="type" value="web" />
            <label for="radio2">Web Applications</label>
	 <input type="radio" name="radio1" id="radio3" filters="type" value="android"/>
            <label for="radio3"
		  style="border-bottom-right-radius: 5px;
		  border-top-right-radius: 5px;"
		  >Android Applications</label>
      </fieldset>
 
      <fieldset id="filter_by_sort">
	 <input type="radio" id="radio4" name="sort" filters="sort" value="size" checked="checked"/><label for="radio4"
		  style="border-bottom-left-radius: 5px;
		  border-top-left-radius: 5px;"
	 >Date</label>
	 <input type="radio" id="radio5" name="sort" filters="sort" value="name"/><label for="radio5">Name</label>
      </fieldset>
    </div>
    <script>
  
    $( "#radio" ).buttonset();
  </script>
</form>
        
        
        
        
        <ul id="applications" class="image-grid gallery clearfix">
            <?php 
            $get_projects_query ="SELECT pd.ProjectName,pd.ProjectType,pd.ProjectID, 
                                ((YEAR(pd.ProjectStartDate)*12)+MONTH(pd.ProjectStartDate)),
                                pd.ProjectStartDate,pt.mainthumb,LEFT(pd.ProjectDesc,67),
                                pd.ProjectEndDate
                                FROM projectthumbs pt, projectdetails pd
                                WHERE pd.projectid = pt.projectid
                                AND pd.visibility =1
                                order by ProjectStartDate";
            $get_projects = mysql_query($get_projects_query);
            //echo mysql_numrows($get_projects);
            for ($i=0; $row = mysql_fetch_array($get_projects); $i++) {
                if(file_exists($row[5])){
                    $temp_url = $row[5];
                    $temp_start_date = $row[4];
                    $temp_end_date = $row[7];
                }
                else{
                    $temp_url = "images/thumbs/default_thumb.png";
                }
               ?>
                   <li data-id="id-<?php echo $i ?>" data-type="<?php echo $row[1]; ?>">
                        <a href="project.php?id=<?php echo $row[2] ?>">
                           <strong><?php echo $row[0]; ?></strong>
                        <div class="project_period_<?php echo $row[1]; ?>">
                                                                <?php
                                                                echo date("M Y",strtotime($row[4]));
                                                                if($row[7]!=null)
                                                                {
                                                                    echo " - ".date("M Y",strtotime($row[7]));
                                                                }
                                                                ?>
                                                                </div>
                        <img src="<?php echo $temp_url; ?>" <?php
                                                        if($row[1]=='web'){
                                                            echo "width='177' height='115'";
                                                        }
                                                        else if($row[1]=='android'){
                                                            echo "width='75' height='115'";
                                                        }
                                                        ?> alt="" />
                        <span data-type="size" class="product_desc" style="visibility: hidden"><?php echo $row[3]; ?></span>
                        <div ><?php echo $row[6]."..."; ?></div>
                        </a>
                   </li>
            <?php 
            } 
            ?>
        </ul>
    </div>
</div>

<script type="text/javascript" charset="utf-8">

                            
    // Custom sorting plugin
(function($) {
  $.fn.sorted = function(customOptions) {
    var options = {
      reversed: false,
      by: function(a) { return a.text(); }
    };
    $.extend(options, customOptions);
    $data = $(this);
    arr = $data.get();
    arr.sort(function(a, b) {
      var valA = options.by($(a));
      var valB = options.by($(b));
      if (options.reversed) {
        return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
      } else {		
        return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
      }
    });
    return $(arr);
  };
})(jQuery);

// DOMContentLoaded
$(function() {

  // bind radiobuttons in the form
  var $filterType = $('#filter input[filters="type"]');
  var $filterSort = $('#filter input[filters="sort"]');

  // get the first collection
  var $applications = $('#applications');

  // clone applications to get a second collection
  var $data = $applications.clone();

  // attempt to call Quicksand on every form change
  $filterType.add($filterSort).change(function(e) {
    if ($($filterType+':checked').val() == 'all') {
      var $filteredData = $data.find('li');
    } else {
      var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
    }

    // if sorted by size
    if ($('#filter input[name="sort"]:checked').val() == "size") {
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return parseFloat($(v).find('span[data-type=size]').text());
        }
      });
    } else {
      // if sorted by name
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return $(v).find('strong').text().toLowerCase();
        }
      });
    }   

    // finally, call quicksand
    $applications.quicksand($sortedData, {
      duration: 800,
      easing: 'swing',
      adjustHeight: 'dynamic'
    });

  });

});

//color tags to tabs in my_work section
  $("label[for='radio2']").click(function() {
        if($(this).hasClass("ui-state-active")) {
            $("label[for='radio2']").addClass('webapp_active');
            $("label[for='radio3']").removeClass('android_active');
        }
  });
  $("label[for='radio3']").click(function() {
        if($(this).hasClass("ui-state-active")) {
            $("label[for='radio3']").addClass('android_active');
            $("label[for='radio2']").removeClass('webapp_active');
        }
  });
  $("label[for='radio1']").click(function() {
        if($(this).hasClass("ui-state-active")) {
            $("label[for='radio2']").removeClass('webapp_active');
            $("label[for='radio3']").removeClass('android_active');
        }
  });
    
    
  $("label[for='radio2']").mouseover(function() {
            $("label[for='radio2']").addClass('webapp_active');
  });
  $("label[for='radio2']").mouseout(function() {
        if(!$(this).hasClass("ui-state-active")) {
            $("label[for='radio2']").removeClass('webapp_active');
        }
  });

  
  $("label[for='radio3']").mouseover(function() {
            $("label[for='radio3']").addClass('android_active');
  });
  $("label[for='radio3']").mouseout(function() {
        if(!$(this).hasClass("ui-state-active")) {
            $("label[for='radio3']").removeClass('android_active');
        }
  });
  
</script>