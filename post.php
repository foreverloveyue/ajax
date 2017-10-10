<?php


	// echo $_POST['name'] . ', 今年' . $_POST['age'] . '岁了!';

	// 当以不同的方式向服务端发送数据
	// 服务端需要以不同的方式进行接收

	// $_POST 专门是用来处理 Content-Type: application/x-www-form-urlencoded

	// 通过 file_get_contents 可以进行接收
	
	// var_dump(file_get_contents('php://input'));