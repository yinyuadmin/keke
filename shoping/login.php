<?php
require_once 'db.php';

$sql = "select * from user where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
//var_dump($sql);die;
$data = select($sql);

$result = [];

if (isset($data) && $data != null) {
    $result = ['state' => true,  'msg' => '登入成功'];
} else {
    $result = ['state' => false, 'msg' => '密码或账号错误'];
}

echo json_encode($result);
