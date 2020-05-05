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
//################################## PRODUKSI ############################################

         public function insert_produksi($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_produksi(){
            $this->db->select('ps.id_produksi,ps.id_pegawai,p.nama as namaPegawai,p.pekerjaan,ps.id_produk,pr.nama as namaProduk,pr.ukuran,
                pr.kualitas,ps.tanggal_produksi,ps.jumlah');
            $this->db->from('produksi ps');
            $this->db->join('pegawai p',' ps.id_pegawai = p.id_pegawai');
            $this->db->join('produk pr',' ps.id_produk = pr.id_produk');
            $query = $this->db->get();
            return $query->result();
        }

         public function pegawai(){
            $this->db->select('*');
            $this->db->from('pegawai');
            $query = $this->db->get();
            return $query->result();
        }

         public function produk(){
            $this->db->select('*');
            $this->db->from('produk');
            $query = $this->db->get();
            return $query->result();
        }

        public function edit_produksi($where,$table){      
            return $this->db->get_where($table,$where);
        }

        public function update_produksi($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        } 

        public function hapus_produksi($where,$table){
            $this->db->delete($table,$where);
        }

//############################### PENJUALAN ################################

         public function insert_penjualan($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_penjualan(){
            $this->db->select('pn.id_penjualan,pn.id_produk,p.nama as namaProduk, p.ukuran,p.kualitas,pn.id_pembeli,pm.nama as namaPembeli,
                pn.keterangan,pn.sales,pn.tanggal,pn.no_nota, pn.pcs, p.harga,Format((pn.pcs * p.harga),0) as total,p.harga');
            $this->db->from('penjualan pn');
            $this->db->join('produk p',' pn.id_produk = p.id_produk');
            $this->db->join('pembeli pm',' pn.id_pembeli = pm.id_pembeli');
            $query = $this->db->get();
            return $query->result();

           
        }

       public function pembeli(){
            $this->db->select('*');
            $this->db->from('pembeli');
            $query = $this->db->get();
            return $query->result();
        }

        public function edit_penjualan($where,$table){      
            return $this->db->get_where($table,$where);
        }

        public function update_penjualan($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        } 

        public function hapus_penjualan($where,$table){
            $this->db->delete($table,$where);
        }
    }
?>