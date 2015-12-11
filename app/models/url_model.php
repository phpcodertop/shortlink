<?php

/**
* 
*/
class Url_model extends CI_Model
{
	
	public function addUrl($data){
		$this->db->insert('url',$data);
		$url_id = $this->db->insert_id();
		$this->db->where('id',$url_id);
		$query = $this->db->get('url');
		return $query->row();
		//end add url function
	}

	public function getUrl($code){
		$this->db->where('code',$code);
		$query = $this->db->get('url');
		return $query->row();
		//end get url function
	}

	public function getRecentlyAdded(){
		$this->db->limit(10);
		$this->db->order_by('id','desc');
		$query = $this->db->get('url');
		return $query->result();
		//end get recently added function
	}

	public function getNum(){
		$query = $this->db->get('url');
		return $query->num_rows();
		//end get num function
	}

	public function getMostVisited(){
		$this->db->limit(10);
		$this->db->order_by('visits','desc');
		$query = $this->db->get('url');
		return $query->result();
		//end get most visited function
	}

	public function checkUrlExist($url){
		$this->db->where('link',$url);
		$query = $this->db->get('url');
		return $query->num_rows();
		//end check url exist function
	}

	public function getUrlExist($url){
		$this->db->where('link',$url);
		$query = $this->db->get('url');
		return $query->row();
		//end check url exist function
	}

	public function updateVisits($code){
		return $this->db->query("update url set visits=visits+1 where code='$code'");
		//end update visits function
	}

}

?>