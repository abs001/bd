<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();        
        $this->load->model('AdminModel');         
	}
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
	// All role related functions
	public function role(){
		$data['Roleresult'] = $this->AdminModel->role();
		$data['pagename'] = "role";
		$data['active_menu'] = "employee";
		$this->load->view('Director',$data);
	}
	public function addRole(){
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$result = $this->AdminModel->addRole($data);
		echo json_encode($result);
	}
	public function deleteRole($id){
		$result = $this->AdminModel->deleteRole($id);
		echo $result;
	}
	//All department related functions
	public function department(){
		$data['Dept_result'] = $this->AdminModel->department();
		$data['pagename'] = "department";
		$data['active_menu'] = "employee";
		$this->load->view('Director',$data);
	}
	public function addDepartment(){
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$result = $this->AdminModel->addDepartment($data);
		echo json_encode($result);	
	}
	public function deleteDept($id){
		$result = $this->AdminModel->deleteDept($id);
		echo $result;
	}
	//All designation related functions
	public function designation(){
		$data['Designation_result'] = $this->AdminModel->designation();
		$data['pagename'] = "designation";
		$data['active_menu'] = "employee";
		$this->load->view('Director',$data);
	}
	public function addDesignation(){
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$result = $this->AdminModel->addDesignation($data);
		echo json_encode($result);	
	}
	public function deleteDesignation($id){
		$result = $this->AdminModel->deleteDesignation($id);
		echo $result;
	}
}