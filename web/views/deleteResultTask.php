﻿<!DOCTYPE html>
<html>
<head>
  <title>Add Todo List - AceCollege</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
  <div id="site-header">
    <div id="logo">
      <h1>AceCollege</h1>
    </div>
    <div id="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Todo List</a></li>
        <li><a href="#">Study Group</a></li>
      </ul>
    </div>
  </div>
  <div id="site-content">
	<?php

		require_once '../app/init.php';

// Assign the input to the proper variable.
		$tID = mysqli_real_escape_string($conn, $_POST['tID']);

// Open the table to insert

		$query = "DELETE FROM Tasks WHERE tID = $tID" ;

		if(mysqli_query($conn, $query)){
			echo "The task is deleted.";
		} else{
			echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
		}

		echo "WORKING!!!";
	?>
  </div>

  <div id="site-footer">

  </div>
</body>
</html>

