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
						<th>Card Number</th>
						<th>Customer Name</th>
						<th>Movie Name</th>
						<th>Cinema No</th>
						<th>Date</th>
						<th>Time</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Total</th>
						<th>Booking Date</th>
						<th>Action</th>
					</tr>
					<?php
						$res=mysql_query("select payment.*,cinema.cinema_no from payment left join cinema on payment.cinema_no=cinema.id order by id desc");
						while($row=mysql_fetch_assoc($res)):
					?>
					<tr>
						<td><?php echo $row['card_number']; ?></td>
						<td><?php echo $row['customer_name']; ?></td>
						<td><?php echo $row['movie_name']; ?></td>
						<td><?php echo $row['cinema_no']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['total']; ?></td>
						<td><?php echo $row['booking_date']; ?></td>
						<td><a href="" style="color: #fff;text-decoration: none;">View</a>|<a href="" style="color: #fff;text-decoration: none;">Delete</a></td>
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
