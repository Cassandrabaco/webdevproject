<head><title>Add Syllabus</title></head>
<body>
    <h1>Add Syllabus<h1>
    <a href="../inde,php">Home</a>
    <br/><br/> 
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%">
                <tr>
                    <td>Syllabus Code</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Syllabus Author</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subject"> <!-- HTML Input for Drop Down typ menu -->
                            <?php
                                inlcude_once("../dbConnection/mysqlcondig-connection.php"); //Include Code to Connect to Datbase
                                $query = "SELECT * FROM tblsubjects"; //Select all entries in tblsubjects
                                $result = mysqli_query($dbc, $query);
                                while($res = mysqli_fetch_array($result)) { //Loop to display All subjects as option the drop-down menu
                                   echo "<option value=\"".$res['subject_id']."\">; //Note that the value attribute contains the ID of the subject
                                     echo $res['subject_name']; //display the actual subjects's name in the drop-down option
                                     echo"</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><./td>
                    <td><input type='submit' name='Submit' value='Add'></td>
                </tr>
        </table>
    </form>
</body>
                    


                                       