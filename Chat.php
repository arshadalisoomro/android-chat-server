<?php
	include 'supervisor.php';
	include 'iconv_encodeing.php';
	include 'user_name_converter.php';
	include 'db_connect.php';

	$chat= iconv_encodeing(urldecode($_GET["chat"]));

	$user_name =  iconv_encodeing(urldecode($_GET["user_name"]));

	$room_number = iconv_encodeing($_GET["room_number"]);

	$user_id=user_name_to_user_id($user_name);

	$query = "insert into chat(room_number,chat,chatted_user_id,chatdate) values ('$room_number','$chat','$user_id',now())";

	mysql_query("set names euckr");

	$result = mysql_query($query) or die("failed");
	echo "Succeed";

?>

