<!DOCTYPE html>
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
    <form action="deleteResultTask.php" method="post">
    <p>
        <label for="tID">tID: </label>
        <input type="text" name="tID" id="tID">
    </p>

    <input type="submit" value="Submit">

    <br></br>

</form>

  </div>

  <div id="site-footer">

  </div>
</body>
</html>