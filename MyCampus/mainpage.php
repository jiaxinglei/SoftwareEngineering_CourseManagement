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
    $conn = new mysqli($servername, $username, $password, $dbname);
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
<head>
    <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
</head>

<a href=" " class="cd-top">Top</a>
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
                <li><a href="account_bg.php">account</a></li>
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
                    ?>

                </ul>
            </div>

        </div>


        <!-- content starts -->
        <!-- content starts -->

        <!-- main -->
        <div id="main" class="grid_8">
            <?php
            $sql = "select * from info order by date DESC";
            $result=mysqli_query($conn,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            ?>

            <?php
            $i=0;$j=0;
            while($i<5 and $j<$result->num_rows){
                $row = mysqli_fetch_array($result);
                $sql2 = "select * from major where (CId1='{$row["courseId"]}' or CId2='{$row["courseId"]}' or CId3='{$row["courseId"]}' or CId4='{$row["courseId"]}') and major='{$_SESSION["major"]}'";
                $result2 =mysqli_query($conn,$sql2);
                $id=$row["courseId"];
                $j++;
                if($result2->num_rows>0) {
                    echo "<a href='course/courseInfo.php?id=$id'><h3>{$row["title"]}</h3></a>";
                    echo "<p class=\"post-info\">Posted by {$row["uploader"]}|{$row["date"]}  </p>";
                    echo"<p>{$row["info"]}</p>";
                    $i++;
                }
            }
            ?>



        <!-- main ends -->
        </div>


        <!-- right-columns starts -->
        <!-- right-columns starts -->
        <div id="right-columns" class="grid_4 omega">

            <h3>To-Do List</h3>

            <div class="featured-post">
                <?php
                    $sql="select * from assignments order by ddl ASC ";
                    $result=mysqli_query($conn,$sql);
                    $num=$result->num_rows;
                    $id=$row["courseId"];
                    for($i=0;$i<$num;$i++){
                        $row=mysqli_fetch_array($result);
                        $sql2="select * from major where (CId1='{$row["courseId"]}' or CId2='{$row["courseId"]}' or CId3='{$row["courseId"]}' or CId4='{$row["courseId"]}') and major='{$_SESSION["major"]}'";
                        $result2=mysqli_query($conn,$sql2);
                        if($result2->num_rows>0 and $row["ddl"]>date("Y-m-d h:i:s",time())){
                            echo "<a href='course/courseInfo.php?id=$id#assg'><h4>{$row['title']}</h4></a>";
                            echo "<p class=\"post-info\"> deadline:{$row["ddl"]}  </p> <p>{$row["content"]}</p>";
                        }
                    }
                ?>

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
        <a href="help.html">Help</a> |
        <a href="mailto:mycampus@gmail.com">Contact us</a>
    </p>

</div>

<!-- footer ends here -->

</body>
</html>
