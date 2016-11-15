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
    if(empty($_POST))
    {
    echo "Fill out Form";
    }
    else {
    $S = "SELECT * FROM sinfo WHERE";
    if(!empty("$_POST[Date]") && ($S == "SELECT * FROM sinfo WHERE"))
    {
      $S .= " TUTORING_DAY LIKE {$_POST['Date']}";
    }
    elseif(!empty("$_POST[Date]"))
    {
      $S .= " AND TUTORING_DAY LIKE {$_POST['Date']}";
    }
    if(!empty("$_POST[LName]") && ($S == "SELECT * FROM sinfo WHERE"))
      {
        $S .= " LAST_NAME LIKE '%{$_POST['LName']}%'";
      }
    elseif(!empty("$_POST[LName]"))
    {
      $S .= " AND LAST_NAME LIKE '%{$_POST['LName']}%'";
    }
    if(!empty("$_POST[FName]") && ($S == "SELECT * FROM sinfo WHERE"))
      {
        $S .= " FIRST_NAME LIKE '%{$_POST['FName']}%'";
      }
    elseif(!empty("$_POST[FName]"))
    {
      $S .= " AND FIRST_NAME LIKE '%{$_POST['FName']}%'";
    }
    if(!empty("$_POST[Email]") && ($S == "SELECT * FROM sinfo WHERE"))
      {
        $S .= " EMAIL LIKE '%{$_POST['Email']}%'";
      }
    elseif(!empty("$_POST[Email]"))
    {
      $S .= " AND EMAIL LIKE '%{$_POST['Email']}%'";
    }
    else {
      echo "";
    }
    if($S == "SELECT * FROM sinfo WHERE")
    {
      echo "no input";
    }
    else
    {
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
    while ($record = mysqli_fetch_array($result))
    {
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
      </tr>";}
    }
  }

 ?>
