<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function login()
	{
		$this->load->view('Login');
	}
	public function loginCheck()
	{
		$data['email']=$this->input->post('email');
		$data['password']=sha1($this->input->post('password'));
		$success=$this->db->get_where('admin',$data)->result_array();
		if(count($success)>0){
			$_SESSION['admin']=$data['email'];
			// Cheange SESSION NAME to give access for another user according to their access rights.
			echo "success";
		}else{
			echo "failed";
		}
	}
	public function logout()
	{
		unset($_SESSION['admin']);
		$this->session->set_flashdata('message','Successfully logged out');
		redirect(base_url().'index.php/Admin/login');
	}
}