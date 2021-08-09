<!DOCTYPE html>
<?php
include './Database/sql.php';
$id = $_GET["id"];


$SelectAllcatg = $conn->query("SELECT * FROM categories");
$categories = $SelectAllcatg->fetchAll(PDO::FETCH_OBJ);


$SelectAllarr = $conn->query("SELECT * FROM articles WHERE categ_id=".$id);
$articles = $SelectAllarr->fetchAll(PDO::FETCH_OBJ);

?>
<html class="no-js" lang="en">
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Category Page - Abstract</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.php">Author</a>
	      </div>

		    <nav id="main-nav-wrap">

				<ul class="main-navigation sf-menu">
					<li><a href="index.php" title="">Home</a></li>									

					<li class="has-children current">
						<a href="single-standard.php" title="">Categories</a>
							<ul class="sub-menu">
								<?php foreach ( $categories as $categorie ){?>
								<li><a href="category.php?id=<?= $categorie->id?>"><?= $categorie->nom?></a></li>
								<?php } ?>
							</ul>
					</li>					
				</ul>

			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- page header
   ================================================== -->
   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
		   <?php foreach ($articles as $article) {  ?>
   			<h1>Category: <?= $article->title?> </h1>
			<?php }  ?>
   		</div>   		
   	</div>
   </section>

   
   <!-- masonry
   ================================================== -->
   <section id="bricks" class="with-top-sep">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
					  
	                  <img src="images/thumbs/diagonal-building.jpg" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Photography</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>

        	</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/ferris-wheel.jpg" alt="ferris wheel">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">This Is Another Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        	</article> <!-- end article -->

            <article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
                  <a href="single-audio.html" class="thumb-link">
	                  <img src="images/thumbs/concert.jpg" alt="concert">                      
                  </a>

                  <div class="audio-wrap">
                  	<audio id="player2" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Music</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a>This Is a Audio Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- /article -->

         	<article class="brick entry format-quote animate-this">

               <div class="entry-thumb">                  
	               <blockquote>
	                 	<p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

	                 	<cite>Dieter Rams</cite> 
	               </blockquote>	          
               </div>   

        		</article> <!-- end article -->

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a class="thumb-link">
	                  <img src="images/thumbs/shutterbug.jpg" alt="Shutterbug">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">html</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a>Photography Skills Can Improve Your Graphic Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a class="thumb-link">
	                  <img src="images/thumbs/usaf-rocket.jpg" alt="USAF rocket">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Mockup</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a>The 10 Golden Rules of Clean Simple Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->        	

        		<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                        <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="images/thumbs/gallery/work1.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work2.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work3.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
						<div class="entry-header">

							<div class="entry-meta">
								<span class="cat-links">
									<a href="#">Branding</a> 
									<a href="#">Wordpress</a>               				
								</span>			
							</div>

							<h1 class="entry-title"><a>Workspace Design Trends and Ideas.</a></h1>
							
						</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-link animate-this">

               <div class="entry-thumb">
                  <div class="link-wrap">
	                 	<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
	                 	<cite>
	                 		<a target="_blank">http://www.dreamhost.com</a>
	                 	</cite>
	               </div>	
               </div>               
               
        		</article> <!-- end article -->


         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a class="thumb-link">
	                  <img src="images/thumbs/diagonal-pattern.jpg" alt="Pattern">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a>You Can See Patterns Everywhere.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
                  <a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" data-lity>
	                  <img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Branding</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-video.html">This Is a Video Post Format.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/lighthouse.jpg" alt="Lighthouse">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">Design</a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Breathtaking Photos of Lighthouses.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/liberty.jpg" alt="Liberty">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">html</a>                	
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Designing With Black and White.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->


   </section> <!-- bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Abstract 2016</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>