<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataModel extends CI_Model {



	public function getData($table){
		$this->db->order_by('id','desc');
		$result = $this->db->get($table)->result_array();
		return $result;
	}

	public function insertData($table,$data){

		$this->db->insert($table,$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get($table)->result_array();
			return $result;
		}else{
			$result = "failed";	
		}

	}

	public function deleteData($table,$id){
		$this->db->where('id',$id);
		$this->db->delete($table);
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}


	public function editData($table,$id){
		$result = $this->db->get_where($table,array('id' => $id))->result_array();
		return $result;
	}

	public function updateData($table,$data){
		$id = $data['id'];
		$this->db->where('id', $id);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			$result = "success";
		}else{
			$result = "failed";	
		}
		return $result;
	}






	// Lab related functions
	public function lab(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('lab')->result_array();
		return $result;
	}

	public function createLab($data){
		$this->db->insert('lab',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('lab')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function editLab($id){
		$result = $this->db->get_where('lab',array('id' => $id))->result_array();
		return $result;
	}

	public function deleteLab($id){
		$this->db->where('id',$id);
		$this->db->delete('lab');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}


	// Rate related functions
	public function rate(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('ratetype')->result_array();
		return $result;
	}

	public function createRate($data){
		$this->db->insert('ratetype',$data);
		if($this->db->affected_rows()>0){
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$result = $this->db->get('ratetype')->result_array();
			return $result;
		}else{
			$result = "failed";	
		}
	}

	public function editRate($id){
		$result = $this->db->get_where('ratetype',array('id' => $id))->result_array();
		return $result;
	}

	public function deleteRate($id){
		$this->db->where('id',$id);
		$this->db->delete('ratetype');
		if($this->db->affected_rows()>0){
			$result = "success";	
		}else{
			$result = "failed";	
		}
		return $result;
	}













	
	public function collectionCenter(){
		$this->db->order_by('id','desc');
		$result = $this->db->get('collection_center')->result_array();
		return $result;
	}

	public function getLab(){
		$this->db->order_by('id','ASC');
		$result = $this->db->get('lab')->result_array();
		return $result;
	}

	public function getRateType(){
		$this->db->order_by('rate_name','ASC');
		$result = $this->db->get('ratetype')->result_array();
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
}

?>