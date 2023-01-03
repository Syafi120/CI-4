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
<hr>

<div class="row">
    <div class="col-11">
        <form action="<?= base_url('/admin/Menu/read')?>" method="get">
            <?= view_cell('\App\Controllers\Admin\Menu::option')?>
        </form>
    </div>
    <div class="col">
        <a class="btn btn-info" href="<?= base_url('/admin/Menu/create') ?>" role="button">+</a>
    </div>
</div>

<div class="row text-center mt-4">

    <div class="col">

        <table class="table table-bordered border-primary">

            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

            <?php $no?>
            <?php foreach ($menu as $key => $value): ?>

            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $value['menu'] ?>
                </td>
                <td>
                    <img style="width: 70px" src="<?=base_url('/upload/'.$value['gambar'].'')?>" alt="">
                </td>
                <td>
                    <?= number_format($value['harga'])?>
                </td>
                <td>

                    <a href="<?= base_url()?>/admin/Menu/delete/<?= $value['idmenu']?>"><img width="20px" class="me-3"
                            src="<?=base_url('/icon/delete.svg')?>"></a>

                    <a href="<?= base_url()?>/admin/Menu/find/<?= $value['idmenu']?>"><img width="20px" class="ms-2"
                            src="<?=base_url('/icon/update.svg')?>"></a>

                </td>
            </tr>

            <?php endforeach;?>

        </table>


        <div class="row">
            <div class="col">
                <?= $pager->links('Data','yuri_nime') ?>
            </div>

        </div>
    </div>
</div>
<?= $this->endsection()?>