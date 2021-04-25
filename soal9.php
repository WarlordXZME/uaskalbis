<?php
include 'assets/include/userdata2.php';

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $checker = false;
    for($i=0;$i<count($datausername);$i++){

        if($datausername[$i] == $username){
            $checker=true;
            $arraycounter=$i;
        }
    }

    if ($checker==false){
        $msg='<div class="alert alert-danger alert-dismissible">Data yang anda masukan tidak terdaftar</div>';
        echo $msg;
        
    }
    else {

        if($datapassword[$arraycounter]==$password){
            $logintime=date("Y/m/d") . " " . date("h:i:sa");
            session_start();
            $_SESSION['usernameglobal2'] = $username;
            $_SESSION['logintime2'] = $logintime;
            header("Location: dashboard2.php");
            
        }
        else {
            $msg='<div class="alert alert-danger alert-dismissible">Data yang anda masukan tidak sesuai</div>';
            echo $msg;

        }


    }


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Kalbis</title>
<link rel="stylesheet" href="assets/style/style-login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<form action="index.html" class="inline">
        <button class="float-left submit-button" >Kembali ke Halaman Utama</button>
</form>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>        
    </form>
</div>
</body>
</html>