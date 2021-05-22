<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$this->load->model('main_model');
		$data['judul'] = $this->main_model->home();
		$data['link_home_view'] = $this->main_model->home();
		$data['link_artikel'] = $this->main_model->article();
		$data['link_contact'] = $this->main_model->contactus();
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('home_view', $data);
		$this->load->view('template/footer');
	}

	public function artikel()
	{
		$this->load->model('main_model');
		$data['judul'] = $this->main_model->article();
		$data['link_home'] = $this->main_model->home();
		$data['link_artikel'] = $this->main_model->article();
		$data['link_contact'] = $this->main_model->contactus();
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('artikel_view', $data);
		$this->load->view('template/footer');
	}

	public function contact()
	{
		$this->load->model('main_model');
		$data['judul'] = $this->main_model->contactus();
		$data['link_home'] = $this->main_model->home();
		$data['link_artikel'] = $this->main_model->article();
		$data['link_contact'] = $this->main_model->contactus();
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('contact_view');
		$this->load->view('template/footer');
	}
}
