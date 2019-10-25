<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
		exit();
	}
	include('header.php');
	include('connect.php');
?>
<style>
	.detail{
		border-collapse: collapse;
		width: 100%;
	}
	.detail th{
		text-align: center;
		background-color: black;
		color: white;
	}
	.detail td{
		text-align: center;
		padding: 10px;
	}
</style>
 <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">All Movie Reports</h2>	
				<table class="detail" border="1">
					<tr>
						<th>Sr.No</th>
						<th>Image</th>
						<th>Name</th>
						<th>Cinema No</th>
						<th>Language</th>
						<th>Type</th>
						<th>Certificate</th>
						<th>Director</th>
						<th>Action</th>
					</tr>
					<?php
						$res=mysql_query("select movie.*,certificate.certificate_name,language.language_name,movietype.typename,cinema.cinema_no from movie left join certificate on movie.movie_certificate=certificate.id left join language on movie.movie_language=language.id left join movietype on movie.movie_type=movietype.id left join cinema on movie.cinema_no=cinema.id order by id desc");
						while($row=mysql_fetch_assoc($res)):
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><img src="video_images/<?php echo $row['photo']; ?>" width="70" height="100"></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['cinema_no']; ?></td>
						<td><?php echo $row['language_name']; ?></td>
						<td><?php echo $row['typename']; ?></td>
						<td><?php echo $row['certificate_name']; ?></td>
						<td><?php echo $row['director']; ?></td>
						<td><a href="" style="color: #fff;text-decoration: none;">Edit</a>|<a href="" style="color: #fff;text-decoration: none;">Delete</a></td>
					</tr>
					<?php endwhile; ?>
				</table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
