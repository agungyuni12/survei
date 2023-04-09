<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengawas extends CI_Controller {

    public function index(){
		$user = $this->session->userdata('sess_admin');
        
		$data['user'] = $user;
		$data['company'] = $this->access->readtable('company','')->result();
		$data['content'] = $this->load->view('pengawas/v_company_list',$data,TRUE);

		$this->load->view('v_admin_index',$data);
	}
	
	function hasil_survey()
	{
		$user = $this->session->userdata('sess_admin');
        
		$data['user'] = $user;
		
		$data['company'] = $this->access->readtable('company','')->result();
		
		$kip = $this->input->get('kip');
		if(isset($kip)){
			$id = $this->access->readtable('company','',array('comp_kip'=>$kip));
			if($id->num_rows() > 0 ){
				$data['datasurvey'] = $this->access->readtable('kuesioner','',array('id_company'=>$id->row()->comp_id),'',array(1,0),'id_kuesioner desc')->row();
				$page1 = json_decode($data['datasurvey']->page1);
				$page2 = json_decode($data['datasurvey']->page2);
				$page3 = json_decode($data['datasurvey']->page3);
				$page4 = json_decode($data['datasurvey']->page4);
				$page5 = json_decode($data['datasurvey']->page5);
				$page6 = json_decode($data['datasurvey']->page6);
				$page7 = json_decode($data['datasurvey']->page7);
				$page8 = json_decode($data['datasurvey']->page8);
				$page9 = json_decode($data['datasurvey']->page9);
				$page10 = json_decode($data['datasurvey']->page10);
				$page11 = json_decode($data['datasurvey']->page11);
				$page12 = json_decode($data['datasurvey']->page12);
				$data['arr_page1'] = $page1;
				$data['arr_page2'] = $page2;
				$data['arr_page3'] = $page3;
				$data['arr_page4'] = $page4;
				$data['arr_page5'] = $page5;
				$data['arr_page6'] = $page6;
				$data['arr_page7'] = $page7;
				$data['arr_page8'] = $page8;
				$data['arr_page9'] = $page9;
				$data['arr_page10'] = $page10;
				$data['arr_page11'] = $page11;
				$data['arr_page12'] = $page12;
				
				$data['kip'] = $id->row()->comp_kip;
			}else{
				$data['datasurvey'] = 0;
			}
		}else{
			$data['datasurvey'] = 0;
		}
		$data['country'] = $this->access->readtable('country','','','','','number ASC')->result();
		$data['content'] = $this->load->view('pengawas/v_form_hasil',$data,TRUE);

		$this->load->view('v_admin_index',$data);
	}
	
	function result(){
		$user = $this->session->userdata('sess_admin');
        
		$data['user'] = $user;
	
		$kip = $this->input->post('kip');
		$id = $this->access->readtable('company','comp_id',array('comp_kip'=>$kip));
		if($id->num_rows() > 0 ){
			$data['survey'] = $this->access->readtable('kuesioner','',array('id_company'=>$id))->row();
		}else{
			$data['survey'] = 0;
		}
		
		$data['content'] = $this->load->view('pengawas/v_form_hasil',$data,TRUE);

		$this->load->view('v_admin_index',$data);
	}
	
	function add_company(){
		$fill = array(
						'comp_kip' 			=> $this->input->post('kip'),
						'comp_password' 	=> base64_encode($this->input->post('password')),
						'comp_name' 		=> $this->input->post('company_name'),
						'comp_address' 		=> $this->input->post('company_address'),
					);
		$this->access->inserttable('company',$fill);
		
		$notif = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>Tambah data perusahaan berhasil.</div>';	
		$_SESSION['info_company'] = $notif;
		$this->session->mark_as_flash('info_company');
		redirect('pengawas');
	}
	
	function edit_company(){
		$id = $this->input->post('company_id');
		$data['company'] = $this->access->readtable('company','',array('comp_id'=>$id))->row();

		$this->load->view('pengawas/v_company_edit',$data);
	}
	
	function edit_company_save($id)
	{
		$fill = array(
						'comp_kip' 			=> $this->input->post('kip'),
						'comp_password' 	=> base64_encode($this->input->post('password')),
						'comp_name' 		=> $this->input->post('company_name'),
						'comp_address' 		=> $this->input->post('company_address'),
					);
		$this->access->updatetable('company',$fill,array('comp_id'=>$id));
		
		$notif = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>Update data perusahaan berhasil.</div>';	
		$_SESSION['info_company'] = $notif;
		$this->session->mark_as_flash('info_company');
		redirect('pengawas');
	}

}
