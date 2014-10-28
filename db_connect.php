<?php

	include 'supervisor.php';

	$dbc = mysql_connect($page,$id,$pw) or die ('데이터베이스 접속 오류');

	mysql_select_db('cocoatok',$dbc);

?>