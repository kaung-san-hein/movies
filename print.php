<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print and present this details upon booking the movie tickets<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php
include('connect.php');
$id=$_GET['id'];
$res = mysqli_query($con,"SELECT * FROM payment WHERE id='$id'");
$row = mysqli_fetch_array($res);
?>
<table>
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
</table>
</div>
<a href="index.php">Home</a>