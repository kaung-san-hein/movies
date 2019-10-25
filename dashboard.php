<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("location:index.php");
		exit();
	}
	include('user_header.php');
?>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Welcome To Movie Ticket Booking System</h2>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="book_ticket.php" style="color: #fff;text-decoration: none;">Book Ticket</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="my_booking.php" style="color: #fff;text-decoration: none;">My Bookings</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="my_account.php" style="color: #fff;text-decoration: none;">My Account</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="change_password.php" style="color: #fff;text-decoration: none;">Change Password</a></div>
				<div style="width: 800px;background: orangered;padding: 5px 5px 5px 10px;margin-bottom: 3px;border-radius: 5px;border: 1px solid #fff;font-family: Times New Roman;font-size:15px;"><a href="logout.php" style="color: #fff;text-decoration: none;">Logout</a></div>	
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
