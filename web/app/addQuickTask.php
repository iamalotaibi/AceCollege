<?php
  require_once 'init.php';
  $user = $_SESSION['user_id'];
  $url = "../views/todos.php?";
// Assign the input to the proper variable.
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $dateAssigned = mysqli_real_escape_string($conn, $_POST['dateAssigned']);
// Get the other values
  $query = "(SELECT (MAX(tID)+1) From Tasks)";
  $result = mysqli_query ($conn, $query) ;
  $tID = mysqli_fetch_row($result);
// Open the table to insert
  $query = "INSERT INTO Tasks VALUES ('$tID[0]', '$title' , '$dateAssigned', 'N','personal', 4,NULL, '$user')" ;
  if(mysqli_query($conn, $query)){
    echo "<script>window.location = '$url'</script>";
    exit;
  } else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
  }
?>
      
