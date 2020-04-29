<?php include("atas.php") ?>

<?php if (isset($_GET['status']) && $_GET['status']=="deleted") : ?>
<div class="alert alert-success alert-dismissible mt-5" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Berhasil Dihapus!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="fail_delete") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Tidak berhasil DIhapus!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="updated") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Berhasil DiUbah!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="created") : ?>
<div class="alert alert-info alert-dismissible mt-5" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Berhasil Ditambahkan!</strong>
</div>
<?php endif ?>

<?php if (isset($_GET['status']) && $_GET['status']=="fail_update") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Tidak Berhasil DiUbah!</strong>
</div>
<?php endif ?>
<div class="row">
  <div class="col-md-12">
    <a href="create.php" class="btn btn-info btn-md"> <span class="fa fa-plus-square-o"></span> Tambahkan
       </a>
  </div>

</div>
<div class="col-sm-12">

  <section class="panel">
    <header class="panel-heading">

      <marquee behavior="" direction="">
        Penjualan Bawang Putih Selama Ramadhan</marquee>

    </header>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kota</th>
          <th>Harga Bawang /kg</th>
          <th>Jumlah Bawang(ton)</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php  $i=1;
                        if($result->rowCount() > 0) : ?>
        <?php foreach($result as $bamer) : ?>
        <tr class="success">
          <td><?=$i++ ?></td>
          <td><?=$bamer['kota'] ?></td>
          <td><?=$bamer['harga_bawang'] ?></td>
          <td><?=$bamer['jumlah_bawang'] ?></td>
          <td><?=$bamer['total'] ?></td>
          <td>
            <a title="detail" class="btn btn-success" href="detail.php?id=<?=$bamer['id']?>">Detail</a>
            <a title="edit" class="btn btn-info" href="edit.php?id=<?=$bamer['id']?>">Edit</a>
            <a type="button" class="btn btn-danger" data-toggle="modal"
              data-target=".bs-example-modal-sm-<?=$bamer['id']?>">
              Hapus</a>
            <?php include("modal.php") ?>
          </td>

        </tr>
        <?php endforeach ?>

        <?php endif ?>
      </tbody>
    </table>
  </section>
</div>

<?php include("bawah.php") ?>