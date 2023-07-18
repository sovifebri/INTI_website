<?php namespace App\Controllers;

use \App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsAdmin extends BaseController
{
	public function index()
	{
        $news = new NewsModel();
        $data['newses'] = $news->findAll();
		echo view('admin_list_news', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
		$news = new NewsModel();
		$data['news'] = $news->where('id', $id)->first();
		
		if(!$data['news']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('news_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        // if (!$this->validate([
		// 	'keterangan' => [
		// 		'rules' => 'required',
		// 		'errors' => [
		// 			'required' => '{field} Tidak boleh kosong'
		// 		]
		// 	],
		// 	'berkas' => [
		// 		'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
		// 		'errors' => [
		// 			'uploaded' => 'Harus Ada File yang diupload',
		// 			'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
		// 			'max_size' => 'Ukuran File Maksimal 2 MB'
		// 		]
 
		// 	]
		// ])) {
		// 	session()->setFlashdata('error', $this->validator->listErrors());
		// 	return redirect()->back()->withInput();
		// }
 
		// $berkas = new BerkasModel();
		// $dataBerkas = $this->request->getFile('berkas');
		// $fileName = $dataBerkas->getRandomName();
		// $berkas->insert([
		// 	'berkas' => $fileName,
		// 	'keterangan' => $this->request->getPost('keterangan')
		// ]);
		// $dataBerkas->move('uploads/berkas/', $fileName);
		// session()->setFlashdata('success', 'Berkas Berhasil diupload');
		// return redirect()->to(base_url('berkas'));
	// }
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'file' => 'uploaded[file]|mime_in[file,application/zip,application/rar]|max_size[file,1000]'  
            ],  
        );
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new NewsModel();
            // $dataFile = $this->request->getFile('file');
            // $fileName = $dataFile->getRandomName();
            $news->insert([
                "title" => $this->request->getPost('title'),
                // "file" => $fileName,
                "file" => $this->request->getPost('file'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
            ]);
            // $dataFile->move('admin', $fileName);
            session()->setFlashdata('success', 'File Berhasil diupload');
            return redirect('admin/news');
        }
		
        // tampilkan form create
        echo view('admin_create_news');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/news');
        }

        // tampilkan form edit
        echo view('admin_edit_news', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $news = new NewsModel();
        $news->delete($id);
        return redirect('admin/news');
    }
}