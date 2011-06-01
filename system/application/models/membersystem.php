<?php

class MemberSystem extends Model {

    function MemberSystem()
    {
        // Call the Model constructor
        parent::Model();
    }
    
	function isLogin()
	{
		if ($this->session->userdata('login')) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	function isResOwner()
	{
		$this->db->where('cusEmail', $this->session->userdata('email'));
		$query = $this->db->get('customerinfo');
		$row = $query->row_array();
		if ($row['cusResOwner'] == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	function memberLogin()
	{
		$this->db->where('cusEmail', $this->input->post('email'));
		$this->db->where('cusPassword', md5($this->input->post('password')));
		
		$query = $this->db->get('customerinfo');
		
		if ($query->num_rows == 1)
		{
			$row = $query->row_array();
			$session_data = array(
				'userID'	=> $row['cusID'],
				'email'		=> $this->input->post('email'),
				'login'		=> TRUE
			);
			$this->session->set_userdata($session_data);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function welcome()
	{
		$data = array(
			'email'		=>	$this->session->userdata('email')
		);
		
		$this->parser->parse('login/member', $data);
		
	}
	
	function memberLogout()
	{
		// Clear all the user data stored in session
		// $this->session->sess_destroy();
		$session_data = array(
			'userID'	=> '',
			'email'		=> '',
			'login'		=> FALSE
		);
		$this->session->set_userdata($session_data);
		return FALSE;
	}
	
	function memberRegValidation()
	{
		$this->db->where('cusEmail', $this->input->post('email'));
		$query = $this->db->get('customerinfo');
		// Check email whether exist 
		if ($query->num_rows != 0) {
			return "error000";
		}
		// Check the contents in email
		elseif ( ! isset($_POST['email']) ) {
			return "error001";
		}
		// Check the contents in password
		elseif (! isset($_POST['password'])) {
			return "error002";
		}
		else {
			return "ok";
		}
	}
	
	function memberRegInsertData()
	{
		$data = $_POST;
		if ($data['ssCode'] != '3ephusP8') {
			echo '';
			return;
		}
		if ( ! isset($_POST['gender'])) {
			$data['gender'] = '3';
		}
		if ( ! isset($_POST['promo'])) {
			$data['promo'] = '0';
		}
		$data['password'] = md5($data['password']);
		
		$db_data = array(
			'cusPassword'			=> $data['password'],
			'cusName'				=> $data['fullname'],
			'cusEmail'				=> $data['email'],
			'cusPhoneArray'			=> $data['phone'],
			'cusAddressArray'		=> $data['address'],
			'cusBirthday'			=> $data['birthday'],
			'cusGender'				=> $data['gender'],
			'cusPromo'				=> $data['promo']
		);
		
		$this->db->insert('customerinfo', $db_data);
	}
}

?>