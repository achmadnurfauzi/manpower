<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobcategory extends CI_Controller
{

	private $filename = "Jobcategory_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}

		$this->load->model('Model_Jobcategory');
	}

	public function index()
	{
		$data['title'] = "Garuda Indonesia - Jobcategory";
		$this->load->view('jobcategory/View_Jobcategory', $data);
		$this->load->view('jobcategory/Form_addJobcategory', $data);
	}

	public function DataJobcategory()
	{
		$DataJobcategory = $this->Model_Jobcategory->getdatajobcategory();
		$no = 1;
		foreach ($DataJobcategory as  $value) {
			$tbody = array();
			$tbody[] = $no++;
			$tbody[] = $value['jobtext'];
			$tbody[] = $value['jobcat'];
			$tbody[] = $value['jobclass'];
			$tbody[] = $value['status'];
			$tbody[] = $value['level'];
			$aksi = "<button class='btn btn-success ubah-jobcategory' data-toggle='modal' data-id=" . $value['id'] . ">Ubah</button>" . ' ' . "<button class='btn btn-danger hapus-jobcategory' id='id' data-toggle='modal' data-id=" . $value['id'] . ">Hapus</button>";
			$tbody[] = $aksi;
			$data[] = $tbody;
		}
		if ($DataJobcategory) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}

	public function tambahjobcategory()
	{
		if ($this->session->userdata('level') !== 'user') {
			// didapat dari ajax yang dimana data{jobtext:jobtext,jobcat:jobcat,jobclass:jobclass,status:status,level:level}
			$jobtext = $this->input->post('jobtext');
			$jobcat = $this->input->post('jobcat');
			$jobclass = $this->input->post('jobclass');
			$status = $this->input->post('status');
			$level = $this->input->post('level');

			$tambahjobcategory = array(
				'jobtext' => $jobtext,
				'jobcat' => $jobcat,
				'jobclass' => $jobclass,
				'status' => $status,
				'level' => $level
			);

			$data = $this->Model_Jobcategory->inputjobcategory($tambahjobcategory);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function formedit()
	{
		// id yang telah diparsing pada ajax ajaxcrud.php data{id:id}
		if ($this->session->userdata('level') !== 'user') {
			$id = $this->input->post('id');
			$data['datajobcategory'] = $this->Model_Jobcategory->datajobcategoryedit($id);
			$this->load->view('jobcategory/Form_editJobcategory', $data);
		} else {
			redirect('Error403');
		}
	}

	public function ubahjobcategory()
	{
		if ($this->session->userdata('level') !== 'user') {
			$objdata = array(
				'jobcat' => $this->input->post('editjobcat'),
				'jobclass' => $this->input->post('editjobclass'),
				'status' => $this->input->post('editstatus'),
				'level' => $this->input->post('editlevel')
			);

			$id = $this->input->post('id');
			$data = $this->Model_Jobcategory->ubahjobcategory($objdata, $id);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}

	public function hapusjobcategory()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_addjobcategory.php data{id:id}
			$id = $this->input->post('id');
			$data = $this->Model_Jobcategory->hapusdatajobcategory($id);

			echo json_encode($data);
		} else {
			redirect('Error403');
		}
	}
}
