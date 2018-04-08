<?php
require_once 'db.php';

$sql = "select * from goods";

$data = select($sql);

echo json_encode($data);
