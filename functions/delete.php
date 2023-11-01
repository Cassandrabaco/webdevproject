<?php
//including the database connection
include_once("../dbConnection/mysqlconfig_connection.php");
//getting id of the data from url
$id = $GET['id'];
//deleting the row from table 
mysqli_query($dbc, "DELETE FROM tblsubject WHERE subject_id='$id'");
//redirecting to the display page (index.php in our case)
header("Location: ../index.php"); 
?>