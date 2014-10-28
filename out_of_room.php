<?php

include 'db_connect.php';
include 'iconv_encodeing.php';
include 'user_name_converter.php';
	
	$room_number = iconv_encodeing($_GET["room_number"]);

	$user_name= iconv_encodeing($_GET["user_name"]);

    $user_id=user_name_to_user_id($user_name);


	mysql_query("delete from participated_room where room_number = $room_number and participated_user_id = $user_id") or die("failed you can't go out");
	echo "Succeed";

?>