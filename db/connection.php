<?php

try{
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,  DB_USER, DB_PASS);

} catch(PDOException $e) {
    echo $e->getMessage();
}

return $conn;
?>