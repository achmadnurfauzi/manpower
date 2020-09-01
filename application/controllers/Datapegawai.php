<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapegawai extends CI_Controller
{

	private $filename = "pegawai_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}

		$this->load->model('Model_pegawai');
	}

	public function index()
	{
		$data['title'] = "Garuda Indonesia - Data Pegawai";
		$this->load->view('pegawai/View_Pegawai', $data);
	}

	public function DataPegawai()
	{

		$DataPegawai = $this->Model_pegawai->getdatapegawai();
		$no = 1;
		foreach ($DataPegawai as  $value) {
			$tbody = array();
			$tbody[] = $no++;
			$tbody[] = $value['no_pegawai'];
			$tbody[] = $value['name_pegawai'];
			$tbody[] = $value['gender'];
			$tbody[] = $value['persg'];
			$tbody[] = $value['persk'];
			$tbody[] = $value['birthdate'];
			$tbody[] = $value['age'];
			$tbody[] = $value['position_text'];
			$tbody[] = $value['org_unit'];
			$tbody[] = $value['org_unittext'];
			$tbody[] = $value['jobtext'];
			$tbody[] = $value['date_input'];
			$data[] = $tbody;
		}
		if ($DataPegawai) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}

	public function form()
	{
		$data['title'] = "Garuda Indonesia - Form Add Pegawai";
		if ($this->session->userdata('level') !== 'user') {
			$this->load->view('head', $data);
			$this->load->view('navbar');
			$this->load->view('pegawai/Form_Pegawai');
			$this->load->view('down');
		} else {
			redirect('Error403');
		}
	}

	public function import()
	{
		// Load plugin PHPExcel nya
		if ($this->session->userdata('level') !== 'user') {

			$upload = $this->Model_pegawai->upload_file($this->filename);

			if ($upload['result'] == "success") {

				include APPPATH . 'third_party/PHPExcel/PHPExcel.php';



				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

				// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
				$data = array();

				$numrow = 1;
				foreach ($sheet as $row) {
					// Cek $numrow apakah lebih dari 1
					// Artinya karena baris pertama adalah nama-nama kolom
					// Jadi dilewat saja, tidak usah diimport
					if ($numrow > 1) {
						// Kita push (add) array data ke variabel data
						array_push($data, array(
							'no_pegawai' => $row['A'],
							'name_pegawai' => $row['B'],
							'gender' => $row['E'],
							'persg' => $row['F'],
							'persk' => $row['G'],
							'birthdate' => $row['J'],
							'age' => $row['K'],
							'position_text' => $row['U'],
							'org_unit' => $row['W'],
							'org_unittext' => $row['X'],
							'jobtext' => $row['Y'],
						));
					}

					$numrow++; // Tambah 1 setiap kali looping

				}

				// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
				$this->Model_pegawai->insert_multiple($data);

				redirect("Datapegawai");
			} else { // Jika proses upload gagal
				$data['upload_error'] = $upload['error'];
				redirect('Datapegawai/form');
			}
		} else {
			redirect('Error403');
		} // Redirect ke halaman awal (ke controller siswa fungsi index)
	}

	public function hapuspegawai()
	{
		if ($this->session->userdata('level') !== 'user') {
			// id yang telah diparsing pada ajax form_addpersk.php data{id:id}

			$data = $this->Model_pegawai->hapusdatapegawai();
			echo json_encode($data);
			redirect('Datapegawai');
		} else {
			redirect('Error403');
		}
	}
}
