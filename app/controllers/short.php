<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Short extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index(){
		
		$this->form_validation->set_rules('link','Link','trim|required|callback_url_check');
		if($this->form_validation->run() == false){
			$details['mostvisited'] = $this->url_model->getMostVisited();
			$details['recentadded'] = $this->url_model->getRecentlyAdded();
			$details['urlnum'] = $this->url_model->getNum();
			$this->load->view('home',$details);
		}else{
			$data = array(
					'link' => $this->input->post('link'),
					'code' => $this->getCode(),
					'ip'   => $_SERVER['REMOTE_ADDR']
				);
			$url = $this->input->post('link');
			///check if link is found 
			if($this->url_model->checkUrlExist($url)){
				//true found url
				$details['mostvisited'] = $this->url_model->getMostVisited();
				$details['recentadded'] = $this->url_model->getRecentlyAdded();
				$details['urlnum'] = $this->url_model->getNum();
				$details['link'] = $this->url_model->getUrlExist($url);
				$this->load->view('home',$details); 
			}else{
				$insert = $this->url_model->addUrl($data);
				$details['mostvisited'] = $this->url_model->getMostVisited();
				$details['recentadded'] = $this->url_model->getRecentlyAdded();
				$details['urlnum'] = $this->url_model->getNum();
				$details['link'] = $insert;
				$this->load->view('home',$details);	
			}
			
		}	
	}

	public function getCode(){
		$code = rand(111111,999999);
		$code = str_replace(0, "a", $code);
		$code = str_replace(1, "b", $code);
		$code = str_replace(2, "c", $code);
		$code = str_replace(3, "d", $code);
		$code = str_replace(4, "e", $code);
		$code = str_replace(5, "f", $code);
		$code = str_replace(6, "g", $code);
		$code = str_replace(7, "h", $code);
		$code = str_replace(8, "i", $code);
		$code = str_replace(9, "j", $code);
		$code = substr($code, 0,4);
		return $code;
		//end  code generation function
	}

	function url_check($str) { 
		  $regex = "/(ftp|https?):\/\/(\w+:?\w*@)?(\S+)(:[0-9]+)?(\/([\w#!:.?+=&%@!\/-])?)?/";
		  if(!preg_match($regex, $str)) {
		    $this->form_validation->
		    set_message('url_check', 'Please enter a valid URL.');   return FALSE;
		  } else {
		    return TRUE;
		  }
	}

	public function go($code){
		$this->url_model->updateVisits($code); 
		$data['urldata'] = $this->url_model->getUrl($code); 
		$this->load->view('go',$data);
		//end go function
	}

	
}
