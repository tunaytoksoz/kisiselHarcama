<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass =  "";
$dbName = "hesap";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);


if ($conn){

}
else{
    die("Database bağlantısı başarısız.");
}