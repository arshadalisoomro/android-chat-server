<?php
	include 'db_connect.php';
	include 'user_name_converter.php';
	include 'iconv_encodeing.php';

	$user_friend_name = iconv_encodeing($_GET['user_friend_name']);

	$user_name = iconv_encodeing($_GET['user_name']);


	$user_id=user_name_to_user_id($user_name);

	mysql_query("set name euckr");



	$query1 = "select user_name from user where user_friend_name = '$user_friend_name' ";
	$rs1 = mysql_query($query1);

	$result = mysql_fetch_array($rs1);


	if(!$result[0]){
		echo "Succeed!";
		$query = "insert into user_friend(user_id, user_friend_name) values ('$user_id','$user_friend_name')";
		mysql_query($query);	
	}
	else{
		echo"this ID is not exist";
	}
	
?>