<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="tutoringEnrollmentList.css">
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
    $S = "SELECT * FROM sinfo";
    $result = mysqli_query($conn, $S);
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
      </tr>";
    };
 ?>
