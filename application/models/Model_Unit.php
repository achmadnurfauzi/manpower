<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Unit extends CI_Model {
	public function view(){
		return $this->db->get('unit')->result();
	}

	public function getdataunit()
    {
        $this->db->select('*');
        $this->db->from('unit');
        $query = $this->db->get();
        return $query->result_array();
    }

		public function inputunit($data)
	 {
			 return $this->db->insert('unit', $data);
	 }

	 public function dataunitedit($id)
	 {
			 $this->db->select('*');
			 $this->db->from('unit');
			 $this->db->where('id',$id);
			 $query = $this->db->get();
			 return $query->row_array();
	 }

	 public function ubahunit($data,$id)
	 {
			 $this->db->where('id',$id);
			 return $this->db->update('unit',$data);
	 }

	 public function hapusdataunit($id)
	 {
			 $this->db->where('id',$id);
			 return $this->db->delete('unit');

	 }
}
