<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_core extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// $this->set_session_dummy();
		$this->authenticate();
	}

	public function authenticate()
	{
		$session = (isset($_SESSION['apps']['user']))?$_SESSION['apps']['user']:array();		
		if (!empty($session)) {
			return true;
			exit();
		}

		redirect('user/auth','refresh');
	}


	public function get_user_($param = null)
	{
		$session = (isset($_SESSION['apps']['user']))?$_SESSION['apps']['user']:array();
		if (!is_null($param)) {
			return $session[$param];
		}

		return $session;
	}

	public function set_session_dummy()
	{
		$session = (isset($_SESSION['apps']['user']))?$_SESSION['apps']['user']:array();
		$dataSession = array( 'id' => 11, 'username' => 'citraweb', 'nik' => 'mayuyu','full_name' => 'Tezza LR tezzalr', 'panggilan' => 'Yeri', 'is_logged_in' => 1, 'role' => 'MEGA ADMINISTRATOR;SYSTEM ADMINISTRATOR;', 'position' => 'OFFICER', 'jabatan' => 'Superman', 'group' => 'CORPORATE BANKING 4', 'dept' => 'CORPORATE STRATEGIC PROJECT','directorate' => 'CORPORATE BANKING', 'profile_picture' => 'assets/uploads/user_profile/mayuyu_profile_picture1522522195.png', 'is_employee' => 0, 'phone_number' =>'', 'priority' => 4 );
		if (!empty($session)) {
			return true;
		}
		$_SESSION['apps']['user'] = $dataSession;

		// return $dataSession;
	}

}

/* End of file Member_core.php */
/* Location: ./application/core/Member_core.php */