<?php

include 'auth.php';

if ($data['status'] == 1) {
	$sql = $con -> prepare ("UPDATE user SET status = ? WHERE username = ?");
    $sql -> bind_param ("is", $status, $username);
    
    $status = 0;
    $username = $data['username'];
    
    $sql -> execute ();
}

header('location: index.html');

?>