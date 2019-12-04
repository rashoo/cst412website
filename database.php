<?php
// connect to our mysql database server
    function getDatabaseConnection() {
        
        // running on Heroku
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $username = "bfbc3aa490fa36";
        $password = "71762c6d"; 
        $dbname = "heroku_1d115ad68fd8f94"; 
    
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConn; 
    } 
?>