<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_pegawai extends CI_Controller {

	public function __construct(){
			parent::__construct();
			if($this->session->userdata('logged_in') !== TRUE){
	      redirect('login');
	    }

		$this->load->model('Model_chart');
	}

	public function index(){
      
        $data['dataunitvp'] = $this->Model_chart->dataunitvp();
		    $this->load->view('View_chart',$data);
	}

	public function getPersk($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getPersk($unitvp,$bulan);
    echo json_encode($data);

  }

  public function getStruktural($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getStruktural($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getFungsional($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getFungsional($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getCrew($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getCrew($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getWorkOutside($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getWorkOutside($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getProject($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getProject($unitvp,$bulan);
    echo json_encode($data);
  }

   public function getHubungan($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getHubungan($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getGP($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getGP($unitvp,$bulan);
    echo json_encode($data);
  }
  public function getUmur($unitvp = 'all', $bulan = 'all')
  {
     $this->load->model('Model_chart');
    $data = $this->Model_chart->getUmur($unitvp,$bulan);
    echo json_encode($data);
  }
  public function getAgeGender($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getAgeGender($unitvp,$bulan);
    echo json_encode($data);
  }

  public function getPerskUmur($unitvp = 'all', $bulan = 'all')
  {
    $this->load->model('Model_chart');
    $data = $this->Model_chart->getPerskUmur($unitvp,$bulan);
    echo json_encode($data);
  }

}
