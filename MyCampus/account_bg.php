<?php
/**
 * Created by PhpStorm.
 * User: JIA12
 * Date: 24/10/2018
 * Time: 11:05
 */

$servername = "localhost";  //此处需填写正确的服务器名称
$username = "root";  //此处需填写正确的用户名
$password = "root";  //此处需填写正确的密码
$dbname = "stu_info";
?>
<?php
    session_start();
    $name = $_SESSION['username'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM login_tbl WHERE (username='$name')";
    $result = $conn->query($sql);
    while($row=$result->fetch_array()){
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['stu_name'];
        $_SESSION['stu_id']=$row['stu_id'];
        $_SESSION['school']=$row['college'];
        $_SESSION['major']=$row['major'];
        $_SESSION['bio']=$row['bio'];
    }
    header('location:account.php');
    $conn->close();
?>
