<?php

	include 'supervisor.php';

	$dbc = mysql_connect($page,$id,$pw) or die ('�����ͺ��̽� ���� ����');

	mysql_select_db('cocoatok',$dbc);

?>