<?php
/**
 * Created by PhpStorm.
 * User: Jia Xinglei
 * Date: 17/10/2018
 * Time: 15:48
 */

$servername = "localhost";  //此处需填写正确的服务器名称
$username = "root";  //此处需填写正确的用户名
<<<<<<< HEAD
$password = "";  //此处需填写正确的密码
$dbname = "course_info";
?>
<?php
    $conn = new mysqli($servername, $username, $password, $dbname);
=======
$password = "root";  //此处需填写正确的密码
$dbname = "login";
?>
<?php
    $conn=mysqli_connect($servername,$username,$password);
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
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

    <script src="js/jquery2.min.js" type=""></script>
    <script src="js/zzsc.js" type=""></script>

</head>
<body>

<!-- header starts-->
<div id="header-wrap"><div id="header" class="container_16">

        <h1 id="logo-text"><a href="course.php" title="">My Campus</a></h1>
        <p id="intro">the best course manager...</p>

        <!-- navigation -->
        <div  id="nav">
            <ul>
                <li id ="current"><a href="mainpage.php">Home</a></li>
                <li><a href="course.php">courses</a></li>
                <li><a href="assignments.php">assignments</a></li>
                <li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
<<<<<<< HEAD
                <li><a href="account_bg.php">account</a></li>
=======
                <li><a href="account.php">account</a></li>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
                <li><a href="help.html">help</a></li>
            </ul>
        </div>

        <div id="header-image"></div>



        <!-- header ends here -->
    </div></div>



<div id="content-outer"><div id="content-wrapper" class="container_16">

        <!-- left-columns starts -->
        <!-- left-columns starts -->
        <div id="left-columns" class="grid_4 alpha">

            <div class="sidemenu">
                <h3>Courses</h3>
                <ul>

                    <?php
<<<<<<< HEAD
                    session_start();
                    $major=$_SESSION["major"];
                    $sql = "select * from major where (major='$major')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $row = mysqli_fetch_array($result);
                    $courseId = $row["CId1"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                        echo "<li><a href='course/courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                        $courseId = $row["CId2"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                        echo "<li><a href='course/courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                        $courseId = $row["CId3"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                        echo "<li><a href='course/courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                        $courseId = $row["CId4"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                        echo "<li><a href='course/courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
=======
                    $sql = "select * from course_tbl ";
                    $result=mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($result);
                    for($i=0;$i<$num;$i++){
                        $row = mysqli_fetch_array($result);
                        $courseName=$row["courseName"];
                        $courseId=$row["courseId"];
                        echo "<li><a href='course/$courseId.php'>[".$courseId."] ".$courseName."</a></li>";
                    }
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
                    ?>

                </ul>
            </div>

        </div>


        <!-- content starts -->
        <!-- content starts -->

        <!-- main -->
        <div id="main" class="grid_8">

            <h3><a href="course.php">INFO 1</a></h3>

            <p class="post-info">Posted by <a href="course.php">erwin</a> | Filed under <a href="course.php">templates</a>, <a href="course.php">internet</a>  </p>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
            </p>

            <!--
            <p class="postmeta">
            <a href="course.php" class="readmore">Read more</a> |
            <a href="course.php" class="comments">Comments (3)</a> |
            <span class="date">July 20, 2008</span>
            </p>
            -->

            <h3><a href="course.php">INFO 2</a></h3>

            <p class="post-info">Posted by <a href="course.php">erwin</a> | Filed under <a href="course.php">templates</a>, <a href="course.php">internet</a>  </p>

            <p><a href="http://getfirefox.com/"></a>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
            </p>

            <h3><a href="course.php">INFO 3</a></h3>

            <p class="post-info">Posted by <a href="course.php">erwin</a> | Filed under <a href="course.php">templates</a>, <a href="course.php">internet</a>  </p>

            <p><a href="http://getfirefox.com/"></a>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
            </p>


        <!-- main ends -->
        </div>


        <!-- right-columns starts -->
        <!-- right-columns starts -->
        <div id="right-columns" class="grid_4 omega">

            <h3>To-Do List</h3>

            <div class="featured-post">

                <h4><a href="course.php">[CS101]Homework 2</a></h4>
                <p class="post-info">Posted by <a href="course.php">erwin</a><br>due on 09/26/08 </p>
                <p>
                    <a href="http://getfirefox.com/"></a>
                    Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
                </p>

                <p><a class="more-link" href="course.php">more</a></p>

            </div>

            <div class="featured-post">

                <h4><a href="course.php">[IS202]Project 1</a></h4>
                <p class="post-info">Posted by <a href="course.php">erwin</a><br>due on 09/26/08 </p>
                <p>
                    Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
                </p>

                <p><a class="more-link" href="course.php">more</a></p>

            </div>



            <h3>Coming Up</h3>

            <div class="featured-post">
                <div class="featured-post">

                    <h4><a href="course.php">Discussion</a></h4>
                    <p class="post-info">due on 09/26/08 </p>
                    <p>
                        Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
                    </p>

                    <p><a class="more-link" href="course.php">more</a></p>

                </div>
            </div>



            <!-- end left-columns -->
        </div>

        <!-- contents end here -->
    </div></div>


<head>
    <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
</head>

<a href=" " class="cd-top">Top</a>

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
