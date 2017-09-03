<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProcurementModel extends CI_Model {
	
	public function supplier(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('supplier')->result_array();
		return $result;
	}
	
	public function addSupplier($data){
		$this->db->insert('supplier',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('supplier')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function editSupplier($id){
		$result = $this->db->get_where('supplier',array('id' => $id))->result_array();
		return $result;
	}

	public function updateSupplier($data){
		$id = $data['id'];
		$this->db->where('id', $id);
		$this->db->update('supplier',$data);
		if($this->db->affected_rows()>0){
			$result = "success";
		}else{
			$result = "failed";	
		}
		return $result;
	}
	
	public function deleteSupplier($id){
		$this->db->where('id',$id);
		$this->db->delete('supplier');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}






	// Manufacture related functions
	public function manufactur(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('manufactur')->result_array();
		return $result;
	}



	public function addManufactur($data){
		$this->db->insert('manufactur',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('manufactur')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function deleteManufactur($id){
		$this->db->where('id',$id);
		$this->db->delete('manufactur');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}


	// Item entry related functions
	public function item(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('item')->result_array();
		return $result;
	}

	public function getMfgCo(){
		$this->db->order_by('id','manu_company');
		$result = $this->db->get('manufactur')->result_array();
		return $result;
	}

	public function getSupplier(){
		$this->db->order_by('id','sup_name');
		$result = $this->db->get('supplier')->result_array();
		return $result;
	}

	public function addItem($data){
		$this->db->insert('item',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('item')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function deleteItem($id){
		$this->db->where('id',$id);
		$this->db->delete('item');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}

	public function editItem($id){
		$result = $this->db->get_where('item',array('id' => $id))->result_array();
		return $result;
	}



	public function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}


	// Category related functions
	public function category(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('category')->result_array();
		return $result;
	}



	public function addCategory($data){
		$this->db->insert('category',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('category')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function deleteCategory($id){
		$this->db->where('id',$id);
		$this->db->delete('category');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}


// Drug related functions
	public function Drug(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('drug')->result_array();
		return $result;
	}



	public function addDrug($data){
		$this->db->insert('drug',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('drug')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function deleteDrug($id){
		$this->db->where('id',$id);
		$this->db->delete('drug');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}

	public function editDrug($id){
		$result = $this->db->get_where('drug',array('id' => $id))->result_array();
		return $result;
	}


	// Drug related functions
	public function purchaseOrder(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('purchase_order')->result_array();
		return $result;
	}
	public function addPo($data){
		$this->db->insert('purchase_order',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('purchase_order')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function deletePo($id){
		$this->db->where('id',$id);
		$this->db->delete('purchase_order');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}





	

}
?>