<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiagnosticCenter extends CI_Controller {

	public function __construct() {
		parent::__construct();        
        $this->load->model('DataModel');         
	}


	//Start collection center
	public function collectionCenter()
	{
		$data['collectionResult'] = $this->DataModel->getData('collection_center');		
		$data['lab'] = $this->DataModel->getLab();		
		$data['rate'] = $this->DataModel->getRateType();		
		$data['pagename'] = "center";
		$data['category'] = "center";
		$data['active_menu'] = "admin";
		$this->load->view('Director',$data);

	}

	public function createCenter(){
		$data['code'] = $this->input->post('code');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['pincode'] = $this->input->post('pincode');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['mobile'] = $this->input->post('mobile');
		$data['doctor_name'] = $this->input->post('doctor');
		$data['lab_unit'] = $this->input->post('lab');
		$data['rate_type'] = $this->input->post('rate');
		$data['deposit_amount'] = $this->input->post('deposit_amount');
		$data['deposit'] = $this->input->post('deposit');
		$data['login'] = $this->input->post('login');
		$data['password'] = $this->input->post('password');
		$result = $this->DataModel->insertData('collection_center',$data);
		echo json_encode($result);
	}

	public function editCenter($id){
		$result = $this->DataModel->editData('collection_center',$id);
		echo json_encode($result);
	}

	public function deleteCenter($id){
		$result = $this->DataModel->deleteData('collection_center',$id);
		echo $result;
	}

	public function updateCenter(){
		$data['id'] = $this->input->post('id');
		$data['code'] = $this->input->post('code');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['pincode'] = $this->input->post('pincode');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['mobile'] = $this->input->post('mobile');
		$data['doctor_name'] = $this->input->post('doctor');
		$data['lab_unit'] = $this->input->post('lab');
		$data['rate_type'] = $this->input->post('rate');
		$data['deposit_amount'] = $this->input->post('deposit_amount');
		$data['deposit'] = $this->input->post('deposit');
		$data['login'] = $this->input->post('login');
		$data['password'] = $this->input->post('password');
		$result = $this->DataModel->updateData('collection_center',$data);
		echo json_encode($result);	
	}


	//Start Lab unit
	public function lab()
	{
		$data['labResult'] = $this->DataModel->lab();		
		$data['pagename'] = "lab";
		$data['category'] = "lab";
		$data['active_menu'] = "admin";
		$this->load->view('Director',$data);

	}

	public function createLab(){
		$data['code'] = $this->input->post('code');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['country'] = $this->input->post('country');
		$data['pincode'] = $this->input->post('pincode');
		$data['email'] = $this->input->post('email');
		$data['web'] = $this->input->post('web');
		$data['phone'] = $this->input->post('phone');
		$result = $this->DataModel->createLab($data);
		echo json_encode($result);
	}

	public function editLab($id){
		$result = $this->DataModel->editLab($id);
		echo json_encode($result);
	}

	public function deleteLab($id){
		$result = $this->DataModel->deleteLab($id);
		echo $result;
	}

	public function updateLab(){
		$data['id'] = $this->input->post('id');
		$data['code'] = $this->input->post('code');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['country'] = $this->input->post('country');
		$data['pincode'] = $this->input->post('pincode');
		$data['email'] = $this->input->post('email');
		$data['web'] = $this->input->post('web');
		$data['phone'] = $this->input->post('phone');
		$result = $this->DataModel->updateData('lab',$data);
		echo json_encode($result);	
	}


	//Start Rate
	public function rate()
	{
		$data['rateResult'] = $this->DataModel->rate();		
		$data['pagename'] = "rate";
		$data['category'] = "test";
		$data['active_menu'] = "admin";
		$this->load->view('Director',$data);

	}

	public function createRate(){
		//$data['rate_code'] = $code;
		$data['rate_name'] = $this->input->post('name');
		$result = $this->DataModel->createRate($data);
		echo json_encode($result);
	}

	public function editRate($id){
		$result = $this->DataModel->editRate($id);
		echo json_encode($result);
	}

	public function deleteRate($id){
		$result = $this->DataModel->deleteRate($id);
		echo $result;
	}

	public function updateRate(){
		$data['id'] = $this->input->post('id');
		$data['rate_name'] = $this->input->post('name');
		$result = $this->DataModel->updateData('ratetype',$data);
		echo json_encode($result);	
	}


	



}

