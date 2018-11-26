<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="course_info";
?>
<?php
$conn=mysqli_connect($servername,$username,$password);
if(! $conn)
{
    die ('connect error:'.mysqli_error($conn));
}
mysqli_select_db($conn,$dbname)or die("数据库访问错误");
?>
<!DOCTYPE html>

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
    <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery2.min.js" type=""></script>
    <script src="js/zzsc.js" type=""></script>

</head>
<body>
<a href=" " class="cd-top">Top</a>
	<!-- header starts-->
	<div id="header-wrap"><div id="header" class="container_16">			
				
		<h1 id="logo-text"><a href="course.php" title="">My Campus</a></h1>
		<p id="intro">the best course manager...</p>
		
		<!-- navigation -->
		<div  id="nav">
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href="course.php">Courses</a></li>
				<li id="current"><a href="assignments.php">assignments</a></li>
				<li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
				<li><a href="account.php">account</a></li>
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

		<div id="left-columns" class="grid_4 alpha">

			<div class="grid_4 alpha">

				<div class="sidemenu">
					<h3>Sidebar Menu</h3>
					<ul>
						<li><a href="course.php">Assignments</a></li>
						<li><a href="course.php#TemplateInfo">Grade</a></li>
					</ul>
				</div>


			</div>



			<!-- end left-columns -->
		</div>
		<!-- main -->
		<div id="main" class="grid_8">

			<h3 id="comments">upcoming assignment</h3>

			<ol class="commentlist">

				<li class="alt" id="comment-63">

                    <?php
                    session_start();
                    $sql="select * from assignments order by ddl ASC ";
                    $result=mysqli_query($conn,$sql);
                    $num=$result->num_rows;
                    for($i=0;$i<$num;$i++){
                        $row=mysqli_fetch_array($result);
                        $sql2="select * from major where (CId1='{$row["courseId"]}' or CId2='{$row["courseId"]}' or CId3='{$row["courseId"]}' or CId4='{$row["courseId"]}') and major='{$_SESSION["major"]}'";
                        $result2=mysqli_query($conn,$sql2);
                        if($result2->num_rows>0 and $row["ddl"]>date("Y-m-d h:i:s",time())){
                            echo "<h4>{$row["title"]}</h4>";
                            echo "<p class=\"post-info\"> deadline:{$row["ddl"]}  </p> <p>{$row["content"]}</p>";
                        }
                    }
                    ?>

				</li>



			</ol>




			<!-- main ends -->
		</div>

		<!-- contents end here -->
	</div></div>

		<!-- left-columns starts -->

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
