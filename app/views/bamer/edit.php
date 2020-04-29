<?php include("atas.php") ?>
<?php 

$id = $_GET['id'] ? intval($_GET['id']) : 0;

try{
  $sql="SELECT * FROM bamer WHERE id = :id LIMIT 1" ;
  $stmt=$db->prepare($sql);
  $stmt->bindParam(":id",$id, PDO::PARAM_INT);
  $stmt->execute();
}
catch(Exception $e){
  echo "Error " . $e->getMessage();
  exit(); 
}
if(!$stmt->rowCount()){
  header("Location: index.php");
  exit();
}
$bamer=$stmt->fetch();


?>

<div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading">
     Edit Data Penjualan Bawang Merah
    </header>
    <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal" method="post" action="function_edit.php">
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Kota<span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="kota"  value="<?= $bamer['kota'] ?>"type="text" required="">
              <input class="form-control" id="cname" name="id"  value="<?= $bamer['id'] ?>"type="hidden" required="">
      
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Harga Bawang (RP/KG) <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" value="<?= $bamer['harga_bawang'] ?>"name="harga_bawang" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Jumlah Bawang (TON) <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" value="<?= $bamer['jumlah_bawang'] ?>" name="jumlah_bawang" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Total <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" value="<?= $bamer['total'] ?>" name="total" required="">
            </div>
          </div>
         
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit">Save</button>
              <button class="btn btn-default" type="button">Cancel</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </section>
</div>

<?php include("bawah.php") ?>