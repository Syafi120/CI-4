<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\OrderDetail_M;

class Orderdetail extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new OrderDetail_M();
        
        $data = [
            'judul' => 'Menu Order Detail',
            'orderdetail' => $model->paginate(3,'Data'),
            'pager' => $model->pager,
        ];

        
        return view("orderdetail/select",$data);
    }
}