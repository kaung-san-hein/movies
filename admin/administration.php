<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
		exit();
	}
	include('header.php');
?>
 <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Administration</h2>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="add_movie.php" style="color: #fff;text-decoration: none;">Add Movie</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="add_certificate.php" style="color: #fff;text-decoration: none;">Add Certificate</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="add_language.php" style="color: #fff;text-decoration: none;">Add Language</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="add_movietype.php" style="color: #fff;text-decoration: none;">Add Movie Type</a></div>	
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
