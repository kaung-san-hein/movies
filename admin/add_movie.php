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
	}
	.detail td{
		text-align: left;
		padding: 5px;
	}
</style>
 <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<h2 class="accordion-header" style="height: 18px;margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Movie Add Form</h2>
				<form name="form1" action="" method="post" style="margin-bottom:none;" enctype="multipart/form-data">
					<table class="detail">
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Cinema No:</td>
							<td><select name="cinemano" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
								<option value="0">Coming Soon!</option>
								<?php 
									$res=mysql_query("select * from cinema");
									while($row=mysql_fetch_assoc($res)): 
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['cinema_no']; ?></option>
								<?php endwhile; ?>
							</select></td>
						</tr>
						<tr>
							<td>Movie Certificate:</td>
							<td><select name="certificate" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
								<?php 
									$res=mysql_query("select * from certificate");
									while($row=mysql_fetch_assoc($res)): 
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['certificate_name']; ?></option>
								<?php endwhile; ?>
							</select></td>
						</tr>
						<tr>
							<td>Movie Language:</td>
							<td><select name="language" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
								<?php 
									$res=mysql_query("select * from language");
									while($row=mysql_fetch_assoc($res)): 
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['language_name']; ?></option>
								<?php endwhile; ?>
							</select></td>
						</tr>
						<tr>
							<td>Movie Type:</td>
							<td><select name="type" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
								
								<?php 
									$res=mysql_query("select * from movietype");
									while($row=mysql_fetch_assoc($res)): 
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['typename']; ?></option>
								<?php endwhile; ?>
							</select></td>
						</tr>
						<tr>
							<td>Duration:</td>
							<td><input type="text" name="duration" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Director:</td>
							<td><input type="text" name="director" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Castings:</td>
							<td><input type="text" name="casting" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Release Date</td>
							<td><input type="text" name="releasedate" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Premier Date:</td>
							<td><input type="text" name="premierdate" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Trailer Embed:</td>
							<td><textarea cols="40" rows="7" name="trailer"></textarea></td>
						</tr>
						<tr>
							<td>Description:</td>
							<td><textarea cols="40" rows="7" name="description"></textarea></td>
						</tr>
						<tr>
							<td>Photo:</td>
							<td><input type="file" name="photo" required style="width: 165px; margin-left: 15px; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="submit1" class="medium gray button" value="OK" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							<input type="reset" class="medium gray button" value="Cancel" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" /></td>
						</tr>
					</table>
				</form>
					<?php
						if(isset($_POST['submit1'])){
							$v1=rand(1111,9999);
							$v2=rand(1111,9999);
							$v3=$v1.$v2;
							$v3=md5($v3);
								
							$photo=$_FILES['photo']['name'];
							$dst="./video_images/".$v3.$photo;
							$dst1=$v3.$photo;
							move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
							
							mysql_query("insert into movie values('','$_POST[name]','$_POST[certificate]','$_POST[language]','$_POST[type]','$_POST[duration]','$_POST[director]','$_POST[casting]','$_POST[releasedate]','$_POST[premierdate]','$_POST[trailer]','$_POST[description]','$dst1','$_POST[cinemano]')");
					?>
					<script type="text/javascript">
						window.location="add_movie.php";
					</script>
					<?php
						}
					?>	
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
