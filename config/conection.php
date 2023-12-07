<?php 

    require __DIR__.'/../vendor/autoload.php';
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    $serverName = $_ENV["DB_SERVERNAME"];
    $userName   = $_ENV["DB_USERNAME"];
    $password   = $_ENV["DB_PASSWORD"]; 
    $dbname       = $_ENV["DB_NAME"];

    $connect = mysqli_connect($serverName,$userName,$password,$dbname);

    if ($connect->connect_error) {
        die("Connection failed: " .$connect->connect_error);
    }
    else{
        echo "connected succefuly";
    }
    
?>