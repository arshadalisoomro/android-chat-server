<?php
echo "<?xml version = '1.0' encoding = 'euc-kr'?>";
	include 'db_connect.php';
	include 'user_name_converter.php';
	include 'spread_user_name.php';
	include"iconv_encodeing.php";
	

    $user_name=iconv_encodeing($_GET["user_name"]);

	$user_id=user_name_to_user_id($user_name);

	$query = "select room_number from participated_room where participated_user_id = '$user_id' ";
	$row = mysql_query($query)or die("<failed>에러발생</failed>");
	
	echo "<participated_room>";
	
	while($result = mysql_fetch_array($row)){
	
		echo"<room_number>$result[0]</room_number>";
		echo spread_user_name($result[0]);
	
	}
	echo "</participated_room>";

?>
