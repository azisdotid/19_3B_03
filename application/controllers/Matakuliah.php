<?php class Matakuliah extends CI_Controller { 
	
	public function index() { 
		$this->load->view('view-form-matakuliah'); 
	} 
	
	public function cetak() { 
		// $kode=$this->input->post('kode');
		$data = ['kode' => $this->input->post('kode'), 'nama' => $this->input->post('nama'), 'sks' => $this->input->post('sks') ]; 
		// var_dump($kode) ;
		// die;
		$this->load->view('view-data-matakuliah', $data); 
	} 
}
