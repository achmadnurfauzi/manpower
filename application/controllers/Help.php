<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Help extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = "Garuda Indonesia - Help";
		$this->load->view('head', $data);
		$this->load->view('navbar');
		$this->load->view('View_help');
		$this->load->view('down');
	}
}
