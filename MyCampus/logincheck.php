﻿<?php
/**
 * Created by PhpStorm.
 * User: Jia Xinglei
 * Date: 17/10/2018
 * Time: 15:48
<?php

/**

 * Created by PhpStorm.

 * User: Jia Xinglei

 * Date: 17/10/2018

 * Time: 15:48

 */


$servername = "bdm290150117.my3w.com";  //此处需填写正确的服务器名称
$username = "bdm290150117";  //此处需填写正确的用户名
$password = "RuanGong8102";  //此处需填写正确的密码
$dbname = "bdm290150117_db";

?>

<?php

    if(isset($_POST["submit"]))//只用submit存在才能执行

    {

     // Session需要先启动。

     @session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){

        $name = $_POST['username'];

        $pwd = $_POST['password'];

        //连接数据库

        $conn = new mysqli($servername, $username, $password, $dbname);

       if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        }

        //验证内容是否与数据库的记录吻合。

        $sql = "SELECT * FROM login_tbl WHERE (username='$name') AND (password='$pwd')";

        //执行上面的sql语句并将结果集赋给result。

        $result = $conn->query($sql);

        //判断结果集的记录数是否大于0

        if ($result->num_rows > 0) {

            $_SESSION["username"]=$name;

            $_SESSION["bio"]=$bio;

            while($row=$result->fetch_array()){

                $_SESSION['major']=$row['major'];

            }

            echo "<script>alert('登陆成功!');window.location.href='mainpage.php'</script>";

        }

         else {

            echo "用户名或密码错误，请重试";

            header("Refresh:1;url=login.html");

        }

        $conn->close();

}

}

?>
