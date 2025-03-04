<?php
$dsn = "mysql:host=localhost;dbname=rjqcla27_portfoliodb;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'rjqcla27_owen', '=J*&]W}3F!OO');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>