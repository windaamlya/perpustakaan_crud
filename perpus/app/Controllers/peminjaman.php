<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use CodeIgniter\HTTP\ResponseInterface;

class Peminjaman extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjamans'] = $model->findAll();
        return view('peminjaman/index', $data);
    }
    public function create()
    {
       echo view('peminjaman/create');
    }
    public function tambah()
    {
        $model = new PeminjamanModel();
    
        // Jika TanggalPeminjaman tidak diisi, gunakan tanggal sekarang
        $tanggalPinjam = $this->request->getPost('TanggalPemijaman') ?? date('Y-m-d');
    
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $tanggalPinjam,
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ];
    
        $model->insert($data);
        return redirect()->to('/peminjaman');
    }
    public function update($PeminjamanID)
    {   
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($PeminjamanID);
        return view('peminjaman/update', $data);
    }
    public function edit($PeminjamanID)
    {
        $model = new PeminjamanModel();
        
        $user = $model->find($PeminjamanID);

        
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ];

        // Update data di database
        $model->update($PeminjamanID, $data);

        // Redirect setelah update berhasil
        return redirect()->to('/peminjaman');
    }

    public function hapus($PeminjamanID)
    {
        $model = new PeminjamanModel();
        $model->delete($PeminjamanID);
        return redirect()->to('/peminjaman');
    } 
}