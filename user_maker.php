<?php
	include 'db_connect.php';
	include 'iconv_encodeing.php';

	$user_name = iconv_encodeing(urldecode($_GET["user_name"]));
	
	mysql_query("set names euckr");

	$query1 = "select user_name from user where user_name = '$user_name' ";
	$rs1 = mysql_query($query1);

	$result = mysql_fetch_array($rs1);


	if(!$result[0]){
		echo"Succeed!";
		$query = "insert into user(user_name) values ('$user_name')";
		mysql_query($query);	
	}
	else{
		echo "this user_name is already exist";
	}
	?>