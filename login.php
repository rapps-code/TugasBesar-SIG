<?php

include 'auth.php';

if ($data['status'] == 1) {
    header('location: cms.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-login">
        <!-- <img class="bglogin" src="assets/bglogin.png" alt=""> -->
        <div class="header-login">
            <img src="assets/list.png" alt="Kota Padang" style="height: 85px";>
            <img src="assets/images-removebg-preview.png" alt="">
            <h1 style="color: white;">LOG IN</h1>
        </div>
        <div class="inputbox">
            <fieldset class="form">
                <form method="POST">
                    <div class="input-box">
                        <label for="email" class="label">Email</label><br>
                        <div class="box">
                            <img src="assets/email.png" alt="Email">
                            <input type="text" placeholder="Masukkan Email" id="email" name="email" class="inputext" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="password" class="label">Password</label><br>
                        <div class="box">
                            <img src="assets/pass.png" alt="Password">
                            <input type="password" placeholder="Masukkan Password" id="password" name="password" class="inputext" required>
                        </div>
                    </div>
                    <div class="input-box d-flex justify-content-center">
                        <button type="submit" class="button">Log In</button>
                    </div>
                </form>

                <?php
                    if (isset($_POST)) {
                        if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] == $data['username'] && $_POST['password'] == $data['password']) {
                            $sql = $con -> prepare ("UPDATE user SET status = ? WHERE username = ?");
                            $sql -> bind_param ("is", $status, $username);
                            
                            $status = 1;
                            $username = $_POST['email'];
                            
                            $sql -> execute ();
                            header('location: login.php');
                        }
                    }
                ?>

            </fieldset>
        </div>
    </div>
    
</body>
</html>