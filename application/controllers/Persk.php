<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persk extends CI_Controller
{

	private $filename = "Persk_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}

		$this->load->model('Model_Persk');
	}

	public function index()
	{
		$data['title'] = "Garuda Indonesia - Data Persk";
		$this->load->view('persk/View_Persk', $data);
		$this->load->view('persk/Form_addPersk');
	}

	public function DataPersk()
	{

		$DataPersk = $this->Model_Persk->getdatapersk();
		$no = 1;
		foreach ($DataPersk as  $value) {
			$tbody = array();
			$tbody[] = $no++;
			$tbody[] = $value['persk'];
			$tbody[] = $value['category'];
			$tbody[] = $value['level'];
			$aksi = "<button class='btn btn-success ubah-persk' data-toggle='modal' data-id=" . $value['id'] . ">Ubah</button>" . ' ' . "<button class='btn btn-danger hapus-persk' id='id' data-toggle='modal' data-id=" . $value['id'] . ">Hapus</button>";
			$tbody[] = $aksi;
			$data[] = $tbody;
		}
		if ($DataPersk) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}

	public function tambahpersk()
	{
		if ($this->session->userdata('level') !== 'user') {
			// didapat dari ajax yang dimana data{persk:persk,category:category,level:level}
			$persk = $this->input->post('persk');
			$category = $this->input->post('category');
			$level = $this->input->post('level');

			$tambahpersk = array(
				'persk' => $persk,
				'category' => $category,
				'level' => $level
			);

			$data = $this->Model_Persk->inputpersk($tambahpersk);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function formedit()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_editpersk.php data{id:id}
			$id = $this->input->post('id');
			$data['datapersk'] = $this->Model_Persk->dataperskedit($id);
			$this->load->view('persk/Form_editPersk', $data);
		} else {
			redirect('Error403');
		}
	}

	public function ubahpersk()
	{
		if ($this->session->userdata('level') !== 'user') {
			$objdata = array(
				'category' => $this->input->post('editcategory'),
				'level' => $this->input->post('editlevel')
			);

			$id = $this->input->post('id');
			$data = $this->Model_Persk->ubahpersk($objdata, $id);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function hapuspersk()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_addpersk.php data{id:id}
			$id = $this->input->post('id');

			$data = $this->Model_Persk->hapusdatapersk($id);
			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}
}
