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
<style>
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
<div id="project_title">
    <?php echo $projectName;?>
</div>
<div id="project_desc">
    <?php echo $projectDesc;?>
</div>
<div id="project_media">
    this is sample desc
</div>