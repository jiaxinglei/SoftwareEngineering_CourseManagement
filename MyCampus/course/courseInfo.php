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

        <h1 id="logo-text"><a href="../mainpage.php" title="">My Campus</a></h1>
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
                    echo "<li><a href='courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                    $courseId = $row["CId2"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                    echo "<li><a href='courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                    $courseId = $row["CId3"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                    echo "<li><a href='courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                    $courseId = $row["CId4"];
                    $sql = "select * from course_det where (courseId='$courseId')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $rows = mysqli_fetch_array($result);
                    $courseName=$rows["courseName"];
                    echo "<li><a href='courseInfo.php?id=$courseId'>[" . $courseId . "] " . $courseName . "</a></li>";
                    ?>
                </ul>
                <!--<p><a class="all-course" href="course.php">see all</a></p>-->

            </div>


        </div>


        <!-- content starts -->
        <!-- content starts -->

        <!-- main -->
        <div id="main" class="grid_8">

            <?php
            $id=$_GET['id'];
            $sql = "select * from course_det where (courseId='$id')";
            $result=mysqli_query($conn,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            $rows = mysqli_fetch_array($result);
            $courseName=$rows["courseName"];
            echo "<h3 id=\"syllabus\"> [".$id."] ".$courseName."</h3>";
            ?>

<!--            <h3 id="syllabus">Syllabus</h3>-->

            <h4>MENU</h4>
<!--            <p class="postmeta">-->
            <ul>
                <li><a href="#prof">Professor</a></li>
                <li><a href="#intro">Introduction</a></li>
                <li><a href="#mid">Midterm</a></li>
                <li><a href="#fin">Final</a></li>
                <li><a href="#assg">Assignments</a></li>

            </ul>
<!--            </p>-->

            <?php
            $id=$_GET['id'];
            $sql = "select * from course_det where (courseId='$id')";
            $result=mysqli_query($conn,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            $row = mysqli_fetch_array($result);
            $courseName=$row["courseName"];
            $courseId=$row["courseId"];
            echo "<h4 id='prof'>professor:</h4> <p>{$row["professor"]}</p>";
            echo "<h4 id='intro'>Introduction:</h4><p>{$row["Introduction"]}</p>";
            echo "<h4 id='mid'>Midterm:</h4> <p>{$row["midterm"]}</p>";
            echo "<h4 id='fin'>Final:</h4> <p>{$row["final"]}</p>";
            echo "<h4 id='assg'>Assignments:</h4> <p>{$row["Assignments"]}</p>";
            ?>

            <!-- main ends -->


            <br>
            <br>
            <br>
            <br>
<!--            <form action="courseInfo.php?id=$id" method="post">-->
<!--                <a href="javascript:" class="reply_btn" >comment</a> <br>-->
<!--                <textarea name='comment' cols='40' rows='5'></textarea><br/>-->
<!--                <input type='submit' value='SUBMIT' />-->
<!--            </form>-->
<!--            <body>-->
<!--            <script type="text/javascript">-->
<!--                $(function(){-->
<!--                    //页面加载完毕后开始执行的事件-->
<!--                        $(".reply_btn").click(function(){-->
<!--                        $(".reply_textarea").remove();-->
<!--                        $(this).parent().append("" +-->
<!--                            "<form action=\"courseInfo.php\" method=\"post\">"+-->
<!--                            "<textarea name='comment' cols='40' rows='5'></textarea>" +-->
<!--                            "<br/>" +-->
<!--                            "<input type='submit' value='SUBMIT' />" +-->
<!--                            "</form>");-->
<!--                    });-->
<!--                });-->
<!--            </script>-->
<!--            </body>-->

            <?php
            $id=$_GET['id'];
            $_SESSION["id"]=$id;
            ?>

            <form action='../comment.php' method='post' id="commentlist">
                <label for="message">Comments</label><br>
                <table>
                    <textarea name='comment' cols='40' rows='5'></textarea>
                </table>
                <input class="button" type="submit" value="submit" name="submit">
                <br>
                <p></p>
                <table>
                    <?php
                    $sql = "select * from comment where (courseId='$id')";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $row=mysqli_fetch_array($result);
                    $i=0;
                    while($i<$result->num_rows){
                        echo "<p class='post-info'>Posted by {$row['username']}|{$row['date']}</p>";
                        echo "<p>{$row['content']}</p>";
                        $i++;
                    }
                    ?>
                </table>

            </form>


        </div>

        <!-- right-columns starts -->
        <!-- right-columns starts -->
        <div id="right-columns" class="grid_4 omega">

            <h3>INFO</h3>

            <div class="featured-post">

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
                        echo "<a href='courseInfo.php?id=$id'><h4>{$row['title']}</h4></a>";
                        echo "<p class=\"post-info\">Posted by {$row["uploader"]}|{$row["date"]}  </p> <p>{$row["info"]}</p>";
                        $i++;
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
        <a href="../mainpage.php">Home</a> |
        <a href="../help.html">Help</a> |
        <a href="mailto:mycampus@gmail.com">Contact us</a>
    </p>

</div>

</div>
<!-- footer ends here -->

</body>
</html>
</html>