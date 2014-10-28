 <?php

 include 'db_connect.php';

   function user_id_to_user_name($user_id){
	 $query = "select user_name from user where user_id = '$user_id'";
	 $result = mysql_query($query);
	
	 $row=mysql_fetch_array($result);
	 
	 echo $row[0];
   }
 
 ?>