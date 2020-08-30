<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Jobcategory extends CI_Model {
	public function view(){
		return $this->db->get('jobcategory')->result();
	}

		public function getdatajobcategory()
	    {
	        $this->db->select('*');
	        $this->db->from('jobcategory');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

			public function inputjobcategory($data)
		 {
				 return $this->db->insert('jobcategory', $data);
		 }

		 public function datajobcategoryedit($id)
		 {
				 $this->db->select('*');
				 $this->db->from('jobcategory');
				 $this->db->where('id',$id);
				 $query = $this->db->get();
				 return $query->row_array();
		 }

		 public function ubahjobcategory($data,$id)
		 {
				 $this->db->where('id',$id);
				 return $this->db->update('jobcategory',$data);
		 }

		 public function hapusdatajobcategory($id)
		 {
				 $this->db->where('id',$id);
				 return $this->db->delete('jobcategory');

		 }
	}
