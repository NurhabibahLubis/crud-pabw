<?php  
require("../../config/db.php");

if($_POST){
    $id             =(int) $_POST['id'];
    $kota       =trim($_POST['kota']);
    $harga_bawang     =trim($_POST['harga_bawang']);
    $jumlah_bawang       =trim($_POST['jumlah_bawang']);
    $total        =trim($_POST['total']);
    
    try{
        $sql='UPDATE baput SET 
                kota = :kota,
                harga_bawang = :harga_bawang,
                jumlah_bawang = :jumlah_bawang,
                total = :total
            WHERE id = :id';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":kota",$kota);
        $stmt->bindParam(":harga_bawang",$harga_bawang);
        $stmt->bindParam(":jumlah_bawang",$jumlah_bawang);
        $stmt->bindParam(":total",$total);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?id=".$id."&status=updated");
            exit();
            }
        else{
            header("Location: read.php?id=".$id."&status=fail_update");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?id=".$id."&status=fail_update");
    exit();
}
?>