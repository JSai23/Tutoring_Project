<!DOCTYPE html>
<html>
<head>
  <title>Broward Tutoring Service</title>
  <link rel="stylesheet" type="text/css" href="requestTutoring.css">
</head>
<body>
  <div id="header">
    <h1>Tutoring Services</h1>
    <h4>Face to Face or Online</h4>
  </div>
  <div id="navbar">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="requestTutoring.php">Request Tutoring</a></li>
      <li><a href="tutoringEnrollmentList.php">Tutoring Enrollment List</a></li>
      <li><a href="studentSearch.php">Student Search</a></li>
    </ul>
  </div>
  <form action="requestTutoring.php" method="post">
      Last Name: <input type="text" name="LName"> <br>
      First Name: <input type="text" name="FName"><br>
      Student ID: <input type="text" name="SI">
      When (Enter a date after 2001-01-01): <input type="date" name="when1"><br>
      Email: <input type="email" name="Email"><br>
      I need tutoring in Subject:
      <select name="subject">
      <option value="english">ELA</option>
      <option value="math">Math</option>
      <option value="science">Science</option>
      <option value="ss">Social Studies</option>
      </select><br>
      Message: <input type="text" name="Message" id="message">
      <input type="submit" value="Submit">
  </form>
  <?php
  if(!empty($_POST)){
    include 'formdb.php';
  }
  else{
    echo "error";
  }
  ?>
  <p id="quote">
    <span id="quotehead">Quote of the Day</span><br>
    Often it isn't the mountains ahead<br>
    that wear you out, it's the little pebble in your<br>
    shoe.<br>
    <img src="ALI.jpg" alt="Muhamad Ali"><br>
  </p>
<footer>
    <p>Summer Camp 2016</p>
  </footer>
