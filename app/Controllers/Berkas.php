<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkas extends BaseController
{
    public function index()
    {
		$berkas = new BerkasModel();
		$data['berkas'] = $berkas->findAll();
		return view('view_berkas', $data);
    }
	public function kumpulan()
    {
		$berkas = new BerkasModel();
		$data['berkas'] = $berkas->findAll();
		return view('berkas_kumpulan', $data);
    }
    
	public function create()
	{
		return view('form_upload');
	}
    public function save()
	{
		if (!$this->validate([
			'title' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,application/zip,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$berkas = new BerkasModel();
		$dataBerkas = $this->request->getFile('berkas');
		$fileName = $dataBerkas->getRandomName();
		$berkas->insert([
			'berkas' => $fileName,
			'keterangan' => $this->request->getPost('keterangan'),
			'title' => $this->request->getPost('title')
		]);
		$dataBerkas->move('uploads/berkas/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('berkas'));
	}
	function download($id = null)
{
    if ($id === null) {
        // Handle the case when $id is not provided (using the default ID or show an error message)
        echo "No ID provided.";
        return;
    }

    echo "Received ID: " . $id;

    $berkas = new BerkasModel();
    $data = $berkas->find($id);

    if ($data) {
        return $this->response->download('uploads/berkas/' . $data['berkas'], null);
    } else {
        // Handle the case when the file data is not found for the provided $id
        echo "File not found.";
        return;
    }
}
// function download($id = null)
// 	{
// 		// echo "Received ID: " . $id;

// 		// $berkas = new BerkasModel();
// 		// $data = $berkas->find($id);
// 		// return $this->response->download('uploads/berkas/' . $data->berkas, null);
		
// 		// $berkasModel = new BerkasModel();
// 		// $fileData = $berkasModel->find($id);
// 		// if ($fileData) {
// 		// 	$filePath = WRITEPATH . 'uploads/berkas/' . $fileData['berkas'];
// 		// 	return $this->response->download($filePath, null);
// 		// } else {
// 		// 	// Handle the case when the file doesn't exist or the $id is invalid
// 		// 	return redirect()->back()->with('error', 'File not found.');
// 		// }

// 		echo "Received ID: " . $id;
// 		$berkas = new BerkasModel();
// 		$data = $berkas->find($id);
// 		return $this->response->download('uploads/berkas/' . $data->berkas, null);
	
// 	}
}
