<?php
    $username = $_POST["username"];
    $password =md5($_POST["password"]);
    //链接数据库
    $link=mysqli_connect("localhost","root","root","p2p",3306);
    //3. 构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$password."'";
    //4. 执行sql语句
    //mysqli_query 成功true 失败false
    $result=mysqli_query($link,$sql);

    //5. 获取查询的结果集
    $rs=mysqli_fetch_assoc($result); //不为null就是账号密码正确，登录成功，反之就是账号或者密码不正确
    //var_dump($rs);

    //6. 根据是否执行成功返回json结果到前端
    if($rs!=null){
        $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
        //json_encode() 把关联数组转换为json格式
        echo json_encode($rsArray);

        //记录session对象
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
        echo json_encode($rsArray);
    }
?>