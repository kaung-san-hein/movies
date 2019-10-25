<?php
	session_start();
	date_default_timezone_set('Asia/Yangon');
	if(!isset($_SESSION["user"])){
		header("location:index.php");
		exit();
	}
	$id=$_GET['id'];
	$date=$_GET['date'];
	include('connect.php');
	if(isset($_POST['submit1'])){
		$d=0;
		if(isset($_COOKIE['seat']))
		{
			foreach($_COOKIE['seat'] as $name => $value)
			{
				$d=$d+1;
			}
			$d=$d+1;
		}
		else
		{
			$d=$d+1;
		}
		$name=$_POST['name'];
		$time=$_POST['time'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$total=$price*$qty;
		$cinemano=$_POST['cinemano'];
		
		if(isset($_COOKIE['seat']))
		{
			$found=0;
			foreach($_COOKIE['seat'] as $name1 => $value)
			{
				$values11=explode("_",$value);
				
				if($name == $values11[0] && $date == $values11[1] && $time == $values11[2] && $price == $values11[4])
				{
					$found=$found+1;
					$qty=$values11[3]+$qty;
					
					$tb_qty;
					$tqty;
					$aqty;
					$res=mysqli_query($con,"select sum(qty) from payment where movie_name='$name' and cinema_no='$cinemano' and date='$date' and time='$time' and price='$price'");
					while($row=mysqli_fetch_array($res)){
						$tqty=$row['sum(qty)'];
					}
					$res2=mysqli_query($con,"select Qty from seat where cinema_no='$cinemano' and price='$price'");
					while($row2=mysqli_fetch_array($res2)){
						$aqty=$row2['Qty'];
					}
					$tb_qty=$aqty-$tqty;
					if($tb_qty < $qty)
					{
						?>
							<script type="text/javascript">
								alert("this much quantity not available");
							</script>
						<?php
					}
					else{
						$total=$values11[4]*$qty;
						setcookie("seat[$name1]",$name."_".$date."_".$time."_".$qty."_".$price."_".$total."_".$cinemano,time()+1800);
					}
				}
				
			}
			
			if($found==0)
			{
				$tb_qty;
				$tqty;
				$aqty;
				$res=mysqli_query($con,"select sum(qty) from payment where movie_name='$name' and cinema_no='$cinemano' and date='$date' and time='$time' and price='$price'");
				while($row=mysqli_fetch_array($res)){
					$tqty=$row['sum(qty)'];
				}
				$res2=mysqli_query($con,"select Qty from seat where cinema_no='$cinemano' and price='$price'");
				while($row2=mysqli_fetch_array($res2)){
					$aqty=$row2['Qty'];
				}
				$tb_qty=$aqty-$tqty;
					if($tb_qty < $qty)
					{
						?>
							<script type="text/javascript">
								alert("this much quantity not available");
							</script>
						<?php
					}
					else{
						setcookie("seat[$d]",$name."_".$date."_".$time."_".$qty."_".$price."_".$total."_".$cinemano,time()+1800);
					}
			}
		}
		if(!isset($_COOKIE['seat']))
		{
			$tb_qty;
			$tqty;
			$aqty;
			$res=mysqli_query($con,"select sum(qty) from payment where movie_name='$name' and cinema_no='$cinemano' and date='$date' and time='$time' and price='$price'");
			while($row=mysqli_fetch_array($res)){
				$tqty=$row['sum(qty)'];
			}
			$res2=mysqli_query($con,"select Qty from seat where cinema_no='$cinemano' and price='$price'");
			while($row2=mysqli_fetch_array($res2)){
				$aqty=$row2['Qty'];
			}
			$tb_qty=$aqty-$tqty;
			if($tb_qty < $qty)
			{
			?>
			<script type="text/javascript">
				alert("this much quantity not available");
			</script>
<?php
			}
			else{
				setcookie("seat[$d]",$name."_".$date."_".$time."_".$qty."_".$price."_".$total."_".$cinemano,time()+1800);
			}
		}
	}
	include('user_header.php');
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
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Booking Tickets</h2>	
				<?php
					$res=mysqli_query($con,"select movie.*,seat.price from movie left join seat on movie.cinema_no=seat.cinema_no where movie.id='$id'");
					$row=mysqli_fetch_array($res);
					if($row['cinema_no']==0){
						echo "Coming Soon!";
					}
					else{
				?>
				<form name="form1" action="" method="post" style="margin-bottom:none;" enctype="multipart/form-data" style="float: left;">
					<table class="detail">
						<tr>
							<td>Movie Name:</td>
							<td><input type="text" name="name" readonly value="<?php echo $row['name']; ?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Cinema No:</td>
							<td><input type="text" name="cinemano" readonly value="<?php echo $row['cinema_no']; ?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Time:</td>
							<td>
								<?php
									$date1=date('d/m/Y');
									$date2=$date;
									if($date1 == $date2){
								?>
								<select name="time" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
									<?php 
										$res=mysqli_query($con,"select * from time");
										while($row=mysqli_fetch_assoc($res)):
										$time = date('H:i:s',strtotime($row['time']));
										if($time > date('H:i:s')){
									?>
									<option value="<?php echo $row['time']; ?>"><?php echo $row['time']; ?></option>
									<?php 
										}
										endwhile; 
									?>
								</select>
								<?php 
									}
									else{
								?>
								<select name="time" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
									<?php 
										$res=mysqli_query($con,"select * from time");
										while($row=mysqli_fetch_assoc($res)):
									?>
									<option value="<?php echo $row['time']; ?>"><?php echo $row['time']; ?></option>
									<?php endwhile; ?>
								</select>
								<?php
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Price:</td>
							<td>
								<select name="price" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
									<?php
										$res2=mysqli_query($con,"select seat.price from movie left join seat on movie.cinema_no=seat.cinema_no where movie.id='$id'");
										while($row2=mysqli_fetch_assoc($res2)):
									?>
									<option><?php echo $row2['price']; ?></option>
									<?php endwhile; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Quantity of Seat:</td>
							<td><input type="text" name="qty" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="submit1" class="medium gray button" value="OK" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" /></td>
						</tr>
					</table>
				</form>
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
