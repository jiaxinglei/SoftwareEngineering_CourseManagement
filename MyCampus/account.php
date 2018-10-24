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

        <h1 id="logo-text"><a href="course.html" title="">My Campus</a></h1>
        <p id="intro">your best course manager...</p>

        <!-- navigation -->
        <div  id="nav">
            <ul>
                <li><a href="mainpage.html">Home</a></li>
                <li><a href="course.html">Courses</a></li>
                <li><a href="assignments.html">assignments</a></li>
                <li><a href="http://mail.sjtu.edu.cn">inbox</a></li>
                <li id="current"><a href="account.html">account</a></li>
            </ul>
        </div>

        <div id="header-image"></div>

        <form id="quick-search" action="course.html" method="get" >
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
                echo "<h4>Academy: {$_SESSION['college']}</h4>";
                echo "<h4>Major: {$_SESSION['major']}</h4>";
            ?>
        </div>
    </div>
</div>





<!--<p class="post-info">Posted by <a href="course.html">erwin</a> | Filed under <a href="course.html">templates</a>, <a href="course.html">internet</a>  </p>-->

<!--<p>[info 1]Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac <a href="course.html">convallis aliquam</a>, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo.</p>-->

<!--<p>-->
<!--[info 2]Donec mattis, purus nec placerat bibendum, <a href="course.html">dui pede condimentum</a>-->
<!--odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra-->
<!--condimentum, lorem tellus eleifend magna, <a href="course.html">eget fringilla velit</a> magna id neque. Curabitur vel urna.-->
<!--In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo.</p>-->

<!--<p>-->
<!--[info 3]Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum-->
<!--odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra-->
<!--condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna.-->
<!--In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo.-->
<!--</p>-->



<!--<h3 id="comments">3 Responses</h3>-->

<!--<ol class="commentlist">-->

<!--<li class="alt" id="comment-63">-->

<!--<cite>-->
<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />-->
<!--<a href="course.html">Erwin</a> Says: <br />-->
<!--<span class="comment-data"><a href="#comment-63" title="">July 20th, 2008 at 8:08 am</a> </span>-->
<!--</cite>-->

<!--<div class="comment-text">-->
<!--<p>Comments are great!</p>-->
<!--</div>-->

<!--</li>-->

<!--<li id="comment-67">-->

<!--<cite>-->
<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />-->
<!--admin Says: <br />-->
<!--<span class="comment-data"><a href="#comment-67" title="">July 20th, 2008 at 2:17 pm</a> </span>-->
<!--</cite>-->

<!--<div class="comment-text">-->
<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero.-->
<!--Suspendisse bibendum.</p>-->
<!--</div>-->

<!--</li>-->

<!--<li class="alt" id="comment-71">-->

<!--<cite>-->
<!--<img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />-->
<!--<a href="course.html">Erwin</a> Says: <br />-->
<!--<span class="comment-data"><a href="#comment-71" title="">July 20th, 2008 at 3:17 pm</a> </span>-->
<!--</cite>-->

<!--<div class="comment-text">-->
<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo.</p>-->
<!--</div>-->

<!--</li>-->

<!--</ol>-->

<!--<h3 id="respond">Leave a Reply</h3>-->

<!--<form action="course.html" method="post" id="commentform">-->

<!--<p>-->
<!--<label for="name">Name (required)</label><br />-->
<!--<input id="name" name="name" value="Your Name" type="text" tabindex="1" />-->
<!--</p>-->

<!--<p>-->
<!--<label for="email">Email Address (required)</label><br />-->
<!--<input id="email" name="email" value="Your Email" type="text" tabindex="2" />-->
<!--</p>-->

<!--<p>-->
<!--<label for="website">Website</label><br />-->
<!--<input id="website" name="website" value="Your Website" type="text" tabindex="3" />-->
<!--</p>-->

<!--<p>-->
<!--<label for="message">Your Message</label><br />-->
<!--<textarea id="message" name="message" rows="10" cols="20" tabindex="4"></textarea>-->
<!--</p>-->

<!--<p class="no-border">-->
<!--<input class="button" type="submit" value="Submit" tabindex="5" />-->
<!--</p>-->

<!--</form>-->

<!--&lt;!&ndash; main ends &ndash;&gt;-->
<!--</div>-->

<!-- left-columns starts -->
<!--<div id="left-columns" class="grid_8">-->

<!--<div class="grid_4 alpha">-->

<!--<div class="sidemenu">-->
<!--<h3>Sidebar Menu</h3>-->
<!--<ul>-->
<!--<li><a href="course.html">Home</a></li>-->
<!--<li><a href="course.html#TemplateInfo">TemplateInfo</a></li>-->
<!--<li><a href="mainpage.html">Style Demo</a></li>-->
<!--<li><a href="assignments.html">Blog</a></li>-->
<!--<li><a href="http://www.styleshout.com/">More Free Templates</a></li>-->
<!--<li><a href="http://www.4templates.com/?aff=ealigam">Premium Templates</a></li>-->
<!--</ul>-->
<!--</div>-->

<!--<div class="sidemenu">-->
<!--<h3>Links</h3>-->
<!--<ul>-->
<!--<li><a href="http://www.PDPhoto.org/">PDPhoto</a></li>-->
<!--<li><a href="http://www.alistapart.com">Alistapart</a></li>-->
<!--<li><a href="http://960.gs/">960 Grid System</a></li>-->
<!--<li><a href="http://www.freephotos.se/">FreePhotos.se</a></li>-->
<!--</ul>-->
<!--</div>-->

<!--<div class="sidemenu">-->
<!--<h3>Sponsors</h3>-->
<!--<ul>-->
<!--<li><a href="http://themeforest.net?ref=ealigam">ThemeForest <br /><span>Your Choice for Site Templates, Wordpress, Joomla and CMS Themes</span></a></li>-->
<!--<li><a href="http://www.4templates.com/?aff=ealigam">4templates <br /><span>Low Cost Hi-Quality Templates</span></a></li>-->
<!--<li><a href="http://store.templatemonster.com?aff=ealigam">TemplateMonster <br /><span>Delivering the Best Templates on the Net!</span></a></li>-->
<!--<li><a href="http://tinyurl.com/3cgv2m">Text Link Ads <br /><span>Monetized your website</span></a></li>-->
<!--<li><a href="http://www.fotolia.com/partner/114283">Fotolia <br /><span>Free stock images or from $1</span></a> </li>-->
<!--<li><a href="http://www.dreamhost.com/r.cgi?287326">Dreamhost <br /><span>Premium webhosting</span></a></li>-->
<!--</ul>-->
<!--</div>-->

<!--<h3>Wise Words</h3>-->
<!--<p>-->
<!--&quot;Beauty of style and harmony and grace and good rhythm-->
<!--depends on simplicity.&quot; </p>-->

<!--<p class="align-right"> - Plato</p>-->

<!--<h3>Support Styleshout</h3>-->
<!--<p>-->
<!--If you are interested in supporting my work and would like to contribute, you are-->
<!--welcome to make a small donation through the-->
<!--<a href="http://www.styleshout.com/">donate link</a> on my website - it will-->
<!--be a great help and will surely be appreciated.</p>-->

<!--</div>-->

<!--<div class="grid_4 omega">-->

<!--<h3>Featured</h3>-->

<!--<div class="featured-post">-->

<!--<h4><a href="course.html">Lorem ipsum dolor sit</a></h4>-->
<!--<p class="post-info">Posted by <a href="course.html">erwin</a> on 09/26/08 </p>-->
<!--<p>-->
<!--<a href="http://getfirefox.com/"><img src="images/image.gif" width="160" height="100" alt="firefox" class="float-left" /></a>-->
<!--Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum-->
<!--pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.-->
<!--Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.-->
<!--Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus-->
<!--a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.-->
<!--</p>-->

<!--<p><a class="more-link" href="course.html">continue reading</a></p>-->

<!--</div>-->

<!--<div class="featured-post">-->

<!--<h4><a href="course.html">Lorem ipsum dolor sit</a></h4>-->
<!--<p class="post-info">Posted by <a href="course.html">erwin</a> on 09/26/08 </p>-->
<!--<p>-->
<!--Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum-->
<!--pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.-->
<!--Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.-->
<!--Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus-->
<!--a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.-->
<!--</p>-->

<!--<p><a class="more-link" href="course.html">continue reading</a></p>-->

<!--</div>-->

<!--<div class="featured-post">-->

<!--<h4><a href="course.html">Lorem ipsum dolor sit</a></h4>-->
<!--<p class="post-info">Posted by <a href="course.html">erwin</a> on 09/26/08 </p>-->
<!--<p>-->
<!--Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum-->
<!--pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.-->
<!--Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.-->
<!--Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus-->
<!--a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.-->
<!--</p>-->

<!--<p><a class="more-link" href="course.html">continue reading</a></p>-->

<!--</div>-->

<!--</div>-->

<!--&lt;!&ndash; end left-columns &ndash;&gt;-->
<!--</div>-->

<!--&lt;!&ndash; contents end here &ndash;&gt;-->
<!--</div></div>-->

<!--&lt;!&ndash; footer starts here &ndash;&gt;-->
<!--<div id="footer-wrapper" class="container_16">-->

<!--<div id="footer-content">-->

<!--<div class="grid_8">-->

<!--<h3>Resource Links</h3>-->
<!--<p>-->
<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum-->
<!--odio, ac blandit ante orci ut diam. <a href="course.html">Read more...</a>-->
<!--</p>-->

<!--<ul class="footer-list">-->
<!--<li><a href="http://themeforest.net?ref=ealigam">ThemeForest - <span>Your Choice for Site Templates &amp; Wordpress Themes</span></a></li>-->
<!--<li><a href="http://www.cssmania.com/">CSSMania - <span>CSS Design Showcase</span></a></li>-->
<!--<li><a href="http://www.alistapart.com/">AListApart - <span>For People Who Make Websites</span></a></li>-->
<!--<li><a href="http://www.psdtuts.com/">PSDTuts.com - <span>Photoshop Tutorials And Links</span></a></li>-->
<!--<li><a href="http://www.pdphoto.org/">PDPhoto.org - <span>Public Domain Photos</span></a></li>-->
<!--<li><a href="http://www.freephotos.se/">FreePhotos.se - <span>Free &amp; Public Domain Photos</span></a></li>-->
<!--<li><a href="http://www.fotolia.com/partner/114283">Fotolia - <span>Free stock images or from $1</span></a></li>-->
<!--<li><a href="http://www.4templates.com/?aff=ealigam">4templates - <span>Low Cost Hi-Quality Templates</span></a></li>-->
<!--</ul>-->

<!--</div>-->

<!--<div class="grid_8">-->

<!--<h3>Image Gallery </h3>-->
<!--<p class="thumbs">-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--<a href="course.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
<!--</p>-->

<!--<h3>About</h3>-->
<!--<p>-->
<!--<a href="http://getfirefox.com/"><img src="images/gravatar.jpg" width="40" height="40" alt="firefox" class="float-left" /></a>-->
<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu-->
<!--posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum-->
<!--odio, ac blandit ante orci ut diam.</p>-->
<!--<p>-->
<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.-->
<!--Cras id urna. <a href="course.html">Learn more...</a></p>-->

<!--</div>-->

<!--</div>-->

<!--<div id="footer-bottom">-->

<!--<p class="bottom-left">-->
<!--&nbsp; &copy;2008 All your copyright info here &nbsp; &nbsp;-->
<!--Design by : <a href="http://www.styleshout.com/">styleshout</a>-->
<!--</p>-->

<!--<p class="bottom-right" >-->
<!--<a href="course.html">Home</a> |-->
<!--<a href="course.html">Sitemap</a> |-->
<!--<a href="course.html">RSS Feed</a> |-->
<!--<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |-->
<!--<a href="http://validator.w3.org/check/referer">XHTML</a>-->
<!--</p>-->

<!--</div>-->


<!-- footer ends here -->

</body>
</html>
