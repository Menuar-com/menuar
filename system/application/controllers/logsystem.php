<?php

class Logsystem extends Controller {

	function index()
	{
		// Blank
		echo "testing";
	}
	
	function login()
	{
		$this->load->helper('form');

		if ($this->session->userdata('login') == TRUE) {
			echo "You have already logged in <br> Your email:";
			echo $this->session->userdata('email');
		}
		else
		{
			//$this->load->view('login/member');
			$attributes = array('class' => '', 'id' => 'login_form');
			echo form_open('logsystem/validation', $attributes);
			echo form_label('Email:', 'email');
			echo form_input('email' ,'');
			echo form_label('Password:', 'password');
			echo form_password('password' ,'');
			echo form_submit('submit', 'Submit');
		}
	}
	
	function validation()
	{
		$this->db->where('cusEmail', $this->input->post('email'));
		$this->db->where('cusPassword', md5($this->input->post('password')));
		
		$query = $this->db->get('customerinfo');
		
		if ($query->num_rows == 1)
		{
			$session_data = array(
				'email'			=> $this->input->post('email'),
				'login'			=> TRUE
			);
			$this->session->set_userdata($session_data);
			echo 'welcome';
			//redirect('/logsystem/welcome', 'refresh');
		}
		else
		{
			echo 'wrong username or password';
		}
		
		
		//$this->session->set_userdata($data);
		//echo "Welcome" + $data['email'];
	}
	
	function welcome()
	{
		$data = array(
			'email'		=>	$this->session->userdata('email')
		);
		
		$this->parser->parse('login/member', $data);
		
	}
	
	function logout()
	{
		// Clear all the user data stored in session
		$this->session->sess_destroy();
		echo "You have successfully logout";
	}
}

/* End of file login.php */
/* Location: ./system/application/controllers/login.php */