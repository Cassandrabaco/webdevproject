<?php
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'db');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR does('Could not connect to MySQL: '  . mysql_connect_error());
?>