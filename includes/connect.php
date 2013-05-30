<?php
$db_connect = mysql_connect("localhost","root","karthik");
// replace localhost with server name,mysql_user with your mysql user name and mysql_password with your mysql password
if (!$db_connect)
{
     print "Error - Could not connect to MySQL,Database access restricted";
     exit;
}
 
$db_name=mysql_select_db("karthik");
if (!$db_name)
{
     print "Error - Could not connect to MySQL:Database not found";
     exit;
}

?>