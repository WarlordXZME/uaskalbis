<?php

if(isset($_POST['signup'])){

    $nrp = filter_input(INPUT_POST, 'nrp', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $program = filter_input(INPUT_POST, 'program', FILTER_SANITIZE_STRING);
    $ttl = filter_input(INPUT_POST, 'ttl', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$filename = "data/datauser.txt";
$file = fopen( $filename, "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( $filename );
if($filesize==0){
    fclose( $file );
    $filetext=1;
}
else{
$filetext = fread( $file, $filesize );
fclose( $file );
}

$files = fopen( $filename, "w" );
if( $files == false )
{
echo ( "Error in opening new file" );
exit();
}
fwrite($files, $filetext);
fwrite( $files, "$nrp/$nama/$program/$ttl/$gender/$username/$password|" );
fclose( $files );
echo "<script type='text/javascript'>alert('Data User Tersimpan!');</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Form Registrasi</title>
<link rel="stylesheet" href="assets/style/style-regis.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<form action="index.html" class="inline">
        <button class="float-left submit-button" >Kembali ke Halaman Utama</button>
</form>
<div class="signup-form">
    <form action="" method="post">
		<h2>SIGN-UP</h2>
		<p class="hint-text">Silahkan daftarkan diri anda disini.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="nrp" placeholder="NRP" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="nama" placeholder="Nama Anda" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="program" placeholder="Program Studi" required="required">
        </div>
        <div class="form-group">
        	<input type="date" class="form-control" name="ttl" placeholder="Tanggal Lahir (dd/mm/yyyy)" required="required">
        </div>
        
        <div class="form-check">
        <p>Jenis Kelamin</p>
            <input class="form-check-input" type="radio" name="gender" id="pria" value="Pria" checked>
            <label class="form-check-label" for="pria">
                Pria
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="wanita" value="Wanita">
            <label class="form-check-label" for="wanita">
                Wanita
            </label>
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="signup">Sign-up</button>
        </div>
    </form>
</div>
</body>
</html>