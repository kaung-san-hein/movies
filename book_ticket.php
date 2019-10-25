<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("location:index.php");
		exit();
	}
	include('user_header.php');
	include('connect.php');
?>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Booking Tickets</h2>
				<form name="form1" action="" method="post" style="margin-bottom:none;" enctype="multipart/form-data" style="float: left;">
					<table class="detail">
						<tr>
							<td>Date:</td>
							<td><input type="text" required class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="submit1" class="medium gray button" value="OK" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" /></td>
						</tr>
					</table>
				</form>
				
				<?php
						if(isset($_POST['submit1'])){
							if($_POST['date']!=""){
						$res=mysqli_query($con,"select * from movie");
						while($row=mysqli_fetch_assoc($res)):
				?>
				<div style="float: left;width: 230px;padding: 5px auto;margin: 3px;border: 1px solid white;margin-left: 30px;">
					<center>
					<p style="padding: 5px 13px;"><?php echo $row['name']; ?></p>
					<img src="admin/video_images/<?php echo $row['photo']; ?>" width="190px" height="250px">
					<a href="booking_ticket.php?id=<?php echo $row['id']; ?>&date=<?php echo $_POST['date']; ?>" style="display: block;border: 1px solid #fff;background: black;color: #fff;text-decoration: none;padding: 5px 10px;">Book Ticket</a>
					</center>
				</div>
				<?php 
					endwhile; 
					}
					}
				?>	
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
