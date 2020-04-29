<?php include("atas.php") ?>
<div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading">
     Tambah Data Penjualan Bawang Merah
    </header>
    <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal" method="post" action="function_create.php">
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Kota<span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="kota"  type="text" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Harga Bawang (RP/KG) <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" name="harga_bawang" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Jumlah Bawang (TON) <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" name="jumlah_bawang" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Total <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="number" name="total" required="">
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