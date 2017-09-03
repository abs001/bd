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
		$this->load->view('Director',$data);

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


	public function editSupplier($id){
		$result = $this->ProcurementModel->editSupplier($id);
		echo json_encode($result);
	}

	public function updateSupplier(){
		$data['id'] = $this->input->post('id');
		$data['sup_name'] = $this->input->post('sup_name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['telephone'] = $this->input->post('telephone');
		$data['fax_no'] = $this->input->post('fax_no');
		$data['email'] = $this->input->post('email');
		$data['web'] = $this->input->post('web');
		$result = $this->ProcurementModel->updateSupplier($data);
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
		$this->load->view('Director',$data);

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
	//END Manufactur
	//Start Item Entry
	public function item()
	{
		$data['itemResult'] = $this->ProcurementModel->item();
		$data['mfgco'] = $this->ProcurementModel->getMfgCo();
		$data['supplier'] = $this->ProcurementModel->getSupplier();
		$data['cat'] = $this->ProcurementModel->category();
		$data['pagename'] = "item";
		$data['category'] = "master";
		$data['active_menu'] = "procurement";
		$this->load->view('Director',$data);

	}

	public function addItem(){
		$data['item_name'] = $this->input->post('name');
		$data['manu_company'] = $this->input->post('mfgco');
		$data['category'] = $this->input->post('category');
		$data['supplier'] = $this->input->post('supplier');
		$data['current_stock'] = $this->input->post('stock');
		$data['mfg_date'] = $this->input->post('mfg_date');
		$data['reorder_lavel'] = $this->input->post('recorder_level');
		$data['unit'] = $this->input->post('unit');
		$data['cost'] = $this->input->post('cost_price');
		$data['expiry_status'] = $this->input->post('expiry_status');
		$data['purchaes_date'] = $this->input->post('purchase_date');
		$data['batch_no'] = $this->input->post('batch_no');
		$data['ida_code'] = $this->input->post('ida_code');
		$data['barcode'] = $this->input->post('barcode');
		$data['case_pack_rate'] = $this->input->post('case_rate');
		$data['sell_price'] = $this->input->post('sell_price');
		
		$result = $this->ProcurementModel->addItem($data);
		echo json_encode($result );
	}
	public function deleteItem($id){
		$result = $this->ProcurementModel->deleteItem($id);
		echo $result;
	}

	public function editItem($id){
		$result = $this->ProcurementModel->editItem($id);
		echo json_encode($result);
	}

	//END Item
	//Start Category
	public function category()
	{
		$data['catResult'] = $this->ProcurementModel->category();
		$data['pagename'] = "category";
		$data['category'] = "master";
		$data['active_menu'] = "procurement";
		$this->load->view('Director',$data);

	}	
	public function addCategory(){
		$data['cat_name'] = $this->input->post('name');
		$result = $this->ProcurementModel->addCategory($data);
		echo json_encode($result);
	}
	public function deleteCategory($id){
		$result = $this->ProcurementModel->deleteCategory($id);
		echo $result;
	}
	//END Manufactur


//Start Drug
	public function drug()
	{
		$data['drugResult'] = $this->ProcurementModel->drug();
		$data['cat'] = $this->ProcurementModel->category();
		$data['pagename'] = "drug";
		$data['category'] = "purchase";
		$data['active_menu'] = "procurement";
		$this->load->view('Director',$data);

	}	
	public function addDrug(){
		$data['drug_name'] = $this->input->post('name');
		$data['category'] = $this->input->post('category');
		$data['unit_pack'] = $this->input->post('units');
		$data['reorder_level'] = $this->input->post('reorder_level');
		$result = $this->ProcurementModel->addDrug($data);
		echo json_encode($result);
	}
	public function deleteDrug($id){
		$result = $this->ProcurementModel->deleteDrug($id);
		echo $result;
	}

	public function editDrug($id){
		$result = $this->ProcurementModel->editDrug($id);
		echo json_encode($result);
	}
	//END Drug

	//Start Purchase Order
	public function purchaseOrder()
	{
		$data['poResult'] = $this->ProcurementModel->purchaseOrder();
		$data['cat'] = $this->ProcurementModel->category();
		$data['pagename'] = "po";
		$data['category'] = "purchase";
		$data['active_menu'] = "procurement";
		$this->load->view('Director',$data);

	}

	public function addPo(){
		$data['po_no'] = $this->input->post('po_no');
		$data['ref_no'] = $this->input->post('ref_no');
		$data['po_date'] = $this->input->post('po_date');
		$data['item'] = $this->input->post('desc');
		$data['cost'] = $this->input->post('price');
		$data['per'] = $this->input->post('per');
		$data['quantity'] = $this->input->post('quantity');
		$data['amount'] = $this->input->post('amount');
		$data['current_stock'] = $this->input->post('stock');
		$result = $this->ProcurementModel->addPo($data);
		echo json_encode($result);
	}	

	public function deletePo($id){
		$result = $this->ProcurementModel->deletePo($id);
		echo $result;
	}
	




}

