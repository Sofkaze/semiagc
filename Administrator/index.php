<?php 
	require_once('../Config/Database.php');
	require_once("../".__ROOT__.'/header.php'); ?>
<!-- CONTENT HERE -->

	<br /><br />
	<div class="col-md-12">
		<center><h3>LOGIN ADMINISTRATOR <br /><strong>GRAB MACHINE</strong></h3></center>
			<div class="col-md-4 col-md-offset-4">
			<?php 
		  		if (isset($_GET['login'])) {
		  			if ($_GET['login']=='false') {
		  				echo '<div class="alert alert-warning" role="alert">Failed to Login</div>';
		  			}
		  		}
		  	?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login via site or back to <a href="<?php  echo $baseurl; ?>" class="btn btn-success btn-xs">home</a></h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="<?php echo $baseurl; ?>../Machine/record.php" method="POST">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="do_login" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
		<div class="jarak"></div>

	</div>

</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once("../".__ROOT__.'/footer.php'); ?>