<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function index()
	{
		$user = $this->session->userdata('sess_user');
		$data['title'] = "SPK - Manajemen User";
		$data['user'] = $user;
		$data['user_list'] = $this->access->get_user($user['type'])->result();
		
		$view['content'] = $this->load->view('user/index',$data,TRUE);
		$this->load->view('index',$view);
	}
	
	function check()
	{
		$user_name = $this->input->post('user_name');
		$check = $this->access->readtable('user', '', array('user_name' => $user_name))->num_rows();
		if( $check > 0 )
		{
			$status = 1;
		} else {
			$status = 0;
		}

		$data = array('status' => $status);
		echo json_encode($data);
	}
	
	function save_new()
	{
		$user = array(
						'user_fullname'		=> $this->input->post('full_name'),
						'user_type'			=> $this->input->post('user_type'),
						'user_name'			=> $this->input->post('user_name'),
						'user_password'		=> md5($this->input->post('password'))
					);
		$this->access->inserttable('user',$user);
		
		redirect('user');
	}
	
	function edit($user_id)
	{
		$data['title'] = "SPK - Manajemen User";
		$data['user'] = $this->access->readtable('user','',array('user_id'=>$user_id))->row();
		$view['content'] = $this->load->view('user/user_edit',$data,TRUE);
		$this->load->view('index', $view);
	}
	
	function save_user($user_id)
	{
		$fill_user = array(
							'user_fullname'=>$this->input->post('full_name')
							);
		$this->access->updatetable('user',$fill_user,array('user_id'=>$user_id));
		
		$notif = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Edit user successful.</div>';
		$_SESSION['info_user'] = $notif;
		$this->session->mark_as_flash('info_user');
		redirect('user');
	}
	
	function save_pass($user_id)
	{
		$user_id = $this->input->post('user_id');
		$current = md5($this->input->post('current'));
		$new = md5($this->input->post('new'));

		$check = $this->access->readtable('user','user_password',array('user_id'=>$user_id))->row()->user_password;
		
		if($check == $current){
			$this->access->updatetable('user',array('user_password'=>$new),array('user_id'=>$user_id));
			$notif = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Edit user successful.</div>';
		} else {
			$notif = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Password lama salah.</div>';
		}
		
		$_SESSION['info_user'] = $notif;
		$this->session->mark_as_flash('info_user');
		redirect('user');
	}

	function delete_user($user_id)
	{
		$this->access->deletetable('user', array('user_id'=> $user_id));
		
		redirect('user');
	}
}
