<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Order_M;

class Order extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM vorder";

        $result = $db->query($sql);
        $row = $result->getResult('array');

        $total = count($row);
        $tampil = 3;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
            $sql = "SELECT * FROM vorder ORDER BY status ASC LIMIT $mulai, $tampil";
        }else {
            $sql = "SELECT * FROM vorder ORDER BY status ASC LIMIT 0, $tampil";
        }
        
        $result = $db->query($sql);
        $row = $result->getResult('array');

        $data = [
            'judul'   => 'Data Order', 
            'order'   => $row,
            'pager'   => $pager,
            'perPage' => $tampil,
            'total'   => $total
        ];

        return view('order/select', $data);
    }

    public function find($id = null)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM vorder WHERE idorder = $id";

        $result = $db->query($sql);
        $row = $result->getResult('array');
//====================================================================
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM vorderdetail WHERE idorder = $id";

        $result = $db->query($sql);
        $detail = $result->getResult('array');

        $data = [
            'judul' => 'Pembayaran',
            'order' => $row,
            'detail'=> $detail
        ];
        
        return view('order/update', $data);
    }
}