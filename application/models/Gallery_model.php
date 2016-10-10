<?php
class Gallery_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get($where = NULL){
		$this->db->select('*');
		$this->db->from('provider_gallery');
		if($where != NULL){
			$this->db->where($where);
		}
		$this->db->order_by('id','ASC');
		return $this->db->get();
	}
	function delete_img($id){
		$this->db->where('id', $id);
		return $this->db->delete('provider_gallery');
	}
	function add_img_gallery($data){
		$query = $this->db->insert('provider_gallery', $data);
		// $this->db->insert();
		return $this->db->insert_id();
	}
}