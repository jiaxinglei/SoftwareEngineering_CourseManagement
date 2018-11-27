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
$dbname = "stu_info";
?>
<?php
$conn=mysqli_connect($servername,$username,$password);
if(! $conn)
{
    die ('connect error:'.mysqli_error($conn));
}
mysqli_select_db($conn,$dbname)or die("数据库访问错误");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>MY CAMPUS</title>

    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Erwin Aligam - styleshout.com" />
    <meta name="description" content="Site Description Here" />
    <meta name="keywords" content="keywords, here" />
    <meta name="robots" content="index, follow, noarchive" />
    <meta name="googlebot" content="noarchive" />

    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />

</head>
<body>

<!-- header starts-->
<div id="header-wrap"><div id="header" class="container_16">

        <h1 id="logo-text"><a href="course.php" title="">My Campus</a></h1>
        <p id="intro">your best course manager...</p>

        <!-- navigation -->
        <div  id="nav">
            <ul>
                <li><a href="mainpage.php">Home</a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="assignments.php">assignments</a></li>
                <li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
                <li id="current"><a href="account.php">account</a></li>
                <li><a href="help.html">help</a></li>
            </ul>
        </div>

        <div id="header-image"></div>

        <form id="quick-search" action="course.php" method="get" >
            <p>
                <label for="qsearch">Search:</label>
                <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
                <input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
            </p>
        </form>

        <!-- header ends here -->
    </div></div>

<!-- content starts -->
<div id="content-outer"><div id="content-wrapper" class="container_16">

        <!-- main -->
        <div id="main" class="grid_8">
            <h3>Edit Personal Information:</h3>
            <form action="accountEdit.php" method="post">
            <table>
                <?php
                    @session_start();
                    $user = $_SESSION["username"];
                    echo "ID: <input type=\"text\" name=\"username\" value=\"$user\">";
                ?>
            </table>
            <table>
                Bio: <br>
                <?php
                    @session_start();
                    $bio = $_SESSION["bio"];
                    echo "<textarea name=\"bio\" rows=\"3\" cols=\"50\" placeholder=\"$bio\"></textarea>";
                ?>

            </table>

            <input class="button" type="submit" value="edit" name="submit">
            </form>

        </div>
    </div>
</div>

<div id="footer-bottom">

    <p class="bottom-left">
        &nbsp; &copy;2018 All copyright:
        Design by MYCAMPUS team
    </p>

    <script>
        function showemail(){
            alert('Contact us at: ' +
                'mycampus@sjtu.edu.cn')
        }
    </script>
    <p class="bottom-right" >
        <a href="mainpage.php">Home</a> |
        <a href="help.html">Help</a> |
        <a href="mailto:mycampus@gmail.com">Contact us</a>
    </p>

</div>

<?php
if(isset($_POST["submit"]))
{

    $user = $_POST["username"];
    $bio=$_POST["bio"];
    session_start();
    $id=$_SESSION["stu_id"];

    if($user == "" )
    {
        echo "<script>alert('请输入用户名！'); history.go(-1);</script>";
    }
    else
    {
        $sql = "SELECT * FROM stu_info WHERE (username='$user')";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<script>alert('用户名已被使用！'); history.go(-1);</script>";
        }
        else{
            $sql = "UPDATE login_tbl ".
                "SET username=$user,bio=$bio ".
                "WHERE stu_id=$id";

            $retval = mysqli_query( $conn, $sql );
            if(! $retval )
            {
                die('修改失败: ' . mysqli_error($conn));
            }
            echo "<script>alert('修改成功');window.location.href=\"account.php\";</script>";
            mysqli_close($conn);

        }

    }
}

?>

</body>
</html>
