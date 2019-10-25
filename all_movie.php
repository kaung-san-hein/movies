<?php
	include('header.php');
	include('connect.php');
?>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">All Available Movies</h2>
				<?php
					$res=mysqli_query($con,"select * from movie");
					while($row=mysqli_fetch_assoc($res)):
				?>
				<div style="float: left;width: 230px;padding: 5px auto;margin: 3px;border: 1px solid white;margin-left: 25px;">
					<p style="padding: 5px 13px;"><?php echo $row['name']; ?></p>
					<a href="movie_detail.php?id=<?php echo $row['id']; ?>" style="padding: 13px;"><img src="admin/video_images/<?php echo $row['photo']; ?>" width="190px" height="250px"></a>
					<p style="padding: 5px 13px;"><?php echo $row['description']; ?></p>
					<a href="movie_detail.php?id=<?php echo $row['id']; ?>" style="display: block;border: 1px solid #fff;background: black;color: #fff;text-decoration: none;padding: 5px 10px;">Read More</a>
				</div>
				<?php endwhile; ?>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
