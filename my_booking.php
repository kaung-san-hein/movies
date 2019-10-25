<?php
	session_start();
	include('user_header.php');
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
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">You have been booked tickets</h2>	
				<table class="detail" border="1">
					<tr>
						<th>Sr.No</th>
						<th>Movie Name</th>
						<th>Cinema No</th>
						<th>Date</th>
						<th>Time</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Total</th>
						<th>View</th>
					</tr>
				<?php
					$res=mysqli_query($con,"select payment.*,cinema.cinema_no from payment left join cinema on payment.cinema_no=cinema.id where customer_name='$_SESSION[username]'");
					while($row=mysqli_fetch_assoc($res)):
				?>
				<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['movie_name']; ?></td>
						<td><?php echo $row['cinema_no']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['total']; ?></td>
						<td><a href="booking_receipt.php?id=<?php echo $row['id']; ?>" style="color: #fff;text-decoration: none;">View</a></td>
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
