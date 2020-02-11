<?php
    include "connect.php";
    $json = '[{"giasanpham":19900000,"madonhang":"5","soluongsanpham":1,"tensanpham":"Laptop Apple MacBook 
        Air 2017 i5 1.8GHz","masanpham":7},{"giasanpham":4000000,"madonhang":"8","soluongsanpham":1,"tensanpham":
        "Vivo U10","masanpham":9}]';
    $data = json_decode($json,true);
    foreach ($data as $value) {
        $madonhang = $value['madonhang'];
        $masanpham = $value['masanpham'];
        $tensanpham = $value['tensanpham'];
        $giasanpham = $value['giasanpham'];
        $soluongsanpham = $value['soluongsanpham'];
        $query = "INSERT INTO chitietdonhang(id,madonhang,masanpham,tensanpham,giasanpham,soluongsanpham)
                   VALUES (null,'$madonhang','$masanpham','$tensanpham','$giasanpham','$soluongsanpham')";
        $Dta11 = mysqli_query($conn, $query);          
    }
    if ($Dta11) {
        echo "1";
    }else{
        echo "0";
    }        
?>    