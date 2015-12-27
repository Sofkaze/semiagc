<nav class="navbar navbar-default navbar-hr-top">
	  	<div class="container-fluid">
	    
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<div class="icon-nav"><img src="<?php echo $baseurl; ?>Assets/img/google_dev.png" width="20" /></div>
		      	<a class="navbar-brand" href="<?php echo $baseurl; ?>">Brand</a>
		      
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav">
		        	<li><a href="<?php echo $baseurl; ?>hot">Hot</a></li>
		      	</ul>
		      	<form class="navbar-form navbar-left" role="search" action="<?php echo $baseurl; ?>search/" method="get">
			        <div class="form-group">
			          	<input type="text" class="form-control search-navbar" name="q" value="" placeholder="Search Everything" autofocus>
			        </div>
			        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Search</button>
		      	</form>
		      	<ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
			            	<li><a href="<?php echo $baseurl; ?>p/privacy">Privacy Policy</a></li>
			            	<li><a href="<?php echo $baseurl; ?>p/dmca">DMCA</a></li>
			            	<li><a href="<?php echo $baseurl; ?>p/terms">Terms and Conditions</a></li>
			            	<li role="separator" class="divider"></li>
			            	<li><a href="<?php echo $baseurl; ?>p/contact">Contact</a></li>
			          	</ul>
			        </li>
		      	</ul>
		    </div><!-- /.navbar-collapse -->

	  	</div><!-- /.container-fluid -->
	</nav>