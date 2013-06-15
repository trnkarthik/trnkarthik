<style>
.data{
width: 80%;
margin-left: auto;
margin-right: auto;
font-size: 17px;
padding: 20px;
}
.data_desc_head {
text-align: center;
color: #1E9DB9;
font-size: 21px;
font-weight: bold;
border: 1px solid #CCC;
padding: 10px;
-webkit-box-shadow: 3px 3px 3px #CCC;
-moz-box-shadow: 3px 3px 3px #CCC;
box-shadow: 3px 3px 3px #CCC;
border-radius: 5px;
}
.data_desc_body {
text-align: left;
border: 1px solid #CCC;
padding: 10px;
-webkit-box-shadow: 3px 3px 3px #CCC;
-moz-box-shadow: 3px 3px 3px #CCC;
box-shadow: 3px 3px 3px #CCC;
border-radius: 5px;
font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
}
.data_head_date{
float: right;
font-size: 17px;
font-weight: normal;
}
.experience{
    color: red;
    font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
}
.experience_link a{
    color: red;
}
a.pp_close {
visibility: hidden;
}
.pp_content_container {
position: relative;
text-align: left;
width: 100%;
overflow: auto;
background: white;
}
#close_light_box{
width: 20px;
height: 20px;
float: right;
cursor: pointer;
}
</style>
<body class="experience">
    <div id="close_light_box">
        <img src="images/close_light_box.png" width=20px height=20px>
    </div>
<?php

$id = $_GET['id'];
//echo $id;

if($id==1)
{
    ?>
    <div class="data">
        <div class="data_desc_head">Developer in HCI Lab <span class="data_head_date">October 2012 - Present</span></div><br/>
    <div class="data_desc_body"> 
    Working on Choreographer's Notebook, a tool which allows multimodal
    annotation of rehearsal videos during the dance production process.
    <br/><br/>
    Implemented many major modules like customized keyboard comments,
    media handling (HTML 5 video), ffmpeg video conversion, improved User Interface, image and video comments. 
    <br/><br/>
    Redesigned database to improve its scalability.
    <br/><br/>
    <span class="experience_link">
    <a href="http://dl.acm.org/citation.cfm?id=2069653" target="_blank">Click here</a> to know more about this tool.
    </span>
    </div>
    <?php
}
if($id==2)
{
    ?>
    <div class="data">
        <div class="data_desc_head">Intern <span class="data_head_date">April 2011 - July 2011</span></div><br/>
    <div class="data_desc_body">
    Visakhapatnam steel plant(Rashtriya Ispat Nigam Limited) is one of the largest producer of steel in Asia.<br/><br/>
    Developed a web based project module for computerizing Bala Cheruvu Gate,
    which acts as main entrance to Visakhapatnam Steel Plant.<br/><br/>
    Developed a system for creation of LSGP (Loading Slip Cum Gate Pass).
    LSGP keeps track of the amount of steel purchased and delivered to the user.
    It also acts as a gate pass for the user vehicles.<br/><br/>
    <span class="experience_link">
    <a href="https://www.vizagsteel.com/index.asp" target="_blank">Click here</a> to know more about this Vizag steel plant.
    </span>
    </div>
    <?php
}

if($id==3)
{
    ?>
    <div class="data">
        <div class="data_desc_head">Founder and Developer <span class="data_head_date">November 2009 - November 2010</span></div><br/>
    <div class="data_desc_body">
    eventinside.com was an alternate to age old notice boards that are often found in
    educational institutions.<br/><br/>
    We introduced online notice boards, where registered users
    can post events and notify other students in the university about these events.<br/><br/>
    Managed project from conception, pre-production through to completion.<br/><br/>
    </div>
    <?php
}

?>
</body>