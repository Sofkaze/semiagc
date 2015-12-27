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
                    About Author
                </div>
                <div class="panel-body">
                   <h1>Hello World $_$</h1>
                </div>
            </div>
		</div>

<!-- END OF CONTENT HERE -->
	</div>
</div>
<?php
	require_once("../".__ROOT__.'/footer.php'); ?>