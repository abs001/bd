<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if (isset($_SESSION['admin'])) {
			$this->session->set_flashdata('message','Welcome admin');
			$this->load->model('AdminModel');         
			$data['lastLogin'] = $this->AdminModel->getLastLoginTime($_SESSION['admin']);
			$data['pagename'] = "home";
			$data['active_menu'] = "dashboard";
			$this->load->view('Director',$data);
		}else{
			$this->session->set_flashdata('message','Login first to access your account');
			redirect(base_url().'index.php/Admin/login');
		}
	}
}
