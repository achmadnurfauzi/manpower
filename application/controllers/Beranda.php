<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
	}

	function index()
	{
		$data['title'] = "Garuda Indonesia - Home";
		$this->load->view('head', $data);
		$this->load->view('navbar');
		$this->load->view('tampil_home');
		$this->load->view('down');
	}
}
