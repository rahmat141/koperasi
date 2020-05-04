<?php 
    class model_pembeli extends CI_Model{

        public function insert_pembeli($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_pembeli(){
    		$this->db->select('id_pembeli,nama,alamat,no_hp');
    		$this->db->from('pembeli');
    		$query = $this->db->get();
    		return $query->result();
    	}

    	public function edit_pembeli($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_pembeli($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_pembeli($where,$table){
        	$this->db->delete($table,$where);
    	}
    }
?>
