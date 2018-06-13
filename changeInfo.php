<?php

//DBを選択してコネクト
$link = mysqli_connect("localhost" , "root" , "root" , "sample");
if (mysqli_connect_errno() > 0){
  echo "接続に失敗しました";
  exit;
} else {
//	echo "connect and use success!<br>";
}

$id = $_POST['id'];
$password = $_POST['password'];
$oldId = $_POST['oldId'];

$sql = "UPDATE user2 set id = '" . $id . "',";
$sql .= "password ='" . $password . "' ";
$sql .= "where id = '" . $oldId . "'";

$result = mysqli_query($link, $sql);

if (!$result) {
	$sql_error = $link->error;
	echo 'select failed.<br>';
	error_log($sql_error);
	die($sql_error);
} else {
  echo "更新完了しました。";

}


mysqli_close($link);


 ?>
