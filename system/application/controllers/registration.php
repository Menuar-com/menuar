<?php

class Registration extends Controller {

	function index()
	{
		echo "testing";
	}
	
	function form()
	{
		$data['pagetitle'] = "Registration Form";
		$this->parser->parse('common/header', $data);
		$this->load->view('registration/member');
		$this->parser->parse('common/footer', $data);
	}
	
	function insertData()
	{
		
		$this->db->where('cusEmail', $this->input->post('email'));
		$query = $this->db->get('customerinfo');
		
		if ($query->num_rows == 0){
			
			$data = $_POST;
			
			// Valudate data
			if ( ! isset($_POST['gender']))
			{
				$data['gender'] = '3';
			}
			if ( ! isset($_POST['promo']))
			{
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
			$this->info($data);
		}
		else
		{
			echo 'This email is already signed up';
		}
	}
	
	function info($data)
	{
		
	}
}

/* End of file registration.php */
/* Location: ./system/application/controllers/registration.php  */