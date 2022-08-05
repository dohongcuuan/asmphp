<?php
    try {
        $conn=new PDO
        ("mysql:host=localhost;
        dbname=asm;
        charset=utf8","root","");
    } catch (\Throwable $th) {
        //throw $th;
        echo "Lỗi kết nối DB";
    }

?>