<html>

<head>
    <title>List Filter Murid</title>
</head>
<body>
<form action="index.html" class="inline">
        <button class="float-left submit-button" >Kembali ke Halaman Utama</button>
</form>
</body>
</html>
<?php
echo "Data orang yang lahir di bulan maret: <br><br><br>";
$data = file_get_contents("data/datauser.txt");

$spliteddata = explode("|",$data);


for ($i=0;$i<count($spliteddata)-1;$i++){
    $datatemp = explode("/" , $spliteddata[$i]);
    for($j=0;$j<7;$j++){
        $datauser[$i][$j]=$datatemp[$j];
    }

}
$countdata=0;
for ($k=0;$k<count($spliteddata)-1;$k++){
    $temp=explode("-",$datauser[$k][3]);
    if($temp[1]==03){
        $countdata++;
        echo "Data ke-".$countdata;
        echo "<br><br>";
        echo "NRP           : ".$datauser[$k][0];
        echo "<br>";
        echo "Nama          : ".$datauser[$k][1];
        echo "<br>";
        echo "Jurusan       : ".$datauser[$k][2];
        echo "<br>";
        echo "Tanggal Lahir : ".$datauser[$k][3];
        echo "<br>";
        echo "Jenis Kelamin : ".$datauser[$k][4];
        echo "<br><br><br>";
         
    }

}

?>