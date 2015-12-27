<?php 

	// Register A New User
	require_once('../Config/Database.php');
	if (isset($_POST['do_login'])) 
	{

		header('Content-Type: text/plain');
    
	    function antiinjection($data){
	      $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES,'UTF-8'))));
	      return $filter_sql;
	    }
	    
	    $username    = antiinjection($_POST['username']);
	    $password = antiinjection($_POST['password']);
	    $salt = '~!@#$%^&*(COOLSALT)_+?';
	    $pass = sha1(md5($salt.$password));
	    
	    // echo $username." ";
	    // echo $pass; exit;

	    $login=mysqli_query($connecDB, "SELECT * FROM administrator WHERE username='$username' AND password='$pass'");
	    $ketemu=mysqli_num_rows($login);
	    $r=mysqli_fetch_array($login);
	        if ($ketemu > 0) {
	            
	            session_start();
	            $_SESSION['usernameGates']  = $r['username'];
	            $_SESSION['passwordGates']  = $r['password'];
	            
	            setcookie("cooknameMuncul", $_SESSION['usernameGates'], time() + 9999999);
	            header('location: ../Administrator/dashboard.php');
	        } else {
	            header('location: ../Administrator/?login=false');
	        }	

	}

	if (isset($_POST['go_post'])) {

		$combined_keyword = explode(',', $_POST['keyword']);
		foreach ($combined_keyword as $sep_keyword) {
		    // echo $sep_keyword."<br />";
		    mysqli_query($connecDB, "INSERT INTO keyword (keyword,status) VALUES ('$sep_keyword', 0)");
		    header('Location: ../Administrator/posting.php');
		}

	}

	if (isset($_GET['type'])) {

		if ($_GET['type']=='delete') {

			$id = $_GET['id'];
			mysqli_query($connecDB, "DELETE FROM keyword WHERE id = '$id'");
       	 	header('Location: ../Administrator/keywords.php');

		} 
		if ($_GET['type']=='delete-all') {

			$id = $_GET['id'];
			mysqli_query($connecDB, "DELETE FROM keyword");
       	 	header('Location: ../Administrator/keywords.php');

		} 

	}