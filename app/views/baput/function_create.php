<?php
require("../../config/db.php");

if($_POST){
    $kota       =trim($_POST['kota']);
    $harga_bawang     =trim($_POST['harga_bawang']);
    $jumlah_bawang       =trim($_POST['jumlah_bawang']);
    $total        =trim($_POST['total']);
   
    
    try{
        $sql='INSERT INTO baput(kota, harga_bawang, jumlah_bawang, total)
              VALUES(:kota, :harga_bawang, :jumlah_bawang, :total)';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":kota",$kota);
        $stmt->bindParam(":harga_bawang",$harga_bawang);
        $stmt->bindParam(":jumlah_bawang",$jumlah_bawang);
        $stmt->bindParam(":total",$total);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?status=created");
            exit();
            }
        else{
            header("Location: read.php?status=fail_create");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?status=fail_create");
    exit();
}
?>