<?php
include 'config.php';

$data = $con -> query ('SELECT * FROM user') -> fetch_assoc ();
?>