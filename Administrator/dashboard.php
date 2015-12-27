<?php 
	require_once('../Config/Database.php');
	require_once("../".__ROOT__.'/header.php'); 

	session_start();
	if (empty($_SESSION['usernameGates']) && empty($_SESSION['passwordGates'])) { 
		header('location: ../Administrator');
	} ?>
	<div style="background-color:#dfdfdf; border-top:4px solid #337ab7;">
	<?php 
	require_once('navbar_admin.php');
	require_once('sidebar_admin.php'); ?>

<!-- CONTENT HERE -->
		
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                   <?php 
                   		$countPost = mysqli_query($connecDB, "SELECT count(*) as jumlah FROM data_post")or die(mysql_error());
                   		$j = mysqli_fetch_array($countPost);
                   		echo "<center><h1><font color='#E74C3C'><i class='glyphicon glyphicon-fire'></i></font> <font color='#2ECC71'>".$j['jumlah']."</font> posted</h1></center>";
                   ?>                   
                </div>
            </div>
		</div>

<!-- END OF CONTENT HERE -->
	</div>
</div>
<?php
	require_once("../".__ROOT__.'/footer.php'); ?>