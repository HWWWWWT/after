<?php
include("../mysql.php");
$sql="insert into link (name,url) values ('$title','$url')";
if(mysql_query($sql))
header("location:FriendLinks.php");
?>