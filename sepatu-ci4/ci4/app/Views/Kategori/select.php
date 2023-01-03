<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<?php
    if (isset($_GET['page_Data'])) {
        $page = $_GET['page_Data'];
        $jumlah = 3;
        $no = ($jumlah * $page) - $jumlah + 1;
    }else {
        $no = 1;
    }
?>


<div class="col text-center">
    <h3>
        <?= $judul;?>
    </h3>
</div>



<div class="row text-center mt-2">

    <div class="col">

        <hr>
        <table class="table table-bordered border-primary">

            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            <?php $no?>
            <?php foreach ($kategori as $key => $value): ?>

            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $value['kategori'] ?>
                </td>
                <td>
                    <?= $value['keterangan']?>
                </td>
                <td>

                    <a href="<?= base_url()?>/admin/Kategori/delete/<?= $value['idkategori']?>"><img width="20px"
                            class="me-3" src="<?=base_url('/icon/delete.svg')?>"></a>

                    <a href="<?= base_url()?>/admin/Kategori/find/<?= $value['idkategori']?>"><img width="20px"
                            class="ms-2" src="<?=base_url('/icon/update.svg')?>"></a>

                </td>
            </tr>

            <?php endforeach;?>

        </table>


        <div class="row">
            <div class="col-11">
                <?= $pager->links('Data','yuri_nime') ?>
            </div>
            <div class="col">
                <a class="btn btn-info" href="<?= base_url('/admin/Kategori/create') ?>" role="button">+</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection()?>