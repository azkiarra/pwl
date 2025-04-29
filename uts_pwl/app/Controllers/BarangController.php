<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        $data['title'] = 'Data Barang';
        return view('barang/index', $data);
    }

    public function tambah()
    {
        $nama = $this->request->getPost('nama');
        $stok = $this->request->getPost('stok');
        $keterangan = $this->request->getPost('keterangan');
        $model = new BarangModel();
        $model->save([
            'nama' => $nama,
            'stok' => $stok,
            'keterangan' => $keterangan,
        ]);
        return redirect()->to('/barang');
    }

    public function hapus($id)
    {
        $model = new BarangModel();
        $model->delete($id);
        return redirect()->to('/barang');
    }

    public function updateJumlah($id)
    {
        $barangModel = new \App\Models\BarangModel();

        $stokBaru = $this->request->getPost('stok');
        $barangModel->update($id, ['stok' => $stokBaru]);

        return redirect()->to('/barang')->with('success', 'Stok berhasil diperbarui.');
    }

}