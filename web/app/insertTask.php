<?php
		require_once '../app/init.php';
	  $user = $_GET['userID'];
	  $url = "../views/todos.php?userID=$user";
// Assign the input to the proper variable.
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$dateAssigned = mysqli_real_escape_string($conn, $_POST['dateAssigned']);
		$magnitude = mysqli_real_escape_string($conn, $_POST['magnitude']);
		$tag = mysqli_real_escape_string($conn, $_POST['tag']);
// Get the other values
		$query = "(SELECT (MAX(tID)+1) From Tasks)";
		$result = mysqli_query ($conn, $query) ;
		$tID = mysqli_fetch_row($result);

// Open the table to insert
		$query = "INSERT INTO Tasks VALUES ('$tID[0]', '$title' , '$dateAssigned', 'N','$tag', '$magnitude','$description', '$user')" ;
		if(mysqli_query($conn, $query)){
      echo "<script>window.location = '$url'</script>";
		} else{
			echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
		}
	?>
                                                               
