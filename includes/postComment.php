<?php
include("connect.php");
$message = $_POST['message'];
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$subject = $_POST['subject'];

$post_comment_query = "insert into contacttable(Message,Name,EmailID,Subject)
                        values('$message','$name','$email_id','$subject')";
                        echo $post_comment_query;
$post_comment = mysql_query($post_comment_query);
    if(!$post_comment)
    {
        echo 0;
    }
    else{
        echo 1;
    }
?>