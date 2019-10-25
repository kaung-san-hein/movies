<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
		exit();
	}
	include('header.php');
	include('connect.php');
?>
 <div id="content">
    	
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
				<div id="logo" style="left: 300px; height: auto; top: 23px; width: 260px; position: relative; z-index:4;">
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Change Password</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form name="form1" action="" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Password: <input type="password" name="password" onchange="if(this.checkValidity()) form1.cpassword.pattern=this.value;" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">Confirm Password: <input type="password" name="cpassword" title="password and confirm password must be matched" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" name="submit1" class="medium gray button" value="Change Password" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
					<?php
						if(isset($_POST['submit1'])){
							mysql_query("update admin set password='$_POST[password]' where name='$_SESSION[name]'");
					?>
					<script type="text/javascript">
						window.location="index.php";
					</script>
					<?php
							}
					?>
				</div>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
    </div>
 <?php
	include('footer.php');
 ?>
