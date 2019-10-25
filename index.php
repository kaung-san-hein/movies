<?php
	include('header.php');
	include('connect.php');
?>
    <div id="content">
    	<div id="rotator">
              <ul>
                    <li class="show"><img src="xres/images/jb2/14.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/15.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/16.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/17.jpg" width="861" height="379"  alt="" /></li>
              </ul>
			  
			  <div id="logo" style="left: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Login</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Username: <input type="text" name="username" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" name="submit1" class="medium gray button" value="Login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
					<?php
						if(isset($_POST['submit1'])){
							$res=mysqli_query($con,"select * from register where username='$_POST[username]' && password='$_POST[password]'");
							$row=mysqli_fetch_array($res);
							$sql=mysqli_num_rows($res);
							if($sql>0){
								$_SESSION['user']=true;
								$_SESSION['username']=$row['username'];
					?>
					<script type="text/javascript">
						window.location="dashboard.php";
					</script>
					<?php
							}
						}
					?>
				</div>
        </div>
		
    </div>
	<div id="featured">
        <div id="items">
            <div class="item"> <a href="#"><img src="xres/images/03_featured.jpg" alt="" width="173px" height="96px" /></a>
            <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><a href="#"><strong>Aircon Cinema</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</a></p>  
            </div>
            <div class="item"> <a href="#"><img src="xres/images/04_featured.jpg" alt="" width="173px" height="96px" /></a>
            <h3><a href="lodging.php">New Time</a></h3>
            <p><a href="lodging.php"><strong>From ble to bla Vice versa</strong><br />
			Spend a relaxing evening in our circa 1796 hotel, steeped in history. </a></p>  
			</div>
        </div>
    </div>
<?php
	include('footer.php');
?>
