<?php
	class packing_model extends CI_Model {
		function tampil_data() {
			$this->db->select('pc.nama_barang, p.jumlah,p.tgl_masuk');
			$this->db->from('packing p');
			$this->db->join('pack pc','p.id_brg_pack = pc.id_brg_pack');

			$query = $this->db->get();
			return $query;
		}

		function input_data($data) {
			$this->db->insert('packing', $data);
		}

		function hapus_data($where) {
			$this->db->where($where);
			$this->db->delete('packing');
		}

		function edit_data($data, $where) {
			$query = $this->db->get_where($where, $data);
			return $query;
		}

		function update_data($where, $data, $table) {
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		function ambil_data() {
			return $this->db->get('packing');
		}

		function data_barang() {
			return $this->db->get('pack');
		}

		function updateJumlah() {
			return $query = $this->db->query('SELECT pack.nama_barang, SUM(packing.jumlah) AS "Jumlah"
											  FROM pack JOIN packing
											  ON pack.id_brg_pack = packing.id_brg_pack
											  GROUP BY pack.id_brg_pack');
		}

		
	}
?>
