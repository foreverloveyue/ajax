<?php

	header('Content-Type: text/xml; charset=utf-8');

	// 通过 PHP 可以将数据库中的数据取出

	// 然后 将数据动态生成 xml 文档

	// 再将文档返回

	echo file_get_contents('./xml-3.xml');