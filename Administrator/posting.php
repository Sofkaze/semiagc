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
                    Posting
                </div>
                <div class="panel-body">
                   <form action="<?php echo $baseurl; ?>Machine/record.php" method="post">
                   		<textarea class="form-control" rows="7" name="keyword" placeholder="Just Input Your Keyword" required></textarea>
                   		<br />
                   		<center><button type="submit" class="btn btn-primary" name="go_post"><i class="glyphicon glyphicon-fire"></i> Blez!</button></center>
                   </form>
                </div>
            </div>
		</div>

<!-- END OF CONTENT HERE -->
	</div>
</div>
<?php
	require_once("../".__ROOT__.'/footer.php'); ?>