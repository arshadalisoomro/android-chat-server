<?php

include'db_connect.php';
include'user_converter_for_spread_user_name.php';

function spread_user_name($room_number){

	
	$result = mysql_query("select participated_user_id from participated_room where room_number = '$room_number'");
	echo "<participated_user_name>";
	
	while($result1 = mysql_fetch_array($result)){

		user_id_to_user_name($result1[0]);
		echo ",";
 }
 echo"</participated_user_name>";
}
?>
