<?php
echo "<?xml version = '1.0' encoding = 'euc-kr'?>";

	include 'db_connect.php';
	include 'user_name_converter.php';
	include 'iconv_encodeing.php';

   $user_name=iconv_encodeing($_GET['user_name']);
   
   $user_id=user_name_to_user_id($user_name);

	$query = "select user_friend_name from user_friend where user_id= '$user_id'";

	$row = mysql_query($query);

	echo"<Friend>";

	while($result = mysql_fetch_array($row)){
	
		echo"<user_friend>$result[0]</user_friend>";
	
	}
	echo"</Friend>";

?>