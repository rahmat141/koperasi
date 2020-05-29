<?php
class Model_cashflow extends CI_Model{

    public function getData(){
    	$this->db->select('id_transaksi,nama_transaksi, FORMAT(debit,0) AS Debit, FORMAT(kredit,0) as Kredit, kategori, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal');
        $this->db->from('cashflow');
        // $this->db->where('idOrganisasi',$where);
        
        $this->db->order_by('id_transaksi', 'ASC');
        $query = $this->db->get();
        //if($query->num_rows() > 0) {
            return $query;
        //}
   	}

   	public function edit_pemasukan($where,$table){      
        return $this->db->get_where($table,$where);
    }
    public function edit_pengeluaran($where,$table){      
        return $this->db->get_where($table,$where);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    } 

    public function getTotalKas($where){
    	$this->db->select("FORMAT((SUM(pemasukan_kas)-SUM(pengeluaran_kas)),0) as total_kas");
        $this->db->where('idOrganisasi',$where);
    	$this->db->from('kas');
    	$query = $this->db->get();
    	return $query;
    }

    public function getlaporan(){
        $this->db->select("nama_transaksi,FORMAT(debit,0) as debit,SUM(debit) as total_pemasukan, SUM(pengeluaran_kas) AS total_keluar,FORMAT((SUM(pemasukan_kas)-SUM(pengeluaran_kas)),0) as total_kas ,idOrganisasi");
        // $this->db->where('idOrganisasi', $where);
        $this->db->from('cashflow');
        $query = $this->db->get();
        return $query;
    }
    public function getPemasukan($where){
        $this->db->select('id_transaksi,nama_transaksi, FORMAT(debit,0) AS Debit, kategori, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal');
        $this->db->from('cashflow');
        $this->db->where('id',$where);
        
        $this->db->order_by('id_transaksi', 'ASC');
        $query = $this->db->get();
        //if($query->num_rows() > 0) {
            return $query;
        //}
    }
    public function getPengeluaran($where){
        $this->db->select('id_transaksi,nama_transaksi, FORMAT(kredit,0) AS Kredit, kategori, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal');
        $this->db->from('cashflow');
        $this->db->where('kredit > 0');
        $this->db->where('id',$where);
        
        $this->db->order_by('id_transaksi', 'ASC');
        $query = $this->db->get();
        //if($query->num_rows() > 0) {
            return $query;
        //}
    }
    public function getTotalPemasukan(){
        $this->db->select('FORMAT(SUM(debit),0) AS total_pemasukan');
        $this->db->from('cashflow');

        $query = $this->db->get();
        return $query;
    }
    public function getTotalPengeluaran(){
        $this->db->select('FORMAT(SUM(kredit),0) AS total_pengeluaran');
        $this->db->from('cashflow');

        $query = $this->db->get();
        return $query;
    }
    public function getTotal(){
        $this->db->select('FORMAT((SUM(debit)-SUM(kredit)),0) AS saldo_akhir');
        $this->db->from('cashflow');
         $query = $this->db->get();
         return $query;
    }
    public function cetakData($where,$where2){
        $this->db->from('cashflow');
        $this->db->where('tanggal >=', $where);
        $this->db->where('tanggal <=', $where2);

        $query = $this->db->get();
        // $query = 'SELECT * FROM cashflow WHERE tanggal BETWEEN $tgl_awal AND $tgl_akhir';
        return $query;
    }
    public function hapus_kas($where,$table){
        $this->db->delete($table,$where);
    }
//Bulan Untuk Kas

    public function insert($data,$table){
        $this->db->insert($table,$data);
        // if ($this->db->affected_rows() > 0) {
        //     $data['teks'] = "input data berhasil";
        //     $this->session->set_flashdata($data);
        // }
    }
}