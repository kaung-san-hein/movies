<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:index.php');
		exit();
	}
	include('user_header.php');
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
					$res=mysqli_query($con,"select * from register where username='$_SESSION[username]'");
					$row=mysqli_fetch_array($res);
				?>
				<table class="detail" border="1">
					<tr>
						<td>Name</td>
						<td><?php echo $row['name']; ?></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><?php echo $row['username']; ?></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><?php echo $row['mobile']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $row['email']; ?></td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<td><?php echo $row['date_of_brith']; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $row['address']; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><a href="#" style="border: 1px solid #fff;background: black;color: #fff;text-decoration: none;padding: 5px 10px;">Edit</a></td>
					</tr>
				</table>
				<img src="user_images/<?php echo $row['photo']; ?>" width="200" height="300" style="margin-left: 200px;">
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
