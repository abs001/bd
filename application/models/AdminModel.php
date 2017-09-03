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
	// Employee related functions
	public function getDesignation(){
		$this->db->select('name');
		$result = $this->db->get('designation')->result_array();
		return $result;
	}
	public function getDepartment(){
		$this->db->select('name');
		$result = $this->db->get('department')->result_array();
		return $result;
	}
	public function createEmployee(){ //Return all employees while loading page
		$this->db->order_by('id','desc');
		$result = $this->db->get('employee')->result_array(); 
		return $result;	
	}
	public function saveEmployee($data){
		$this->db->insert('employee',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('employee')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}
	public function editEmployee($id){
		$result = $this->db->get_where('employee',array('id' => $id))->result_array();
		return $result;
	}
	public function updateEmployee($data){
		$id = $data['id'];
		$this->db->where('id', $id);
		$this->db->update('employee',$data);
		if($this->db->affected_rows()>0){
			$result = "success";
		}else{
			$result = "failed";	
		}
		return $result;
	}
	public function deleteEmployee($id){
		$this->db->where('id',$id);
		$this->db->delete('employee');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}
}
?>