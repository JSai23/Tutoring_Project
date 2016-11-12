<!DOCTYPE html>
<html>
<head>
  <title>Broward Tutoring Service</title>
  <link rel="stylesheet" type="text/css" href="studentSearch.css">
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
  <?php
  include 'studentSearchdb.php';
  ?>
<form action="studentSearch.php" method="post">
    <table>
      <th>Search</th>
      <tr><td>Date:</td><td> <input name="search" type="text"></td></tr>
      <tr><td>Last Name:</td><td> <input name="search" type="text"></td></tr>
      <tr><td>First Name: </td><td><input name="search" type="text"></td></tr>
      <tr><td>Email:</td><td> <input name="search" type="text"></td></tr>
      <tr><td>Submit and Reset:</td><td><input type="submit" value="Submit"> <input type="reset" value="Reset"></td></tr>
    </table>
  </form>
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
