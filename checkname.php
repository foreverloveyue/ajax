<?php
	
	// 
	$users = array('admin'=>123456, 'test'=>654321);

	$name = $_GET['name']; // 

	$flag = array_key_exists($name, $users);

	if($flag) {
		echo '用户已存在';
	} else {
		echo '恭喜你，用户名可用';
	}