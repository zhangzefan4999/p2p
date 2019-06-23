<?php
    $username = $_POST["username"];
    $password =md5($_POST["password"]);
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    //链接数据库
    $link=mysqli_connect("localhost","root","root","p2p",3306);
    //3. 构造sql语句
    $sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."','".$mobile."','".$email."')";
    //4. 执行sql语句
    //mysqli_query 成功true 失败false
    $result=mysqli_query($link,$sql);
    //5. 根据是否执行成功返回json结果到前端
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
        //json_encode() 把关联数组转换为json格式
        echo json_encode($rsArray);
    }
    else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
        echo json_encode($rsArray);
    }
?>