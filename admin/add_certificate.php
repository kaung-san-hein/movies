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
				<h2 class="accordion-header" style="height: 18px;margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Movie Certificate Entry Form</h2>
					<form name="form1" action="" method="post" style="margin-bottom:none;" enctype="multipart/form-data">
					<table class="detail">
						<tr>
							<td>Certificate Name:</td>
							<td><input type="text" name="name" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea cols="40" rows="10" name="description"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="submit1" class="medium gray button" value="OK" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							<input type="reset" class="medium gray button" value="Cancel" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" /></td>
						</tr>
					</table>
					</form>
					<?php
						if(isset($_POST['submit1'])){
							mysql_query("insert into certificate values('','$_POST[name]','$_POST[description]')");
					?>
					<script type="text/javascript">
						window.location="add_certificate.php";
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
