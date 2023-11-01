<?php
//including the database connection
inclue_once("../dbConnection/mysqlconfig_connection.php");
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
mysqli_query($dbc, "DELETE FROM tblsubject WHERE subject_id='$id'");
//redirectinbg to the display page (index.php in our case)
header("Location:../index.php");
?>