<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
		if($this->session->userdata('sess_company') != TRUE){
			$data['title'] = "Company - Login";
		
			$this->load->view('v_login',$data);
		}else{
			redirect('');
		}
		
	}
	function login_action()
	{
		$kip = $this->input->post('kip');
        $password = base64_encode($this->input->post('password'));
        
		$cek = $this->access->readtable('company','',array('comp_kip'=>$kip,'comp_password'=>$password));
		if($cek->num_rows() > 0){
			$comp = $cek->row();
			$data = array(
				'comp_id' => $comp->comp_id,
                'comp_kip' => $comp->comp_kip,
                'comp_name' => $comp->comp_name,
                'comp_address' => $comp->comp_address,
            );
            $this->session->set_userdata('sess_company',$data);
			redirect('survey');
		}else{
			$notif = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Username atau password salah.</div>';
			$this->session->mark_as_flash('notif_login', $notif);
			redirect('login');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$user = $this->session->userdata('sess_company');
        if($user){
            $this->session->unset_userdata('sess_company');
        }
        redirect('login');
	}

}
