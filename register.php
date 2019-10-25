<?php
	include('header.php');
	include('connect.php');
?>
    <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">
			<div id="logo" style="left: 300px; height: auto; top: 23px; width: 260px; position: relative; z-index:4;">
				<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Register</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form name="form1" action="" method="post" style="margin-bottom:none;" enctype="multipart/form-data">
							<span style="margin-right: 11px;">Name: <input type="text" name="name" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Username: <input type="text" name="username" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Password: <input type="password" name="password" required onchange="if(this.checkValidity()) form1.cpassword.pattern=this.value;" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Confirm Password: <input type="password" name="cpassword" required title="confirm password and password must be matched" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Mobile: <input type="text" name="mobile" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Email: <input type="text" name="email" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Date of Brith: <input type="text" name="dob" required placeholder="enter dd/mm/yy" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Address: <input type="text" name="address" required style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Photo: <input type="file" name="photo" required style="width: 165px; margin-left: 15px; padding:5px 10px;"/></span><br><br>
							<input type="submit" name="submit1" class="medium gray button" value="OK" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							<input type="reset" class="medium gray button" value="Cancel" style="height: 34px; margin-left: 15px; width: 70px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
						<?php
							if(isset($_POST['submit1'])){
								$v1=rand(1111,9999);
								$v2=rand(1111,9999);
								$v3=$v1.$v2;
								$v3=md5($v3);
								
								$photo=$_FILES['photo']['name'];
								$dst="./user_images/".$v3.$photo;
								$dst1=$v3.$photo;
								move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
								
								mysqli_query($con,"insert into register values('','$_POST[name]','$_POST[username]','$_POST[password]','$_POST[mobile]','$_POST[email]','$_POST[dob]','$_POST[address]','$dst1')");
						?>
						<script type="text/javascript">
							window.location="index.php";
						</script>
						<?php
							}
						?>
					</div>
			</div>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
