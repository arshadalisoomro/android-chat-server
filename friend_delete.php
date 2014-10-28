<?php
	include 'db_connect.php';
	include 'user_name_converter.php';
	include 'iconv_encodeing.php';

	$user_friend_name = iconv_encodeing($_GET['user_friend_name']);

	$user_name = iconv_encodeing($_GET['user_name']);
	mysql_query("set name euckr");

	$user_id=user_name_to_user_id($user_name);



	$query = "delete from user_friend where user_id = '$user_id' and user_friend_name = '$user_friend_name'";
	$rs1 = mysql_query($query)or die(" 등록실패");	
	if($rs1){
		echo"Succeed!";
	}
	
	
	
?>