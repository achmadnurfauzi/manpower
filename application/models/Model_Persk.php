<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Persk extends CI_Model {
	public function view(){
		return $this->db->get('persk')->result();
	}

	public function getdatapersk()
    {
        $this->db->select('*');
        $this->db->from('persk');
        $query = $this->db->get();
        return $query->result_array();
    }

		public function inputpersk($data)
	 {
			 return $this->db->insert('persk', $data);
	 }

	 public function dataperskedit($id)
	 {
			 $this->db->select('*');
			 $this->db->from('persk');
			 $this->db->where('id',$id);
			 $query = $this->db->get();
			 return $query->row_array();
	 }

	 public function ubahpersk($data,$id)
	 {
			 $this->db->where('id',$id);
			 return $this->db->update('persk',$data);
	 }

	 public function hapusdatapersk($id)
	 {
			 $this->db->where('id',$id);
			 return $this->db->delete('persk');

	 }
}

	// Fungsi untuk melakukan proses upload file
