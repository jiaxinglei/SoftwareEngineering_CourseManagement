<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Erwin Aligam - styleshout.com" />
    <meta name="description" content="Site Description Here" />
    <meta name="keywords" content="keywords, here" />
    <meta name="robots" content="index, follow, noarchive" />
    <meta name="googlebot" content="noarchive" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
</head>


<body>

<h3>Get your account in a minute!</h3>

<form action="signup.php" method="post">
    <table>
        id: <input type="text" name="username">
    </table>
    <table>
        password: <input type="password" name="password">
    </table>
    <table>
        real name: <input type="text" name="realName">
    </table>
    <table>
        student number: <input type="text" name="stuNum">
    </table>
    <table>
        school:
        <select required name="school">
            <option value="">-school-</option>
            <option value="电院">电子信息与电气工程学院</option>
            <option value="机动">机械动力与工程学院</option>
            <option value="船院">船舶海洋学院</option>
            <option value="材料">材料学院</option>
            <option value="设计">设计学院</option>
        </select>
    </table>

    <table>
        major: <input type="text" name="major">
    </table>

    <input type="submit" value="SIGN UP" name="submit">
</form>

</body>


</html>

<?php
/**
 * Created by PhpStorm.
 * User: Jia Xinglei
 * Date: 17/10/2018
 * Time: 15:48
 */

     $servername = "localhost";
     $username = "root";
     $password = "jiaXINGlei123";
     $dbname = "stu_info";
?>

<?php

/**
 * Created by PhpStorm.
 * User: qinzzz
 * Date: 2018/10/9
 * Time: 下午10:31
 * from http://www.php.cn/php-weizijiaocheng-396432.html
 */

if(isset($_POST["submit"]))
{

    $conn=mysqli_connect($servername,$username,$password);
    if(! $conn)
    {
        die ('connect error:'.mysqli_error($conn));
    }

    mysqli_query($conn , "set names utf8");

    mysqli_select_db($conn,$dbname)or die("数据库访问错误");


    $user = $_POST["username"];
    $psw = $_POST["password"];
    $name=$_POST["realName"];
    $num=$_POST["stuNum"];
    $sch=$_POST["school"];
    $maj=$_POST["major"];
    if($user == "" || $psw == ""||$name==""||$num==""||$sch==""||$maj=="")
    {
        echo "<script>alert('请输入完整信息！'); history.go(-1);</script>";
    }
    else
    {
        $sql = "INSERT INTO login_tbl ".
            "(username,password,date,stu_name,stu_id,college,major) ".
            "VALUES ".
            "('$user','$psw',NOW(),'$name','$num','$sch','$maj')";



        mysqli_select_db( $conn, $dbname );
        $retval = mysqli_query( $conn, $sql );
        if(! $retval )
        {
            die('注册错误: ' . mysqli_error($conn));
        }
        echo "<script>alert('注册成功');window.location.href=\"login.html\";</script>";
        mysqli_close($conn);


    }
}


?>