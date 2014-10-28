 <?php

 include 'db_connect.php';

  function user_name_to_user_id($user_name){	  
	 $query = "select user_id from user where user_name = '$user_name'";
	 mysql_query("set names euckr");
	 $result = mysql_query($query);
	
	 $row=mysql_fetch_array($result);
	 
	 return $row[0];
 }
 ?>
