<?php
	include 'db_connect.php';
	include 'user_name_converter.php';
	include 'iconv_encodeing.php';

	$user_friend_name=iconv_encodeing(urldecode($_GET["user_friend_name"]));

	$user_name=iconv_encodeing($_GET["user_name"]);

	$user_id =user_name_to_user_id($user_name);

	$user_friend_id=user_name_to_user_id($user_friend_name);

	$query = "insert into room values ()";

	mysql_query ($query) or die ('쓰기 오류');

	$rs = mysql_query("select max(room_number) from room");

	$row = mysql_fetch_array($rs);
	
	

	$query1= "insert into participated_room(room_number,participated_user_id) values($row[0],$user_id)";
	mysql_query($query1) or die ("방을 등록할 수 없습니다");
	mysql_query("insert into participated_room(room_number,participated_user_id) values($row[0],$user_friend_id)");
	echo $row[0];
?>