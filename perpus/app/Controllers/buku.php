<?php
namespace App\Controllers;

use App\Models\BukuModel; // Perbaikan nama model
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function index(): string
    {
        $model = new BukuModel(); // Perbaikan nama model
        $data['bukus'] = $model->findAll();
        return view('buku/index', $data);
    }
    
    public function create()
    {
        $data = [];
        echo view('buku/create', $data);
    }

    public function simpanan()
    {
        $model = new BukuModel();
        $data = [
            'Judul' => $this->request->getPost('Judul'),
            'Penulis' => $this->request->getPost('Penulis'),
            'Penerbit' => $this->request->getPost('Penerbit'),
            'Tahun_terbit' => $this->request->getPost('Tahun_terbit'),
        ];
        $model->insert($data);
        return redirect()->to('/buku');
    }

    public function update($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        echo view('buku/update', $data);
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data = [
            'Judul' => $this->request->getVar('Judul'),
            'Penulis' => $this->request->getVar('Penulis'),
            'Penerbit' => $this->request->getVar('Penerbit'),
            'Tahun_terbit' => $this->request->getVar('Tahun_terbit'),
        ];
        $model->update($id, $data);
        return redirect()->to('/buku');
    }

    public function hapus($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}

        