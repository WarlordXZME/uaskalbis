<?php
    


function Register()
{   include 'config.php';

    if(isset($_POST["register"]))
    {   $usern = $_POST['username'];
        $pass = $_POST['password'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $repass = $_POST['repassword'];
        
        if($repass == $pass)
        {   $sql = "SELECT username FROM user WHERE username = '$usern'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 0)
            {
                $user = "INSERT INTO user (username, pass) VALUES ('$usern','$pass')";
                $murid = "INSERT INTO murid (nama, nim, jurusan, alamat, username) VALUES ('$nama','$nim', '$jurusan', '$alamat', '$usern')";

                if(mysqli_query($conn, $user) && mysqli_query($conn, $murid))
                {
                    echo 'sign up succsessfull';
        
                }else{
                    echo "sign up failed";
                }

            }else{
                echo "username already taken";
            }

        }else
        {
            echo "your password didn't match";
        }
    }

    mysqli_close($conn);
}
?>

<html>
    <head>
    <body>

    <form method="post" >
    <label>name: <input type="text" name="nama"></label><br>
    <label>nim: <input type="text" name="nim"></label><br>
    <label>jurusan: <input type="text" name="jurusan"></label><br>
    <label>alamat: <input type="text" name="alamat"></label><br>
    <label>username: <input type="text" name="username"></label><br>
    <label>password: <input type="text" name="password"></label><br>
    <label>re type password: <input type="text" name="repassword"></label><br>
    <input type="submit" name="register" value="Register">
    
    <form>
    <?php
    Register();
    ?>

    </body>
</html>