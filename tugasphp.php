<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Dasar - Inosoft Bootcamp</title>
</head>
<body>
<?php

    function luasLingkaran(int $angka){
        $pi = 3.14;
        $jariJari = $angka / 3; 
        
        return $pi * $jariJari * $jariJari;
    }

    function kelilingLingkaran(int $angka){
        $pi = 3.14;
        $jariJari = $angka / 5;
    
        return 2 * $pi * $jariJari;
    }
    
    function luasPersegi(int $angka){
        $panjang = $angka / 3;
        $lebar = $angka / 5;
    
        return $panjang * $lebar;
    }


    for($i = 1; $i <= 100;$i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo number_format(luasPersegi($i),2,".","")."<br>";
        }else if($i % 3 == 0){
            echo number_format(luasLingkaran($i),2,".","")."<br>";
        }else if($i % 5 == 0){
            echo number_format(kelilingLingkaran($i),2,".","")."<br>";
        }else {
            echo number_format($i,2,".","")."<br>";
        }
    }
    ?>
</body>
</html>