<?php
		require_once '../app/init.php';
	  $user = $_GET['userID'];
	  $url = "../views/todos.php?userID=$user";
// Assign the input to the proper variable.
		$tID = $_GET['task'];
// Open the table to insert
		$query = "DELETE FROM Tasks WHERE tID = $tID" ;
		if(mysqli_query($conn, $query)){
      echo "<script>window.location = '$url'</script>";
		} else{
			echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
		}
		echo "WORKING!!!";
	?>
