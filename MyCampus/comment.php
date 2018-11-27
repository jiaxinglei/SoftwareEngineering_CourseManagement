<?php
/**
 * Created by PhpStorm.
 * User: Jia Xinglei
 * Date: 17/10/2018
 * Time: 15:48
 */

$servername = "localhost";  //此处需填写正确的服务器名称
$username = "root";  //此处需填写正确的用户名
$password = "root";  //此处需填写正确的密码
$dbname = "course_info";
?>

<?php
/**
 * Created by PhpStorm.
 * User: qinzzz
 * Date: 2018/11/27
 * Time: 下午9:58
 */
            if(isset($_POST["submit"]))
            {
                $conn=mysqli_connect($servername,$username,$password);
                if(! $conn)
                {
                    die ('connect error:'.mysqli_error($conn));
                }
                mysqli_select_db($conn,$dbname)or die("数据库访问错误");
                $com = $_POST["comment"];

                session_start();
                $user = $_SESSION["username"];
                $id=$_SESSION['id'];
                if($com == "")
                {
                    echo "<script>alert('请输入评论！'); history.go(-1);</script>";
                }
                else
                {
                    $sql = "INSERT INTO comment ".
                        "(username,content,date,courseId) ".
                        "VALUES ".
                        "('$user','$com',NOW(),'$id')";

                    $retval = mysqli_query( $conn, $sql );
                    if(! $retval )
                    {
                        die('提交失败: ' . mysqli_error($conn));
                    }
                    echo "<script>alert('提交成功');window.location.href='course.php';</script>";
                    mysqli_close($conn);
                }
            }
            ?>