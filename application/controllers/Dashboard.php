<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
		$user = $this->session->userdata('sess_admin');
        
		$data['title'] = "SPK - Dashboard";
		$data['user'] = $user;
		
		$data['content'] = $this->load->view('v_dashboard',$data,TRUE);

		$this->load->view('v_index',$data);
	}
	
	function company_list(){
		$data['company'] = $this->access->readtable('company','')->result();
		
		$data['content'] = $this->load->view('company/v_company_list',$data,TRUE);

		$this->load->view('v_index',$data);
	}
	
	function company_edit($id){
		$data['company'] = $this->access->readtable('company','',array('comp_id'=>$id))->row();
		
		$data['content'] = $this->load->view('company/v_company_edit',$data,TRUE);

		$this->load->view('v_index',$data);
	}

}
