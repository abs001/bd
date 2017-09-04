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
		$result = $this->ProcurementModel->updateData('supplier',$data);
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

	public function updateItem(){
		$data['id'] = $this->input->post('id');
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
		$result = $this->ProcurementModel->updateData('item',$data);
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
	public function updateDrug(){
		$data['id'] = $this->input->post('id');
		$data['drug_name'] = $this->input->post('name');
		$data['category'] = $this->input->post('category');
		$data['unit_pack'] = $this->input->post('units');
		$data['reorder_level'] = $this->input->post('reorder_level');
		$result = $this->ProcurementModel->updateData('drug',$data);
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


	//Start Purchase Order
	public function invoice()
	{
		$data['invoiceResult'] = $this->ProcurementModel->invoice();
		$data['poNo'] = $this->ProcurementModel->getPoNos();
		$data['pagename'] = "invoice";
		$data['category'] = "purchase";
		$data['active_menu'] = "procurement";
		$this->load->view('Director',$data);

	}

	public function getPoData($po_no){
		$result['po'] = $this->ProcurementModel->getPoData($po_no);
		$result['item'] = $this->ProcurementModel->getItem($result['po'][0]['item']);
		echo json_encode($result);
	}

	public function createInvoice(){
		$data['po_no'] = $this->input->post('po_no');
		$data['po_date'] = $this->input->post('po_date');
		$data['Invoice_date'] = $this->input->post('invoice_date');
		$data['invoice_no'] = $this->input->post('invoice_no');
		$data['supplier_name'] = $this->input->post('name');
		$data['item'] = $this->input->post('item_name');
		$data['per'] = $this->input->post('per');
		$data['batch_no'] = $this->input->post('batch');
		$data['unit_pack'] = $this->input->post('units');
		$data['pack'] = $this->input->post('pack');
		$data['total_units'] = $this->input->post('total_units');
		$data['cost'] = $this->input->post('cost');
		$data['total_amount'] = $this->input->post('total_amount');
		$data['free_units'] = $this->input->post('free_units');
		$data['mfg_company'] = $this->input->post('mfgco');
		$data['mfg_date'] = $this->input->post('mfg_date');
		$data['expiry_date'] = $this->input->post('expiry_date');
		$result = $this->ProcurementModel->createInvoice($data);
		echo json_encode($result);
	}

	
	public function deleteInvoice($id){
		$result = $this->ProcurementModel->deleteInvoice($id);
		echo $result;
	}

	public function editInvoice($id){
		$result = $this->ProcurementModel->editInvoice($id);
		echo json_encode($result);
	}

	public function updateInvoice(){
		$data['id'] = $this->input->post('id');
		$data['po_date'] = $this->input->post('po_date1');
		$data['Invoice_date'] = $this->input->post('invoice_date1');
		$data['invoice_no'] = $this->input->post('invoice_no1');
		$data['supplier_name'] = $this->input->post('name1');
		$data['item'] = $this->input->post('item_name1');
		$data['per'] = $this->input->post('per1');
		$data['batch_no'] = $this->input->post('batch1');
		$data['unit_pack'] = $this->input->post('units1');
		$data['pack'] = $this->input->post('pack1');
		$data['total_units'] = $this->input->post('total_units1');
		$data['cost'] = $this->input->post('cost1');
		$data['total_amount'] = $this->input->post('total_amount1');
		$data['free_units'] = $this->input->post('free_units1');
		$data['mfg_company'] = $this->input->post('mfgco1');
		$data['mfg_date'] = $this->input->post('mfg_date1');
		$data['expiry_date'] = $this->input->post('expiry_date1');
		$result = $this->ProcurementModel->updateData('invoice',$data);
		echo json_encode($result);	
	}
	//End Invoice

	
	



}

