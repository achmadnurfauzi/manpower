<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_pegawai extends CI_Controller {

	public function __construct(){
			parent::__construct();
			if($this->session->userdata('logged_in') !== TRUE){
	      redirect('login');
	    }

		$this->load->model('Model_Chart');
	}

	public function index(){
      
        $data['dataunitvp'] = $this->Model_Chart->dataunitvp();
		    $this->load->view('View_chart',$data);
	}

	public function getPersk($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getPersk($unitvp,$bulan);
    echo json_encode($data);

  }

  public function getStruktural($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getStruktural($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getFungsional($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getFungsional($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getCrew($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getCrew($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getWorkOutside($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getWorkOutside($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getProject($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getProject($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getHubungan($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getHubungan($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getGP($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getGP($unitvp,$bulan);
    echo json_encode($data);
  }
  public function getUmur($unitvp = 'all', $bulan = 'all')
  {
     $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getUmur($unitvp,$bulan);
    echo json_encode($data);
  }
  public function getAgeGender($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getAgeGender($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getPerskUmur($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_Chart');
    $data = $this->Model_Chart->getPerskUmur($unitvp,$bulan);
    echo json_encode($data);
  }

}
