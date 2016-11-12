<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="studentSearch.css">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb1";
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if(!$conn)
    {
        die("Connection Failed");
    }
    if(!empty("$_POST[search]"))
    {
    $search = "$_POST[search]";
    $S = "SELECT * FROM sinfo
      WHERE NUM LIKE '%$search%' OR
      LAST_NAME LIKE '%$search%' OR
      FIRST_NAME LIKE '%$search%' OR
      EMAIL LIKE '%$search%' OR
      STUDENT_ID LIKE '%$search%' OR
      SUBJECT LIKE '%$search%' OR
      MESSAGE LIKE '%$search%' OR
      TUTORING_DAY LIKE '%$search%'";
    $result = mysqli_query($conn, $S);
     }
    echo "<table>
    <tr>
    <th>#</th>
    <th>Date</th>
    <th>LastName</th>
    <th>FirstName</th>
    <th>Email</th>
    <th>Student ID</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Tutoring Day</th>
    </tr>";
  if(!empty($_POST['search']))
    {
    while ($record = mysqli_fetch_array($result)){
      echo "<tr>
      <td>{$record['NUM']}</td>
      <td>{$record['TODAY_DATE']}</td>
      <td>{$record['LAST_NAME']}</td>
      <td>{$record['FIRST_NAME']}</td>
      <td>{$record['EMAIL']}</td>
      <td>{$record['STUDENT_ID']}</td>
      <td>{$record['SUBJECT']}</td>
      <td>{$record['MESSAGE']}</td>
      <td>{$record['TUTORING_DAY']}</td>
      </tr>";};
    }
 ?>
