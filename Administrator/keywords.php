<?php 
	require_once('../Config/Database.php');
	require_once('../Machine/pagination.php');
	require_once("../".__ROOT__.'/header.php'); 

	session_start();
	if (empty($_SESSION['usernameGates']) && empty($_SESSION['passwordGates'])) { 
		header('location: ../Administrator');
	} 
?>
	<div style="background-color:#dfdfdf; border-top:4px solid #337ab7;">
	<?php 
	require_once('navbar_admin.php');
	require_once('sidebar_admin.php'); ?>

<!-- CONTENT HERE -->
		
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Currently Keywords
                </div>
                <div class="panel-body">
                <a href="<?php echo $baseurl; ?>Machine/record.php?type=delete-all" onclick="return confirm('Are you sure to delete All keyword?')" class="btn btn-success">Delete All Keyword</a>
                <a href="<?php echo $baseurl; ?>Machine/fire.php" class="btn btn-warning">Cron</a>   	
                   	<div class="table-responsive">
            			<table id="mytable" class="table table-bordred table-striped">
            				<thead>
            					<th>No</th>
            					<th>Keyword</th>
            					<th>Status</th>
            					<th>Action</th>
            				</thead>
            				<tbody>
            				<?php 
            					// PAGING
            					$p = new AdminKeyword;
            					$batas  = 10;
				                $posisi = $p->cariPosisi($batas);

            					$show_data = mysqli_query($connecDB, "SELECT * FROM keyword ORDER BY id DESC LIMIT $posisi,$batas");
            					$no = 1;
            					while($x = mysqli_fetch_array($show_data)) {
            					$status = $x['status'];
	            					if ($status==0) {
	            						$st = 'Draft';
	            					} else {
	            						$st = 'Posted';
	            					}
            				?>
            					<tr>
            						<td><?php echo $no; ?></td>
            						<td><?php echo $x['keyword']; ?></td>
            						<td>
                                        <?php 
                                        if ($st=='Posted') {
                                            echo "<font color='#2ECC71'><i class='glyphicon glyphicon-ok'></i> ".$st."</font>";
                                        } else {
                                            echo "<font color='#E74C3C'>".$st."</font>"; 
                                        }
                                        ?>
                                    </td>
            						<td><a href="<?php echo $baseurl; ?>Machine/record.php?type=delete&id=<?php echo $x['id']; ?>" onclick="return confirm('Are you sure to delete this keyword?')" ><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
            					</tr>

            				<?php $no++; } ?>
            				</tbody>
            			</table>
            			<?php 
			              	$jmldata = mysqli_num_rows(mysqli_query($connecDB, "SELECT * FROM keyword"));
			              	$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			              	$linkHalaman = $p->navHalaman($_GET['pages'], $jmlhalaman);
			              	echo "<div class='col-md-12' style='border:none;'><div id=paging><font size='3'><a class='btn btn-success'><<</a> $linkHalaman</font></div><br /></div>";
			            ?>
                </div>
            </div>
		</div>

<!-- END OF CONTENT HERE -->
	</div>
</div>
<?php
	require_once("../".__ROOT__.'/footer.php'); ?>