<?php
	include('header.php');
	include('connect.php');
?>
<style>
	.detail{
		border-collapse: collapse;
	}
	.detail td{
		padding: 5px;
	}
</style>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<?php
					$id=$_GET['id'];
					$res=mysqli_query($con,"select movie.*,certificate.certificate_name,language.language_name,movietype.typename from movie left join certificate on movie.movie_certificate=certificate.id left join language on movie.movie_language=language.id left join movietype on movie.movie_type=movietype.id where movie.id='$id'");
					$row=mysqli_fetch_array($res);
				?>
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Details Of <?php echo $row['name']; ?></h2>
				<img src="admin/video_images/<?php echo $row['photo']; ?>" width="250px" height="300px" style="float: left;margin: 0px 10px;">
				<table class="detail" border="1">
					<tr>
						<td style="width: 50%;">Name</td>
						<td style="width: 50%;"><?php echo $row['name']; ?><a href="trailer.php?id=<?php echo $row['id']; ?>" style="color: limegreen;font-size: 15px;">(View Trailer)</a></td>
					</tr>
					<tr>
						<td style="width: 50%;">Certificate</td>
						<td style="width: 50%;"><?php echo $row['certificate_name']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Type</td>
						<td style="width: 50%;"><?php echo $row['typename']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Language</td>
						<td style="width: 50%;"><?php echo $row['language_name']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Duration</td>
						<td style="width: 50%;"><?php echo $row['duration']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Director</td>
						<td style="width: 50%;"><?php echo $row['director']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Casts</td>
						<td style="width: 50%;"><?php echo $row['castings']; ?></td>
					</tr>
					<tr>
						<td style="width: 50%;">Description</td>
						<td style="width: 50%;"><?php echo $row['description']; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center;"><a href="book_ticket.php" style="border: 1px solid #fff;background: black;color: #fff;text-decoration: none;padding: 5px 10px;">Book Ticket</a></td>
					</tr>
				</table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
