<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:index.php');
		exit();
	}
	include('user_header.php');
	$id=$_GET['id'];
	include('connect.php');
?>
<style>
	.detail{
		border-collapse: collapse;
		width: 50%;
		float: left;
	}
	.detail td{
		text-align: center;
		padding: 10px;
	}
</style>
 <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">System User Register Form</h2>
				<?php
					$res=mysqli_query($con,"select * from payment where id='$id'");
					$row=mysqli_fetch_array($res);
				?>
				<table class="detail" border="1">
					<tr>
						<td>Booking Refrence ID</td>
						<td><?php echo $row['id']; ?></td>
					</tr>
					<tr>
						<td>Booking Date</td>
						<td><?php echo $row['booking_date']; ?></td>
					</tr>
					
					<tr>
						<td>Movie Name</td>
						<td><?php echo $row['movie_name']; ?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php echo $row['customer_name']; ?></td>
					</tr>
					<tr>
						<td>Show Date</td>
						<td><?php echo $row['date']; ?></td>
					</tr>
					<tr>
						<td>Show Time</td>
						<td><?php echo $row['time']; ?></td>
					</tr>
					<tr>
						<td>Price</td>
						<td><?php echo $row['price']; ?></td>
					</tr>
					<tr>
						<td>Number of Seats</td>
						<td><?php echo $row['qty']; ?></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><?php echo $row['total']; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><a href="print.php?id=<?php echo $row['id']; ?>" style="border: 1px solid #fff;background: black;color: #fff;text-decoration: none;padding: 5px 10px;">Print</a></td>
					</tr>
				</table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
