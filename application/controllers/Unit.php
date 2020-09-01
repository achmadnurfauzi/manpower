<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{

	private $filename = "unit_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}

		$this->load->model('Model_unit');
	}

	public function index()
	{
		$data['title'] = "Garuda Indonesia - Unit";
		$this->load->view('unit/View_Unit', $data);
		$this->load->view('unit/Form_addunit');
	}

	public function DataUnit()
	{

		$DataUnit = $this->Model_unit->getdataunit();
		$no = 1;
		foreach ($DataUnit as  $value) {
			$tbody = array();
			$tbody[] = $no++;
			$tbody[] = $value['org_unit'];
			$tbody[] = $value['unitvp'];
			$tbody[] = $value['direktorat'];
			$aksi = "<button class='btn btn-success ubah-unit' data-toggle='modal' data-id=" . $value['id'] . ">Ubah</button>" . ' ' . "<button class='btn btn-danger hapus-unit' id='id' data-toggle='modal' data-id=" . $value['id'] . ">Hapus</button>";
			$tbody[] = $aksi;
			$data[] = $tbody;
		}
		if ($DataUnit) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}

	public function tambahunit()
	{
		if ($this->session->userdata('level') !== 'user') {
			// didapat dari ajax yang dimana data{org_unit:org_unit,unitvp:unitvp,direktorat:direktorat}
			$org_unit = $this->input->post('org_unit');
			$unitvp = $this->input->post('unitvp');
			$direktorat = $this->input->post('direktorat');

			$tambahunit = array(
				'org_unit' => $org_unit,
				'unitvp' => $unitvp,
				'direktorat' => $direktorat
			);

			$data = $this->Model_unit->inputunit($tambahunit);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function formedit()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_editunit.php data{id:id}
			$id = $this->input->post('id');
			$data['dataperunit'] = $this->Model_unit->dataunitedit($id);
			$this->load->view('unit/form_editunit', $data);
		} else {
			redirect('Error403');
		}
	}

	public function ubahunit()
	{
		if ($this->session->userdata('level') !== 'user') {
			$objdata = array(
				'unitvp' => $this->input->post('editunitvp'),
				'direktorat' => $this->input->post('editdirektorat')
			);

			$id = $this->input->post('id');
			$data = $this->Model_unit->ubahunit($objdata, $id);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function hapusunit()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_addunit.php data{id:id}
			$id = $this->input->post('id');

			$data = $this->Model_unit->hapusdataunit($id);
			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}
}
