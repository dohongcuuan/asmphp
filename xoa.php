<?php
include 'db.php';
$id_pro=$_GET['id_pro'];
$sql="delete from producd where id_pro=$id_pro";
$kq=$conn->prepare($sql);
if($kq->execute())
header("location:admin.php");
else
echo "Erorr";
?>