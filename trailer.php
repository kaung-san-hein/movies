<?php
	include('header.php');
	include('connect.php');
?>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">
				<?php
					$id=$_GET['id'];
					$res=mysqli_query($con,"select * from movie where id='$id'");
					$row=mysqli_fetch_array($res);
				?>
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Trailer Of <?php echo $row['name']; ?></h2>
				<table>
					<tr>
						<td>
							<iframe width="560" height="315" src="<?php echo $row['trailer_embed']; ?>" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
							<img src="admin/video_images/<?php echo $row['photo']; ?>" width="200px" height="315px" style="margin: 0px 10px;">
						</td>
					</tr>
				</table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
