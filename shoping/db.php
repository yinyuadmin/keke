<?php

function select($sql)
{
    ## 链接数据
    $db = new mysqli('localhost','root','root','shop');//sql连接地址,用户名,用户密码,数据库名

    // 设置查询出来的结果的编码格式
    $db->query('SET NAMES UTF8');
    // 查询
    $result = $db->query($sql);
//    var_dump($result);die;

    $data = null;
    // 获取数据
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
    }
