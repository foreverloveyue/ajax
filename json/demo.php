<?php

	// echo $_GET['test'];
	
	// 通过 json_decode 可以将一个特定格式的字符串
	// 转成 PHP 的数组或对象
	$obj = json_decode($_GET['test']);

	// var_dump($obj);

	echo $obj->name;
	echo $obj->age;

	// 
	// $arr = array(
	// 	array('name'=>'小明', 'age'=>16),
	// 	array('name'=>'小明', 'age'=>16),
	// 	array('name'=>'小明', 'age'=>16),
	// 	array('name'=>'小明', 'age'=>16),
	// 	array('name'=>'小明', 'age'=>16),
	// 	array('name'=>'小明', 'age'=>16)
	// );

	// 通过json_encode 可以将PHP的一个数组或对象
	// 转成 一个特定格式的 字符串（媒介）
	// echo json_encode($arr);