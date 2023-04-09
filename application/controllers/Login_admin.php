<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {

    public function index(){
		if($this->session->userdata('sess_admin') != TRUE){
			$data['title'] = "Admin - Login";
		
			$this->load->view('v_login_admin',$data);
		}else{
			redirect('pengawas');
		}
		
	}
	function login_action()
	{
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
		$cek = $this->access->readtable('user','',array('user_name'=>$username,'user_password'=>$password));
		if($cek->num_rows() > 0){
			$user = $cek->row();
			$data = array(
				'user_id' => $user->user_id,
                'user_fullname' => $user->user_fullname,
                'user_name' => $user->user_name,
                'comp_address' => $user->comp_address,
            );
            $this->session->set_userdata('sess_admin',$data);
			redirect('pengawas');
		}else{
			$notif = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Username atau password salah.</div>';
			$this->session->mark_as_flash('notif_login', $notif);
			redirect('login');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$user = $this->session->userdata('sess_admin');
        if($user){
            $this->session->unset_userdata('sess_admin');
        }
        redirect('login_admin');
	}

}
