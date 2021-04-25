<?php
// config.php
$dbhost = 'freedb.tech';
$dbuser = 'freedbtech_WarlordXZ';
$dbpass = 'uaskalbis';
$dbname = 'freedbtech_uaskalbis';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    echo 'error' . mysqli_connect_error();
}else{
        echo "connected\n";
}


?>
