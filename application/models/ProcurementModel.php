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


	



	public function addDepartment($data){
		$this->db->insert('department',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('department')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}
	public function deleteDept($id){
		$this->db->where('id',$id);
		$this->db->delete('department');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}
	// designation related functions
	public function designation(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('designation')->result_array();
		return $result;
	}
	public function addDesignation($data){
		$this->db->insert('designation',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('designation')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}
	public function deleteDesignation($id){
		$this->db->where('id',$id);
		$this->db->delete('designation');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}
}
?>