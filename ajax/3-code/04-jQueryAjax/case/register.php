<?php
	
	header('Content-Type: application/json; charset=utf-8');
	// 服务端验证
	// echo '注册成功';

	// 真正的逻辑里要将数据插入到数据库
	// echo json_encode($_GET);

	// if() 服务端也验证

	$result = array(
		'code'=>10000,
		'msg'=>'注册成功',
		'result'=>'http://study.com'
	);

	echo json_encode($result);

	sleep(3);
?>