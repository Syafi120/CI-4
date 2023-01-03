<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Kategori_M extends Model
    {
        protected $table = 'tblkkategori';
        protected $allowedFields = ['kategori','keterangan'];
        protected $primaryKey = 'idkategori';
        protected $validationRules = [
            'kategori' => 'alpha_numeric_space|min_length[3]|is_unique[tblkkategori.kategori]'
        ];
        protected $validationMessages = [
            'kategori' => [
                'alpha_numeric_space' => 'Tidak Boleh Menggunakan simbol',
                'min_length' => 'Minimal Menggunakan 3 Huruf',
                'is_unique' => 'Data Sudah Digunakan'
            ]
            
        ];
    }
?>