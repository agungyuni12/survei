<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function index(){
		if($this->session->userdata('sess_company') != TRUE){
			redirect('login');
		}else{
			$user = $this->session->userdata('sess_company');
			$data['u']= $this->access->readtable('company','',array('comp_kip'=>$user['comp_kip']))->row();
			$data['user'] = $user;
			$view['content'] = $this->load->view('survey_form/v_survey_form',$data,TRUE);
			$this->load->view('v_index',$view);
		}
	}
	
	function page1_add_session(){
		$input = $this->input->post('TStpim');
		$page1_sess = array(
						'r101' => $input['r101'],
						'r102' => $input['r102'],
						'r102_pos' => $input['r102_pos'],
						'r102_web' => $input['r102_web'],
						'r102_mail' => $input['r102_mail'],
						'r102_telp' => $input['r102_telp'],
						'r102_fax' => $input['r102_fax'],
						'r103' => $input['r103'],
						'r104' => $input['r104'],
						'r104_pos' => $input['r104_pos'],
						'r104_web' => $input['r104_web'],
						'r104_telp' => $input['r104_telp'],
						'r104_fax' => $input['r104_fax'],
					);
		$input2 = json_encode($input);
	//	$this->session->set_userdata('page1_sess',$input2);
		$this->session->set_userdata('page1_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page2_add_session(){
		$input = $this->input->post('TStpim');
		$page2_sess = array(
						'r201_desk' => $input['r201_desk'],
						'r201_kbli' => $input['r201_kbli'],
						'r202a_mth' => json_encode($input['r202a_mth']),
						'r202b' 	=> $input['r202b_1'].'|'.$input['r202b_2'],
						'r203' 		=> $input['r203'],
						'r204' 		=> $input['r204a'].'|'.$input['r204b'].'|'.$input['r204c'].'|'.$input['r204d'].'|'.$input['r204e_lainnya'],
						'r205' 		=> $input['r205a'].'|'.$input['r205b'].'|'.$input['r205c'].'|'.$input['r205d_lainnya'],
						'r206' 		=> $input['r205a'].'|'.$input['r205b'].'|'.$input['r205c'].'|'.$input['r205d_lainnya'],
						'r207' 		=> $input['r207'],
						'r208' 		=> $input['r208'],
						'r209' 		=> $input['r209'],
					);
		/**to decode json_decode($r202a_mth, TRUE);**/
	//	$this->session->set_userdata('page2_sess',$page2_sess);
		$this->session->set_userdata('page2_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page3_add_session(){
		$input = $this->input->post('TStpim');
		$page3_sess = array(
						'r210' 		=> $input['r210a'].'|'.$input['r210b'].'|'.$input['r210c'].'|'.$input['r210d'].'|'.$input['r210e'].'|'.$input['r210f'],
						'r211_1' 	=> $input['r211k2_1'].'|'.$input['r211k3_1'].'|'.$input['r211k4_1'].'|'.$input['r211k5_1'],
						'r211_2' 	=> $input['r211k2_2'].'|'.$input['r211k3_2'].'|'.$input['r211k4_2'].'|'.$input['r211k5_2'],
						'r211_3' 	=> $input['r211k5_lainnya'],
						'r212' 		=> $input['r212a'].'|'.$input['r212b'].'|'.$input['r212c'].'|'.$input['r212d'].'|'.$input['r212e'].'|'.$input['r212f'].'|'.$input['r212g_lainnya'].'-'.$input['r212g'],
						'r213' 		=> $input['r213k1'].'|'.$input['r213k3a'].'|'.$input['r213k2b1'].'-'.$input['r213k3b1'].'|'.$input['r213k2b2'].'-'.$input['r213k3b2'].'|'.$input['r213k2b3'].'-'.$input['r213k3b3'].'|'.$input['r213k3b4'],
						'r214' 		=> $input['r214k1'].'|'.$input['r214k3a'].'|'.$input['r214k2b1'].'-'.$input['r214k3b1'].'|'.$input['r214k2b2'].'-'.$input['r214k3b2'].'|'.$input['r214k2b3'].'-'.$input['r214k3b3'].'|'.$input['r214k3b4'],
						'r215' 		=> $input['r215a'].'|'.$input['r215b'].'|'.$input['r215c'].'|'.$input['r215d'],
					);
		//$this->session->set_userdata('page3_sess',$page3_sess);
		$this->session->set_userdata('page3_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page4_add_session(){
		$input = $this->input->post('TStpim');
		$page4_sess = array(
						'r216' 		=> $input['r216'],
						'r217' 		=> $input['r217'],
						'r218' 		=> $input['r218'],
						'r219' 		=> $input['r219'],
						'r220' 		=> $input['r220'],
						'r221' 		=> $input['r221'],
						'r222' 		=> $input['r222'],
						'r223' 		=> $input['r223'],
						'r224' 		=> $input['r224'],
						'r225' 		=> $input['r225a'].'|'.$input['r225b'].'|'.$input['r225c'].'|'.$input['r225d'],
						'r226' 		=> $input['r226a'].'|'.$input['r226b'].'|'.$input['r2256c'].'|'.$input['r2256d'].'|'.$input['r2256e'].'|'.$input['r2256f'].'|'.$input['r226g_lainnya'],
						'r227' 		=> $input['r227'],
					);
		//$this->session->set_userdata('page4_sess',$page4_sess);
		$this->session->set_userdata('page4_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page5_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page5_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page6_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page6_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page57add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page7_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page8_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page8_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page9_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page9_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page10_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page10_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page11_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page11_sess',$input);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function page12_add_session(){
		$input = $this->input->post('TStpim');
		
		$this->session->set_userdata('page12_sess',$input);
		
		$sess_company = $this->session->userdata('sess_company');
		$id = $sess_company['comp_id'];
		
		$fill = array(
						'id_company' => $id,
						'page1' 	 => json_encode($this->session->userdata('page1_sess')),
						'page2' 	 => json_encode($this->session->userdata('page2_sess')),
						'page3' 	 => json_encode($this->session->userdata('page3_sess')),
						'page4' 	 => json_encode($this->session->userdata('page4_sess')),
						'page5' 	 => json_encode($this->session->userdata('page5_sess')),
						'page6' 	 => json_encode($this->session->userdata('page6_sess')),
						'page7' 	 => json_encode($this->session->userdata('page7_sess')),
						'page8' 	 => json_encode($this->session->userdata('page8_sess')),
						'page9' 	 => json_encode($this->session->userdata('page9_sess')),
						'page10' 	 => json_encode($this->session->userdata('page10_sess')),
						'page11' 	 => json_encode($this->session->userdata('page11_sess')),
						'page12' 	 => json_encode($this->session->userdata('page12_sess')),
						);
		$this->access->inserttable('kuesioner',$fill);
		
		$data = array('status' => 'success', 'sess'=>$input);
		echo json_encode($data);
	}
	
	function save(){
		$sess_company = $this->session->userdata('sess_company');
		$id = $sess_company['comp_id'];
		
		$fill = array(
						'id_company' => $id,
						'page1' 	 => $this->session->userdata('page1_sess'),
						'page2' 	 => $this->session->userdata('page2_sess'),
						'page3' 	 => $this->session->userdata('page3_sess'),
						'page4' 	 => $this->session->userdata('page4_sess'),
						'page5' 	 => $this->session->userdata('page5_sess'),
						'page6' 	 => $this->session->userdata('page6_sess'),
						'page7' 	 => $this->session->userdata('page7_sess'),
						'page8' 	 => $this->session->userdata('page8_sess'),
						'page9' 	 => $this->session->userdata('page9_sess'),
						'page10' 	 => $this->session->userdata('page10_sess'),
						'page11' 	 => $this->session->userdata('page11_sess'),
						'page12' 	 => $this->session->userdata('page12_sess'),
						);
		$this->access->inserttable('kuesioner',$fill);
		
		$notif = '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Data berhasil disimpan.</div>';
		$this->session->mark_as_flash('notif_sukses', $notif);
		redirect('');
	}

}
