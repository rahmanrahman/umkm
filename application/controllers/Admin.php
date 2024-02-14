<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){ 
		parent::__construct(); 
		if($this->session->userdata('status') != "login_admin"){
			redirect('Login/log_cek');
		}
	}

	public function index(){
		$data['total_masuk'] = $this->M_pengolahan->total_masuk();
		$data['total_keluar'] = $this->M_pengolahan->total_keluar();
		$data['total_pemasukan'] = $this->M_pengolahan->total_pemasukan();
		$data['total_penjualan'] = $this->M_pengolahan->total_penjualan();
		$data['total_pembelian_tanggal'] = $this->M_pengolahan->total_pembelian_tanggal();
		$data['total_pembelian_bahan'] = $this->M_pengolahan->total_pembelian_bahan();
		// var_dump($data['total_pembelian_tanggal']);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footerD', $data);

	}

	public function Bahan(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['bahan'] = $this->M_pengolahan->tampil_bahan();
		$data['total_bahan'] = $this->M_pengolahan->total_bahan();
		$this->load->view('admin/bahan',$data);
	}

	public function Penjualan(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['penjualan'] = $this->M_pengolahan->tampil_penjualan();
		// $data['total_bahan'] = $this->M_pengolahan->total_bahan();
		$this->load->view('admin/penjualan',$data);
	}

	public function Add_Pembelian(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['bahan'] = $this->M_pengolahan->tampil_bahan();
		$data['jumlah_masuk'] = $this->M_pengolahan->jumlah_masuk();

		$this->load->view('admin/bahan_masuk',$data);	

	}

	public function Add_Pengeluaran(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['bahan'] = $this->M_pengolahan->tampil_bahan();
		$data['jumlah_keluar'] = $this->M_pengolahan->jumlah_keluar();
		$this->load->view('admin/bahan_keluar',$data);
	}

	public function Add_Penjualan(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['bahan'] = $this->M_pengolahan->tampil_bahan();
		$data['jumlah_keluar'] = $this->M_pengolahan->jumlah_keluar();
		$this->load->view('admin/add_penjualan',$data);
	}

	public function Laporan_Pembelian(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['masuk'] = $this->M_pengolahan->tampil_laporan_masuk();
		$this->load->view('admin/laporan_pemasukan',$data);
	}

	public function Laporan_Pengeluaran(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		// $tgl  = date('Y-m-d');
		$data['keluar'] = $this->M_pengolahan->tampil_laporan_keluar();
		// $data['penjualan'] = $this->M_pengolahan->penjualan($tgl);
		$this->load->view('admin/laporan_pengeluaran',$data);
	}

	public function Laporan_Penjualan(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		// $tgl  = date('Y-m-d');
		$data['penjualan'] = $this->M_pengolahan->tampil_penjualan();
		// $data['penjualan'] = $this->M_pengolahan->penjualan($tgl);
		$this->load->view('admin/penjualan',$data);
	}

	public function Cetak_Laporan_Pembelian(){
		$dateA		= $this->input->post('tglA');
		$dateB		= $this->input->post('tglB');
		//untuk menampilkan data yang ada pada database
		$data['masuk'] = $this->M_pengolahan->cetak_laporan_masuk($dateA, $dateB);
		$this->load->view('admin/cetak_laporan_masuk',$data);
	}

	public function Cetak_Laporan_Pengeluaran(){
		$dateA		= $this->input->post('tglA');
		$dateB		= $this->input->post('tglB');
		// $tgl  = date('Y-m-d');
		//untuk menampilkan data yang ada pada database
		$data['keluar'] = $this->M_pengolahan->cetak_laporan_keluar($dateA, $dateB);
		// $data['pembelian'] = $this->M_pengolahan->pembelian($dateA, $dateB);
		$this->load->view('admin/cetak_laporan_pengeluaran',$data);
	}

	public function Cetak_Laporan_Penjualan(){
		$dateA		= $this->input->post('tglA');
		$dateB		= $this->input->post('tglB');
		// $tgl  = date('Y-m-d');
		//untuk menampilkan data yang ada pada database
		$data['penjualan'] = $this->M_pengolahan->cetak_laporan_penjualan($dateA, $dateB);
		$data['pembelian'] = $this->M_pengolahan->pembelian($dateA, $dateB);
		$this->load->view('admin/cetak_laporan_penjualan',$data);
	}


	public function Tambah_Bahan(){
		$nama_bahan		= $this->input->post('nama_bahan'); 
		$kode_bahan 		= $this->input->post('kode_bahan');
		$satuan 		= $this->input->post('satuan');
		$stok 		= $this->input->post('stok');

		$where = array('nama_bahan'=>$nama_bahan);
		$cek = $this->M_pengolahan->cari_bahan($where);
		if($cek>0){
			redirect('Admin/Bahan');
		}else{
		//data yang dikirim harus bertipe array
		$data = array(
		'nama_bahan'=>$nama_bahan,
		'kode_bahan'=>$kode_bahan,
		'satuan'=>$satuan,
		'stok'=>$stok
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_pengolahan->input_data('bahan', $data);
		redirect('Admin/Bahan');
	}
	}

	public function Tambah_Penjualan(){
		$tanggal		= $this->input->post('tanggal'); 
		$harga 		= $this->input->post('harga');
		
		$data = array(
		'tanggal'=>$tanggal,
		'harga'=>$harga
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_pengolahan->input_data('penjualan', $data);
		redirect('Admin/Penjualan');
	}
	

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function Update_Bahan(){
		$id 		= $this->input->post('id');
		$nama_bahan		= $this->input->post('nama_bahan'); 
		$kode_bahan 		= $this->input->post('kode_bahan');
		$satuan 		= $this->input->post('satuan');
		$stok 		= $this->input->post('stok');

		$where = array('nama_bahan'=>$nama_bahan);
		$cek = $this->M_pengolahan->cari_bahan($where);
		if($cek>0){
			redirect('Admin/Bahan');
		}else{
			
		$data = array(
		'nama_bahan'=>$nama_bahan,
		'kode_bahan'=>$kode_bahan,
		'satuan'=>$satuan,
		'stok'=>$stok
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_pengolahan->update_data($id,$data,'bahan');
		redirect('Admin/Bahan');
		}
		
	}

	public function Tambah_Pemasukan(){
		$kode_bahan		= $this->input->post('kode_bahan');
		$nbm	= $this->input->post('nbm');
		$jumlah		= $this->input->post('jumlah');
		$tanggal_masuk	= $this->input->post('tanggal_masuk');
		$harga	= $this->input->post('harga');

		$where = array('kode_bahan'=>$kode_bahan);
		$where1 = $this->M_pengolahan->data_bahan($where);
		$stok = $where1->stok;
		$stok += $jumlah;
		
		$data = array(
		'kode_bahan'=>$kode_bahan,
		'nbm'=>$nbm,
		'jumlah'=>$jumlah,
		'tanggal_masuk'=>$tanggal_masuk,
		'harga'=>$harga
		);

		$data1 = array(
		'stok'=>$stok
		);
		$this->M_pengolahan->input_data('pemasukan', $data);
		$this->M_pengolahan->update_stok($where, $data1);
		redirect('Admin/Add_Pembelian');
	
	}

	public function Tambah_Pengeluaran(){
		$kode_bahan		= $this->input->post('kode_bahan');
		$nbk	= $this->input->post('nbk');
		$jumlah		= $this->input->post('jumlah');
		$tanggal_keluar	= $this->input->post('tanggal_keluar');

		$where = array('kode_bahan'=>$kode_bahan);
		$where1 = $this->M_pengolahan->data_bahan($where);
		$stok1 = $where1->stok;
		$stok = $where1->stok;
		$stok -= $jumlah;
		
		if($jumlah > $stok1){
			redirect('Admin/Add_Pengeluaran');
		}else{
		$data = array(
		'kode_bahan'=>$kode_bahan,
		'nbk'=>$nbk,
		'jumlah'=>$jumlah,
		'tanggal_keluar'=>$tanggal_keluar
	
		);

		$data1 = array(
		'stok'=>$stok
		);
		$this->M_pengolahan->input_data('pengeluaran', $data);
		$this->M_pengolahan->update_stok($where, $data1);
		redirect('Admin/Add_Pengeluaran');
	}
	}


	//fungsi untuk menghapus data
	public function Hapus_Bahan($id){

		$this->M_pengolahan->hapus_data($id, 'bahan');
		redirect('Admin/bahan');
	}

	public function Hapus_Penjualan($id){

		$this->M_pengolahan->hapus_data($id, 'penjualan');
		redirect('Admin/Penjualan');
	}

	public function Hapus_Masuk($id){

		$this->M_pengolahan->hapus_data($id, 'pemasukan');
		redirect('Admin/Laporan_Pembelian');
	}

	public function Hapus_Keluar($id){

		$this->M_pengolahan->hapus_data($id, 'pengeluaran');
		redirect('Admin/laporan_pengeluaran');
	}

}