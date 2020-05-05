<?php 
 
class M_dataGaji extends CI_Model{
	function tampil_data(){
		$this->db->order_by('tgl', 'DESC');
		$this->db->join('pegawai', 'pegawai.id_pegawai = penggajian.id_pegawai');
		return $this->db->get('penggajian');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function get_pegawai() // getAll
	{
    	$query = $this->db->get('pegawai');
    	return $query->result();
	}
	public function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }

    public function get($id_gaji) {
     	return $this->db->where('id_gaji', $id_gaji)->get('penggajian')->row(1);
	}

    public function update($data, $id_gaji)
	{
    	return $this->db->where('id_gaji', $id_gaji)->update('penggajian', $data);
	}

    public function hapus_data($where,$table){
        $this->db->delete($table,$where);
    }
	
	function tampilGaji($id_gaji)
	{
		$this->db->order_by('tgl', 'DESC');
		$this->db->join('pegawai', 'pegawai.id_pegawai = penggajian.id_pegawai');
		$this->db->where('id_gaji', $id_gaji);
		return $this->db->get('penggajian')->row(1);

	}
}