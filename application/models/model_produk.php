<?php 
    class model_produk extends CI_Model{

        public function insert_produk($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_produk(){
    		$this->db->select('id_produk,nama,harga, ukuran, kualitas');
    		$this->db->from('produk');
    		$query = $this->db->get();
    		return $query->result();
    	}

    	public function edit_produk($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_produk($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_produk($where,$table){
        	$this->db->delete($table,$where);
    	}
    }
?>