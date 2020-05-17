<?php
	class pack_model extends CI_Model {
		function tampil_data() {
			return $this->db->get('pack');
			// return $this->db->join('');
		}

		function input_data($data) {
			$this->db->insert('pack', $data);
		}

		function hapus_data($where) {
			$this->db->where($where);
			$this->db->delete('pack');
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
			return $this->db->get('pack');
		}
	}
?>
