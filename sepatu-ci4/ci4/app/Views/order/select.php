<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<div class="row text-center">
    <div class="col">
        <h3>
            <?= $judul ?>
        </h3>
    </div>
</div>
<hr>

<?php 
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $jumlah = 3;
        $no = ($jumlah * $page) - $jumlah + 1;
    }else {
        $no = 1;
    }
?>

<div class="row text-center mt-4">
    <div class="col">
        <table class="table table-bordered border-primary">
            <tr>
                <th>No</th>
                <th>ID Order</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembali</th>
                <th>Status</th>
            </tr>

            <?php foreach ($order as $value): ?>

            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $value['idorder'] ?>
                </td>
                <td>
                    <?= $value['pelanggan']?>
                </td>
                <td>
                    <?= $value['tglorder']?>
                </td>
                <td>
                    <?= $value['total']?>
                </td>
                <td>
                    <?= $value['bayar']?>
                </td>
                <td>
                    <?= $value['kembali']?>
                </td>
                <?php 
                if ($value['status'] == 1) {
                    $status = "<a class='btn btn-success'>Sudah Bayar</a>";
                }else {
                    $status = "<a class='btn btn-danger' href='".base_url("/admin/order/find")."/".$value ['idorder']."'>Belum Bayar</a>";
                }
                ?>
                <td>
                    <?= $status ?>
                </td>
            </tr>

            <?php endforeach;?>

        </table>
        <?= $pager->makeLinks(1, $perPage, $total, 'yuri_nime')?>
    </div>
</div>

<?= $this->endsection()?>