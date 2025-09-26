<?php
    require_once('./constants.php');
    require_once('./db.php');
    try{
        $pdo = Database::getInstance()->getConnection();
        echo "Connect Success: " . DB_NAME . PHP_EOL; 
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
?>