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
            <h2>Personal Information:</h2>
            <!--此处需要导入学生信息-->
            <?php
                session_start();
                echo "<h4>Name: {$_SESSION['name']}<h4>";
                echo "<h4>Student Number: {$_SESSION['stu_id']}</h4>";
                echo "<h4>Academy: {$_SESSION['school']}</h4>";
                echo "<h4>Major: {$_SESSION['major']}</h4>";
            ?>
        </div>
    </div>
</div>


</body>
</html>
