<?php
	echo "<?xml version = '1.0' encoding = 'euc-kr'?>";
	include 'supervisor.php';
	include 'iconv_encodeing.php';
	include 'user_converter_for_spread_user_name.php';
	include 'db_connect.php';

	$room_number=iconv_encodeing($_GET["room_number"]);


	$query = "select * from chat where room_number=$room_number";

	$result  = mysql_query($query);

    echo"<user_chat>";
	while($row =mysql_fetch_array($result)){
		echo "<user_id>";
		echo user_id_to_user_name($row[2]);
		echo "</user_id>";
		echo "<chat>".$row[1]."</chat>";
		echo "<date>".$row[3]."</date>";
	}
	echo"</user_chat>"
?>