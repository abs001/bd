<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model {
	public function role(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('role')->result_array();
		return $result;
	}
	public function addRole($data){
		$this->db->insert('role',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('role')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}
	public function deleteRole($id){
		$this->db->where('id',$id);
		$this->db->delete('role');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}
	// Department related functions
	public function department(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('department')->result_array();
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