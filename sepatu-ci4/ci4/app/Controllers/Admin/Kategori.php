<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo '<h1>belajar ci</h1>';
    }

    public function read()
    {
        $pager = \Config\Services::pager();
        $model = new Kategori_M();
        
        $data = [
            'judul' => 'Data Kategori',
            'kategori' => $model->paginate(3,'Data'),
            'pager' => $model->pager,
        ];

        
        return view("Kategori/select",$data);
        
    }

    public function create()
    {
    
        return view("Kategori/insert");

    }



    public function insert()
    {
        $model = new Kategori_M();
        
        if ($model -> insert($_POST)===false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/Kategori/create"));
        }else {
            return redirect()->to(base_url("/admin/Kategori"));
        }
    }

    public function find($id=null)
    {
        $model = new Kategori_M();
        $kategori = $model->find($id);

        $data = [
            'judul' => 'Update Data',
            'kategori' => $kategori 
        ];

        return view("Kategori/update",$data);
    }

    public function update()
    {
        $model = new Kategori_M();
        $id = $_POST['idkategori'];
        
        if ($model -> save($_POST)===false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/Kategori/find/$id"));
        } else {
            return redirect()->to(base_url("/admin/Kategori"));
        }
    }

    public function delete($id=null)
    {
        $model = new Kategori_M();
        $model -> delete($id);

        return redirect()->to(base_url("/admin/Kategori"));
    }
}