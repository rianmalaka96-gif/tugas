<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HandphoneModel;

class HandphoneController extends BaseController
{
    protected $handphoneModel;

    public function __construct()
    {
        $this->handphoneModel = new HandphoneModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Handphone',
            'handphone' => $this->handphoneModel->findAll()
        ];

        return view('handphone/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Handphone'
        ];

        return view('handphone/tambah', $data);
    }

    public function simpan()
    {
        $this->handphoneModel->save([
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe'),
            'spesifikasi' => $this->request->getVar('spesifikasi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/handphone');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Handphone',
            'handphone' => $this->handphoneModel->find($id)
        ];

        return view('handphone/edit', $data);
    }

    public function update($id)
    {
        $this->handphoneModel->update($id, [
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe'),
            'spesifikasi' => $this->request->getVar('spesifikasi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/handphone');
    }

    public function hapus($id)
    {
        $this->handphoneModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/handphone');
    }
}
