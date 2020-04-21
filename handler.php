<?php
	require("connect.php");
	$pr = mysqli_query($d, "SELECT name FROM tovar1");
	while($arr = mysqli_fetch_assoc($pr))
	{
		$arr_new[] = $arr['name'];
	}
	echo json_encode($arr_new);
   	exit;
?>