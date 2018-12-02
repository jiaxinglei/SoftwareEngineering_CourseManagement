<?php
/**
 * Created by PhpStorm.
 * User: Jia Xinglei
 * Date: 17/10/2018
 * Time: 15:48
 */


$servername = "bdm290150117.my3w.com";  //此处需填写正确的服务器名称
$username = "bdm290150117";  //此处需填写正确的用户名
<<<<<<< HEAD
$password = "RuanGong8012";  //此处需填写正确的密码
$dbname = "bdm290150117_db";
=======
$password = "RuanGong8012";  //此处需填写正确的密码
$dbname = "bdm290150117_db";
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
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

    <link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />
    <link href="../css/zzsc.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery2.min.js" type=""></script>
    <script src="../js/zzsc.js" type=""></script>

</head>
<body>
<a href=" " class="cd-top">Top</a >
<!-- header starts-->
<div id="header-wrap"><div id="header" class="container_16">

    <h1 id="logo-text"><a href="EI203.php" title="">My Campus</a></h1>
    <p id="intro">the best course manager...</p>

    <!-- navigation -->
    <div  id="nav">
        <ul>
            <li><a href="../mainpage.php">Home</a></li>
            <li id ="current"><a href="../course.php">courses</a></li>
            <li><a href="../assignments.php">assignments</a></li>
            <li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
            <li><a href="../account.php">account</a></li>
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
            <ul><!--courses 从数据库导入-->

                <?php
                    $sql = "select * from course_tbl ";
                    $result=mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($result);
                    for($i=0;$i<$num;$i++){
                        $row = mysqli_fetch_array($result);
                        $courseName=$row["courseName"];
                        $courseId=$row["courseId"];
                        echo "<li><a href='$courseId.php'>[".$courseId."] ".$courseName."</a></li>";
                    }
                ?>

            </ul>
            <!--<p><a class="all-course" href="course.php">see all</a></p>-->

        </div>


    </div>


    <!-- content starts -->
    <!-- content starts -->

    <!-- main -->
    <div id="main" class="grid_8">

        <h3 id="syllabus">Course Name</h3>

        <h4>professor: Mr. Zhang</h4>
        <h4>Introduction:</h4>
        <p>this course is a very important course for students in university.

        </p>
        <h4>Midterm:</h4>
        <p>November,11th</p>
        <h4>Final:</h4>
        <p>January,5th</p>



        <h3><a href="EI203.php">Assignments</a></h3>


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

            <h4><a href="EI203.php">[CS101]Homework 2</a></h4>
            <p class="post-info">Posted by <a href="EI203.php">erwin</a><br>due on 09/26/08 </p>
            <p>
                <a href="http://getfirefox.com/"></a>
                Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
            </p>

            <p><a class="more-link" href="EI203.php">more</a></p>

        </div>

        <div class="featured-post">

            <h4><a href="EI203.php">[IS202]Project 1</a></h4>
            <p class="post-info">Posted by <a href="EI203.php">erwin</a><br>due on 09/26/08 </p>
            <p>
                Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
            </p>

            <p><a class="more-link" href="EI203.php">more</a></p>

        </div>



        <h3>Coming Up</h3>

        <div class="featured-post">
            <div class="featured-post">

                <h4><a href="EI203.php">Discussion</a></h4>
                <p class="post-info">due on 09/26/08 </p>
                <p>
                    Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit
                </p>

                <p><a class="more-link" href="EI203.php">more</a></p>

            </div>
        </div>



        <!-- end left-columns -->
    </div>

    <!-- contents end here -->
</div></div>


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
        <a href="help.php">Help</a> |
        <a onclick="showemail()">Contact us</a>
    </p>

</div>

</div>
<!-- footer ends here -->

</body>
</html>
</html>