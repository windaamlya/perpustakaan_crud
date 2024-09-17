<?php

namespace App\Controllers;

use App\Models\PengembalianModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pengembalian extends BaseController
{
    public function index()
    {
        $model = new PengembalianModel();
        $data['pengembalians'] = $model->findAll();
        return view('pengembalian/index', $data);
    }
    public function create()
    {
       echo view('pengembalian/create');
    }
    public function tambah()
    {
        $model = new PengembalianModel();
        $tanggalPinjam = $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d');
        $data = [
            

            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $tanggalPinjam,
        ];
        $model->insert($data);
        return redirect()->to('/pengembalian');
    }
    public function update($PengembalianID)
    {   
        $model = new PengembalianModel();
        $data['pengembalian'] = $model->find($PengembalianID);
        return view('pengembalian/update', $data);
    }
    public function edit($PengembalianID)
    {
        $model = new PengembalianModel();
        
        $user = $model->find($PengembalianID);

        
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
        ];

        // Update data di database
        $model->update($PengembalianID, $data);

        // Redirect setelah update berhasil
        return redirect()->to('/pengembalian');
    }

    public function hapus($PengembalianID)
    {
        $model = new PengembalianModel();
        $model->delete($PengembalianID);
        return redirect()->to('/pengembalian');
    }


}