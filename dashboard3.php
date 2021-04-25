<?php
    session_start();
    if (!isset($_SESSION['usernameglobal3'])){
        header("Location: soal12.php");
    }
    $username = $_SESSION['usernameglobal3'];
    $nama = $_SESSION['namauser'];


    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("Location: soal12.php");
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

</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Selamat datang</h2> 
        <h2 class="text-center"><?php echo $username ;?></h2>      
        <div class="form-group">
            <label class="text-center">Selamat! Bapak/Ibu <?php echo "<strong>$nama</strong>" ;?>, dengan username <?php echo "<strong>$username</strong>" ;?>. Berhasil login pada <?php echo $_SESSION['logintime3']; ?>  </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="logout">Log out</button>
        </div>        
    </form>
</div>
</body>
</html>