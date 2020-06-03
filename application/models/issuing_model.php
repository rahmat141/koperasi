<?php
	class issuing_model extends CI_Model {
		function tampil_data() {
			$this->db->select('pc.nama_barang, i.jumlah, i.tgl_keluar');
			$this->db->from('issuing i');
			$this->db->join('pack pc','i.id_brg_pack = pc.id_brg_pack');

			$query = $this->db->get();
			return $query;
		}

		function input_data($data) {
			$this->db->insert('issuing', $data);
		}

		function hapus_data($where) {
			$this->db->where($where);
			$this->db->delete('issuing');
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
			return $this->db->get('issuing');
		}

		function data_barang() {
			return $this->db->get('pack');
		}

		function updateJumlah() {
			return $query = $this->db->query('SELECT pack.nama_barang, SUM(issuing.jumlah) AS "Jumlah"
											  FROM pack JOIN issuing
											  ON pack.id_brg_pack = issuing.id_brg_pack
											  GROUP BY pack.id_brg_pack');
		}

		// function prod_keluar() {
		// 	return $query = $this->db->query('SELECT SUM(penjualan.pcs) AS "pcs"
		// 									  FROM penjualan JOIN produk
		// 									  ON  penjualan.id_produk = produk.id_produk
		// 									  GROUP BY produk.id_produk');
		// }

		// function stokAkhir() {
		// 	return $query = $this->db->query('SELECT FORMAT(SUM(jumlah)-SUM(pcs)
		// 									  FROM packing JOIN penjualan
		// 									  ON packing.id)')
		// }

		
	}
?>
