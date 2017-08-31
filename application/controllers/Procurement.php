<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement extends CI_Controller {

	public function __construct() {
		parent::__construct();        
        $this->load->model('ProcurementModel');         
	}
	

	//Start Supplier
	public function supplier()
	{
		$data['supplierResult'] = $this->ProcurementModel->supplier();
		$data['pagename'] = "supplier";
		$data['category'] = "master";
		$data['active_menu'] = "procurement";
		$this->load->view('procurement',$data);

	}

	public function addSupplier(){
		$data['sup_name'] = $this->input->post('sup_name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['telephone'] = $this->input->post('telephone');
		$data['fax_no'] = $this->input->post('fax_no');
		$data['email'] = $this->input->post('email');
		$data['web'] = $this->input->post('web');
		$result = $this->ProcurementModel->addSupplier($data);
		echo json_encode($result);
	}

	public function deleteSupplier($id){
		$result = $this->ProcurementModel->deleteSupplier($id);
		echo $result;
	}
//End Suppiler


	//Start manufactur
	public function manufactur()
	{
		$data['manufacturResult'] = $this->ProcurementModel->manufactur();
		$data['pagename'] = "manufactur";
		$data['category'] = "master";
		$data['active_menu'] = "procurement";
		$this->load->view('procurement',$data);

	}	

	public function addManufactur(){
		$data['manu_company'] = $this->input->post('name');
		$result = $this->ProcurementModel->addManufactur($data);
		echo json_encode($result);
	}

	public function deleteManufactur($id){
		$result = $this->ProcurementModel->deleteManufactur($id);
		echo $result;
	}





	
}