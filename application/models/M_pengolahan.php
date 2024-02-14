<?php 
/**
 * 
 */
class M_pengolahan extends CI_Model{
	//method yang dibuat di controller (Admin.php)
	public function tampil_laporan_masuk(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('pemasukan.*, bahan.nama_bahan, bahan.satuan');
		$this->db->from('pemasukan');
        $this->db->join('bahan', 'pemasukan.kode_bahan = bahan.kode_bahan');
	$query = $this->db->get();
        return $query->result();
	}

	public function tampil_laporan_keluar(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('pengeluaran.*, bahan.nama_bahan, bahan.satuan');
		$this->db->from('pengeluaran');
        $this->db->join('bahan', 'pengeluaran.kode_bahan = bahan.kode_bahan');
	$query = $this->db->get();
        return $query->result();
	}

	public function tampil_bahan(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('bahan')->result();
	}

	public function tampil_penjualan(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('penjualan')->result();
	}

	public function total_bahan(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('kode_bahan, COUNT(kode_bahan) as total');
	return $this->db->get('bahan')->result();
	}

	public function jumlah_masuk(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('nbm, COUNT(nbm) as total');
	return $this->db->get('pemasukan')->result();
	}

	public function jumlah_keluar(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('nbk, COUNT(nbk) as total');
	return $this->db->get('pengeluaran')->result();
	}

	public function total_masuk(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('jumlah, SUM(jumlah) as total');
	return $this->db->get('pemasukan')->result();
	}

	public function pembelian($dateA, $dateB){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('harga, SUM(harga) as total');
		 $this->db->where('tanggal_masuk >=',$dateA);
       $this->db->where('tanggal_masuk <=', $dateB);
	return $this->db->get('pemasukan')->result();
	}

	public function total_keluar(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
		$this->db->select('jumlah, SUM(jumlah) as total');
	return $this->db->get('pengeluaran')->result();
	}

	public function total_pemasukan(){
		$this->db->select('harga, SUM(harga) as total');
	return $this->db->get('pemasukan')->result();
	}

	public function total_penjualan(){
		$this->db->select('harga, SUM(harga) as total');
	return $this->db->get('penjualan')->result();
	}

	public function total_pembelian_tanggal(){
		$this->db->select('tanggal');
		$this->db->select('harga, SUM(harga) as total');
		$this->db->group_by('tanggal');
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('penjualan')->result();
	}

	public function total_pembelian_bahan(){
		$this->db->select('pemasukan.*, bahan.nama_bahan');
		$this->db->select('pemasukan.harga, SUM(pemasukan.harga) as total');
		$this->db->from('pemasukan');
        $this->db->join('bahan', 'pemasukan.kode_bahan = bahan.kode_bahan');
        $this->db->group_by('pemasukan.kode_bahan');
		$query = $this->db->get();
        return $query->result();
	}


	public function tampil_data_admin(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('admin')->result();
	}
	
	//method yang dibuat di controller (Admin.php)
	public function input_data($tabel,$data){
		//memasukan data inputan ke tabel tb_mahasiswa
		$this->db->insert($tabel, $data);
	}

	//method yang dibuat di controller (Admin.php) untuk menghapus data
	public function hapus_data($id, $tabel){
		$this->db->where('id',$id);
		//menghapus data dari tabel tb_mahasiswa
		$this->db->delete($tabel);
	}

	//method yang dibuat di controller (Admin.php) untuk merubah data 
	public function get_data($id, $table){
		//merubah data dari tabel tb_mahasiswa
		//$this->db->from();
		$this->db->where('id',$id);
	return $this->db->get($table)->row();
	}
	
	//method yang dibuat di controller (Admin.php) untuk mengupdate data 
	public function update_data($id,$data,$table){
		$this->db->where('id',$id);
		//mengupdate data dari tabel tb_mahasiswa
		$this->db->update($table,$data);
	}

	public function update_stok($where,$data1){
		$this->db->where($where);
		//mengupdate data dari tabel tb_mahasiswa
		$this->db->update('bahan', $data1);
	}

	//method yang dibuat di controller (Admin.php dan C_Mahasiswa) untuk menampilkan detail data 
	public function detail_data($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->row(); 
	}

	public function cari_bahan($where){
		$this->db->where($where);
	return $this->db->get('bahan')->num_rows(); 
	}

	public function data_bahan($where){
		$this->db->where($where);
	return $this->db->get('bahan')->row(); 
	}

	public function total_pesan($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->num_rows(); 
	}

	public function total_harga($where, $tabel){
		$this->db->select('harga, SUM(harga) as total');
		$this->db->where($where);
	return $this->db->get($tabel)->result();
	}

	public function laporan($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->result(); 
	}


   	public function cetak_laporan_masuk($dateA, $dateB)
    {
    	$this->db->select('pemasukan.*, bahan.nama_bahan, bahan.satuan');
		$this->db->from('pemasukan');
        $this->db->join('bahan', 'pemasukan.kode_bahan = bahan.kode_bahan');
        $this->db->where('tanggal_masuk >=',$dateA);
       $this->db->where('tanggal_masuk <=', $dateB);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_laporan_keluar($dateA, $dateB)
    {
    	$this->db->select('pengeluaran.*, bahan.nama_bahan, bahan.satuan');
		$this->db->from('pengeluaran');
        $this->db->join('bahan', 'pengeluaran.kode_bahan = bahan.kode_bahan');
        $this->db->where('tanggal_keluar >=',$dateA);
       $this->db->where('tanggal_keluar <=', $dateB);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_laporan_penjualan($dateA, $dateB)
    {
    	$this->db->select('*');
		$this->db->from('penjualan');
        $this->db->where('tanggal >=',$dateA);
       $this->db->where('tanggal <=', $dateB);
        $query = $this->db->get();
        return $query->result();
    }

        	 




}

//end of file M_mahasiswa.php
//location application\model