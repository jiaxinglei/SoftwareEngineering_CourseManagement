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
                <li><a href="account.php">account</a></li>
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

            <!--下划线示范-->
            <!--<p>
         A <a href="mainpage.php">link</a>,
            <acronym title="this really isn't a very good description">acronym</acronym>,
            <strong>strong text</strong> and
            <del>deleted text</del>.
         </p>
         -->

            <!--一些格式的示范-->
            <!--
            <h3>Code</h3>
            <p><code>
            code-sample { <br />
            font-weight: bold;<br />
            font-style: italic;<br />
            }
            </code></p>

            <h3>Example Lists</h3>

            <ol>
                <li>Here is an example</li>
                <li>of an ordered list</li>
            </ol>

            <ul>
                <li>Here is an example</li>
                <li>of an unordered list</li>
            </ul>

            <dl>
            <dt>Definition title</dt>
            <dd>Definition description</dd>
            <dt>Definition title</dt>
            <dd>Definition description</dd>
         </dl>

            <h3>Blockquote</h3>

            <blockquote>
            <p>Beauty of style and harmony and grace and good rhythm
            depends on simplicity.</p>
            <p class="align-right"> - Plato</p>
            </blockquote>

            <h3>Headers</h3>

            <h1>H1 Heading</h1>
            <h2>H2 Heading</h2>
            <h3>H3 Heading</h3>
            <h4>H4 Heading</h4>

            <h3>Tabular Data</h3>
            <table>
                <tr>
                    <th><strong>post</strong> date</th>
                    <th>title</th>
                    <th>description</th>
                </tr>
                <tr>
                    <td>04.18.2008</td>
                    <td>Augue non nibh</td>
                    <td>Commodo <a href="course.php">metus</a> vestibulum hdhdh djdjdj djdjdj</td>
                </tr>
                <tr class="altrow">
                    <td>04.18.2008</td>
                    <td>Fusce ut diam</td>
                    <td>Purus in eget odio in sapien</td>
                </tr>
                <tr>
                    <td>04.18.2008</td>
                    <td>Augue non nibh</td>
                    <td>Adipiscing blandit </td>
                </tr>
                <tr class="altrow">
                    <td>04.18.2008</td>
                    <td>Sed vestibulum</td>
                    <td>Cras <a href="course.php">lobortis</a> commodo </td>
                </tr>
            </table>

            <h3>Contact Form</h3>

            <form action="course.php" method="get" id="contactform">

                <p>Send me a message</p>

                <p>
                    <label for="subject">Subject</label><br />
                 <select id="subject" name="subject" tabindex="1">
                       <option value="1">Option One</option>
                      <option value="2">Option Two</option>
                       <option value="3">Option Three</option>
                 </select>
                </p>

                <p>
                    <label for="name">Your Name</label><br />
                    <input id="name" name="name" value="Your Name" type="text" tabindex="2" />
                </p>

                <p>
                    <label for="email">Your Email Address</label><br />
                    <input id="email" name="email" value="Your Email" type="text" tabindex="3" />
                </p>

                <p>
                    <label for="message">Your Message</label><br />
                    <textarea id="message" name="message" rows="10" cols="20" tabindex="4"></textarea>
                </p>

                <p class="no-border">
                    <input class="button" type="submit" value="Submit" tabindex="5" />
                 <input class="button" type="reset" value="Reset" tabindex="6" />
                </p>

            </form>

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
