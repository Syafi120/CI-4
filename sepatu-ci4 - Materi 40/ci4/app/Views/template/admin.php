<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>">
    <title>Database Yuri.nime's Shop</title>
</head>

<body>

    <div class="container-fluid">
        <nav class="mb-5">
            <div class="row mt-2">

                <div class="col">

                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand fst-italic" href="<?= base_url('/admin')?>">
                            <img style="width:50px" src="<?=base_url('/upload/yurinime.png')?>" alt=""> Yuri.nime's
                            Database
                        </a>
                    </nav>

                </div>

            </div>
        </nav>

        <div class="row">

            <div class="col-4">

                <div class="card ms-5" style="width: 18rem;">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <a class="text-reset text-decoration-none"
                                href="<?= base_url('/admin/Kategori') ?>">Kategori
                            </a>
                        </li>

                        <li class=" list-group-item">
                            <a class="text-reset text-decoration-none" href="<?= base_url('/admin/Menu') ?>">Menu
                            </a>
                        </li>

                        <li class=" list-group-item">
                            <a class="text-reset text-decoration-none"
                                href="<?= base_url('/admin/pelanggan') ?>">Pelanggan
                            </a>
                        </li>

                        <li class=" list-group-item">
                            <a class="text-reset text-decoration-none" href="<?= base_url('/admin/order') ?>">Order
                            </a>
                        </li>

                        <li class=" list-group-item">
                            <a class="text-reset text-decoration-none"
                                href="<?= base_url('/admin/orderdetail') ?>">Order
                                Detail
                            </a>
                        </li>

                        <li class="list-group-item"><a class="text-reset text-decoration-none"
                                href="<?= base_url('/admin/User') ?>">User
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="col-6 px-2">
                <?= $this->renderSection('content')?>
            </div>
        </div>
    </div>
</body>

</html>