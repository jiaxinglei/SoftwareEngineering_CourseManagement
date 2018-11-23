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
$dbname = "login";
?>
<?php
    $conn=mysqli_connect($servername,$username,$password);
    if(! $conn)
    {
        die ('connect error:'.mysqli_error($conn));
    }
    mysqli_select_db($conn,$dbname)or die("数据库访问错误");
?>

<!DOCTYPE html >

<html>

<head>

    <title>My Campus</title>

    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Erwin Aligam - styleshout.com" />
    <meta name="description" content="Site Description Here" />
    <meta name="keywords" content="keywords, here" />
    <meta name="robots" content="index, follow, noarchive" />
    <meta name="googlebot" content="noarchive" />

    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
    <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery2.min.js" type=""></script>
    <script src="js/zzsc.js" type=""></script>

</head>
<body>
<a href=" " class="cd-top">Top</a >
<!-- header starts-->
<div id="header-wrap"><div id="header" class="container_16">

    <h1 id="logo-text"><a href="course.php" title="">My Campus</a></h1>
    <p id="intro">the best course manager...</p>

    <!-- navigation -->
    <div  id="nav">
        <ul>
            <li><a href="mainpage.php">Home</a></li>
            <li id ="current"><a href="course.php">courses</a></li>
            <li><a href="assignments.php">assignments</a></li>
            <li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
            <li><a href="account.php">account</a></li>
        </ul>
    </div>

    <div id="header-image"></div>

    <!-- header ends here -->
</div></div>



<div id="content-outer"><div id="content-wrapper" class="container_16">

    <!-- left-columns starts -->
    <div id="left-columns" class="grid_4 alpha">

        <div class="sidemenu">
            <h3>Courses</h3>
            <ul>

                <!--courses 从数据库导入-->
                <?php
                    $sql = "select * from course_tbl ";
                    $result=mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($result);
                    for($i=0;$i<$num;$i++){
                        $row = mysqli_fetch_array($result);
                        $courseName=$row["courseName"];
                        $courseId=$row["courseId"];
                        echo "<li><a href='course/$courseId.php'>[".$courseId."] ".$courseName."</a></li>";
                    }
                ?>

            </ul>
            <!--<p><a class="all-course" href="course.php">see all</a></p>-->

        </div>

    </div>
    <!-- content starts -->

    <!-- main -->

        <head>
            <meta charset="UTF-8">
<!--            <title>一款清新的jQuery日历插件DEMO演示</title>-->
            <link rel="stylesheet" href="css/calendar.css">
        </head>
    <div id="main" class="grid_12">


        <h3>CLASS TABLE</h3>
        <h4>choose a course from the left column.</h4>

        <div id="calendar" class="calendar"></div>

        <script src="js/jquery.min.js"></script>
        <script src="js/calendar.js"></script>

        <div style="text-align:center;clear:both">
            <script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
            <script src="/follow.js" type="text/javascript"></script>
        </div>

    <!-- main ends -->
    </div>

    </div>
    <!-- contents end here -->
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
        <a onclick="showemail()">Contact us</a>
    </p>

</div>

</div>
<!-- footer ends here -->

</body>
</html>