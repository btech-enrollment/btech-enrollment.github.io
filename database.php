<?php      
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'enrollment';

    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        die('Connection failed :'.mysqli_connect_error());
    }
    
?>                    