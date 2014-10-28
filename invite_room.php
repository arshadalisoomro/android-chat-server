<?php

include 'db_connect.php';
include 'iconv_encodeing.php';
include 'user_name_converter.php';
	
	$room_number = iconv_encodeing($_GET["room_number"]);

	$friend_name = iconv_encodeing($_GET["friend_name"]);

	 $friend_id=user_name_to_user_id($friend_name);
	mysql_query("insert into participated_room(room_number,participated_user_id) values ('$room_number','$friend_id')")or die("failed");
	echo "Succeed";

	?>