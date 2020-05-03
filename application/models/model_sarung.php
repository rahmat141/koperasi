<?php 
    class model_sarung extends CI_Model{

        public function insert($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil(){
    		$this->db->select('id,tanggal,sales,no_Nota,item,qyt,Format(harga_perqyt,0) as harga_perqyt,keterangan,Format((qyt * harga_perqyt),0) as total');
    		$this->db->from('penjualan_sarung');
    		$query = $this->db->get();
    		return $query->result();
    	}

    	public function edit_kehadiran($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_kehadiran($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_kehadiran($where,$table){
        	$this->db->delete($table,$where);
    	}
    }
?>