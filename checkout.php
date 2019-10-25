<?php
	session_start();
	include('connect.php');
	if(isset($_POST['submit1'])){
		if(isset($_COOKIE['seat'])){
			foreach($_COOKIE['seat'] as $name1 => $value)
			{
				$values11 = explode("_",$value);
								
					mysqli_query($con,"insert into payment values('','$_POST[cardnumber]','$_SESSION[username]','$values11[0]','$values11[6]','$values11[1]','$values11[2]','$values11[3]','$values11[4]','$values11[5]',now())");
			}
			foreach($_COOKIE['seat'] as $name => $value)
			{
				setcookie("seat[$name]","",time()-1800);
			}
		}
						
?>
<script type="text/javascript">
	window.location="dashboard.php";
</script>
<?php
	}
	if(isset($_COOKIE['seat']))
	{
		foreach($_COOKIE['seat'] as $name1 => $value){
			if(isset($_POST["delete$name1"]))
			{
				setcookie("seat[$name1]","",time()-1800);
				?>
					<script>
						window.location.href=window.location.href;
					</script>
				<?php
			}
		}
	}
	include('user_header.php');
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
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">You selected seats</h2>	
				<?php
						$d=0;
						if(isset($_COOKIE['seat']))
						{
							$d=$d+1;
						}
						if($d==0)
						{
							echo "empty selected seats";
							echo "<br>";echo "<br>";echo "<br>";echo "<br>";
						}
						else
						{
				?>
						<table class="detail" border="1">
							<tr>
								<th>Movie Name</th>
								<th>Cinema No</th>
								<th>Date</th>
								<th>Time</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Total</th>
								<th>Delete</th>
							</tr>
							<?php
								foreach($_COOKIE['seat'] as $name1 => $value)
								{
									$values11=explode("_",$value);	
							?>
								<tr>
									<td><?php echo $values11[0]; ?></td>
									<td><?php echo $values11[6]; ?></td>
									<td><?php echo $values11[1]; ?></td>
									<td><?php echo $values11[2]; ?></td>
									<td><?php echo $values11[3]; ?></td>
									<td><?php echo $values11[4]; ?></td>
									<td><?php echo $values11[5]; ?></td>
									<td><form action="" method="post">
										<input type="submit" name="delete<?php echo $name1; ?>" value="Del">
										</form>
									</td>
								</tr>
							<?php
								}
								$total=0;
								foreach($_COOKIE['seat'] as $name1 => $value)
								{
									$values11=explode("_",$value);
									$total=$total+$values11[5];
								}
							?>
								<tr>
									<td colspan="5" style="text-align: right;"><span style="background-color: black;">Total</span></td>
									<td><span style="background-color: black;"><?php echo $total; ?></span></td>
								</tr>
						</table>
				<?php
						}
				?>
				<br><br>
				<form action="" method="post">
					Card Number: <input type="text" name="cardnumber" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br><br>
					<input type="submit" name="submit1" class="medium gray button" value="Payment" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
				</form>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
