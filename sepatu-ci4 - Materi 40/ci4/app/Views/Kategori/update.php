<?= $this->extend('template/admin')?>
<?= $this->section('content')?>
<div class="col">
    <h3>Update Data</h3>
</div>
<hr>
<div class="col-5">
    <form action="<?= base_url()?>/admin/Kategori/update" method="post">

        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" value="<?=$kategori['kategori']?>" require>
            <div class=" form-text">Edit Barang
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?=$kategori['keterangan']?>" require>
            <div class="form-text">Edit keterangan</div>
        </div>
        <br>
        <div class="col-11">

            <?php
            if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
                echo '</div>';
            }

            ?>
        </div>
        <input type="hidden" name="idkategori" value="<?=$kategori['idkategori']?>">
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>


<?= $this->endsection()?>