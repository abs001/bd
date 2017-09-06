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
		$login_date = date("Y-m-d H:i:s");
		$this->AdminModel->setLoginTime($login_date);
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
	// EMPLOYEE
	public function createEmployee(){
		$data['pagename'] = "CreateEmp";
		$data['active_menu'] = "employee";
		$data['designation'] = $this->AdminModel->getDesignation();//get options in '<select></select>' tag
		$data['department'] = $this->AdminModel->getDepartment();//get options in '<select></select>' tag
		$data['employeeResult'] = $this->AdminModel->createEmployee();
		$this->load->view('Director',$data);
	}
	public function saveEmployee(){
		$data['department'] = $this->input->post('department');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['telephone'] = $this->input->post('telephone');
		$date = strtotime($this->input->post('birthdate'));
		$data['birthdate'] = date('Y-m-d',$date);
		$data['designation'] = $this->input->post('designation');
		$data['qualification'] = $this->input->post('qualification');
		$data['type'] = $this->input->post('type');
		$result = $this->AdminModel->saveEmployee($data);
		echo json_encode($result);	
	}
	public function editEmployee($id){
		$result = $this->AdminModel->editEmployee($id);
		echo json_encode($result);
	}
	public function updateEmployee(){
		$data['id'] = $this->input->post('id');
		$data['department'] = $this->input->post('department');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['telephone'] = $this->input->post('telephone');
		$date = strtotime($this->input->post('birthdate'));
		$data['birthdate'] = date('Y-m-d',$date);
		$data['designation'] = $this->input->post('designation');
		$data['qualification'] = $this->input->post('qualification');
		$data['type'] = $this->input->post('type');
		$result = $this->AdminModel->updateEmployee($data);
		echo json_encode($result);	
	}
	public function deleteEmployee($id){
		$result = $this->AdminModel->deleteEmployee($id);
		echo json_encode($result);
	}
	// USER Controller functions...
	public function createUser(){
		$data['pagename'] = "CreateUser";
		$data['active_menu'] = "employee";
		$data['department'] = $this->AdminModel->getDepartment();//get options in '<select></select>' tag
		$data['employee'] = $this->AdminModel->getEmployee();//get opftions in '<select></select>' tag
		$data['employeeResult'] = $this->AdminModel->createUser();
		$this->load->view('Director',$data);
	}
	public function saveUser(){
		$data['username'] = $this->input->post('username');
		$data['department'] = $this->input->post('department');
		$data['password'] = rand(111111,999999);
		$data['employee_name'] = $this->input->post('employee_name');
		$data['lab_unit'] = $this->input->post('lab_unit');
		$data['emailid'] = $this->input->post('emailid');
		$data['phone'] = $this->input->post('phone');
		$data['mobile'] = $this->input->post('mobile');
		$data['usertype'] = $this->input->post('usertype');
		$result = $this->AdminModel->saveUser($data);
		echo json_encode($result);	
	}
	public function checkUserName($username){ //Check user available or not
		$result = $this->AdminModel->checkUserName($username);
		echo json_encode($result);
	}
	public function userEdit($id){
		$result = $this->AdminModel->userEdit($id);
		echo json_encode($result);
	}
	public function updateUser(){
		$data['id'] = $this->input->post('id');
		$data['department'] = $this->input->post('department');
		$data['employee_name'] = $this->input->post('employee_name');
		$data['lab_unit'] = $this->input->post('lab_unit');
		$data['emailid'] = $this->input->post('emailid');
		$data['phone'] = $this->input->post('phone');
		$data['mobile'] = $this->input->post('mobile');
		$data['usertype'] = $this->input->post('usertype');
		$result = $this->AdminModel->updateUser($data);
		echo json_encode($result);	
	}
	public function deleteUser($id){
		$result = $this->AdminModel->deleteUser($id);
		echo json_encode($id);
	}
	// Assign Role
	public function assignRole(){
		$data['pagename'] = "assignrole";
		$data['active_menu'] = "employee";
		$data['role'] = $this->AdminModel->getRole();
		$data['employee'] = $this->AdminModel->getUser();
		// $data['employeeResult'] = $this->AdminModel->createUser();
		$this->load->view('Director',$data);
	}
	public function assignRoleSave($id,$roleName){
		$data['id'] = $id;
		$data['role'] = $roleName;		
		$result = $this->AdminModel->assignRoleSave($data);
		echo json_encode($result);
	}
}