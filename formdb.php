<!DOCTYPE html>
<html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb1";

    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn)
    {
        die("Connection Failed");
    }

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database<br>";
}

$conn2 = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn2)
{
    die("Connection Failed");
}
$tsql = "CREATE TABLE IF NOT EXISTS sinfo(
  NUM INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TODAY_DATE DATE,
  LAST_NAME VARCHAR(100),
  FIRST_NAME VARCHAR(100),
  EMAIL VARCHAR(100),
  STUDENT_ID INT(100),
  SUBJECT VARCHAR(100),
  MESSAGE TEXT,
  TUTORING_DAY DATE
)";
if (mysqli_query($conn2, $tsql))
{
  echo "Table Created Succesfully <br>";
}
else{
  die("Error creating table" . mysqli_error($conn2));
}
$ln="$_POST[LName]";
$fn="$_POST[FName]";
$e="$_POST[Email]";
$SI="$_POST[SI]";
$Sub= "$_POST[subject]";
$M="$_POST[Message]";
$D="$_POST[when1]";
$isql =  "INSERT INTO sinfo
          (LAST_NAME, FIRST_NAME, EMAIL, STUDENT_ID, SUBJECT, MESSAGE, TUTORING_DAY)
            VALUES ('$ln', '$fn', '$e', '$SI', '$Sub', '$M', '$D')";
if (mysqli_query($conn2, $isql))
{
  echo "Data Added <br>";
}
else{
  die("Error inserting data"  . mysqli_error($conn2));
}
?>
