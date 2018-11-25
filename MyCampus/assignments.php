<<<<<<< HEAD
<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="course_info";

$conn = new mysqli($host, $user, $pwd, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET NAMES UTF8");

$sql="SELECT * FROM course_det ";
$mySQLi_result=$conn->query($sql);

if($mySQLi_result==false){
    echo ("SQL error");
    exit;
}

$rows = [];
while($row=$mySQLi_result->fetch_array()){
    $rows[]=$row;
}
//var_dump($rows);

$time=time();
?>


=======
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
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
		<p id="intro">your best course manager...</p>
		
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
<<<<<<< HEAD
            <style>
                .comment-data1 {color:red;font-style:italic;font-weight: bold;font-size:15px;}
                .comment-data2 {color:black;font-style:normal;font-weight:normal;font-size:15px;}
            </style>
=======
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

			<h3 id="comments">upcoming assignment</h3>

			<ol class="commentlist">

				<li class="alt" id="comment-63">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[0]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[0]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1542139745)?></p>
                    </div>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

				</li>

				<li id="comment-67">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[1]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[1]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1541939745)?></p>
                    </div>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

				</li>

				<li class="alt" id="comment-71">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[4]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[4]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1541839745  )?></p>
                    </div>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

				</li>

			</ol>

			<h3 id="comments_2">past assignment</h3>

			<ol class="commentlist">

				<li class="alt" id="comment-80">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[5]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[5]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1541735745)?></p>
                    </div>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

				</li>

				<li id="comment-81">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[6]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[6]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1541539789)?></p>
                    </div>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>

>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5
				</li>

				<li class="alt" id="comment-82">

<<<<<<< HEAD
                    <cite>
                        <span class="comment-data1">
                            <?php echo $rows[7]['courseName']; echo ":<br>";  ?>
                        </span>
                        <span class="comment-data2">
                            <?php  echo "<br>"; echo $rows[7]['Assignments']; ?>
                        </span>
                    </cite>

                    <div class="comment-text">
                        <p><?php  echo date('Y-m-d H:i:s',1541339777)?></p>
                    </div>

                </li>
=======
					<cite>
						<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />			-->
						<a href="course.php">Cloud Computing Technology</a> Chao Li <br />
						<span class="comment-data"><a href="#comment-63" title="">July 20th, 2019 at 8:08 am</a> </span>
					</cite>

					<div class="comment-text">
						<p>Apache Spark program</p>
					</div>

				</li>
>>>>>>> dc02c9c9049c02f180dd5dd7837cc541c22135b5

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
