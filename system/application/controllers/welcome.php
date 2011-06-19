<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		/*if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod')){
			header('Location: http://menuar.com/online/iphone.html');
			exit();
		} else {*/
		if (!$this->MemberSystem->isLogin()){
			$this->template->write_view('freeReg', 'common/freereg');
		}
		$this->template->write_view('navBar', 'common/nav');
		$this->template->write_view('loginStatus', 'common/loginStatus','',true);
		$this->template->write_view('content', 'main');
		$this->template->render();
		//}
	}
	
	function isLogged()
	{
		if ($this->MemberSystem->isLogin() == TRUE)
			echo "X7plB7u3NM3i8hZ6";
		else
			echo "5q11G76i3E631s9S";
	}
	
	function login()
	{
		if ($this->MemberSystem->memberLogin() == TRUE)
			echo "7R38M1t868ZC7YAH";
		else
			echo "21I741E113IRd10C";
	}
	
	function logout()
	{
		$this->MemberSystem->memberLogout();
	}
	
	function registration() {
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
			
			/*
if ( ! isset($_POST['fullname'])) {
				$data['fullname'] = ""; }
			if ( ! isset($_POST['phone'])) {
				$data['phone'] = ""; }
			if ( ! isset($_POST['address'])) {
				$data['address'] = ""; }
			if ( ! isset($_POST['birthday'])) {
				$data['birthday'] = ""; }
			if ( ! isset($_POST['fullname'])) {
				$data['fullname'] = ""; }
			if ( ! isset($_POST['promo'])){
				$data['promo'] = ""; }
*/

			
			$db_data = array(
				'cusPassword'			=> $data['password'],
				//'cusName'				=> $data['fullname'],
				'cusEmail'				=> $data['email'],
				/*
'cusPhoneArray'			=> $data['phone'],
				'cusAddressArray'		=> $data['address'],
				'cusBirthday'			=> $data['birthday'],
				'cusGender'				=> $data['gender'],*/
				'cusPromo'				=> $data['promo']

			);
			
						
			$this->db->insert('customerinfo', $db_data);
			//$this->info($data);
			echo "L5UbSg6BATg8OfKE";
		}
		else
		{
			// Email is already signed up
			echo "Qfl47cDJK0EbP45g";
		}
	
	}
	
	function regionChoice()
	{
		$this->template->write_view('content', 'regionchoice');
		$this->template->render();
	}
	
	function regionConstructor()
	{
		$this->template->write_view('content', 'regionConstructor');
		$this->template->render();
	}
	
	function getLocation()
	{
		// set your API key here
		$api_key = "AIzaSyBPxKhyIH5ZKowjF5mfumgNt0s9vg3Lw4Y";
		// format this string with the appropriate latitude longitude
		
		$url = 'https://www.googleapis.com/latitude/v1/currentLocation?key='.$api_key.'&granularity=best';
		//$url = 'http://maps.google.com/maps/geo?q=40.714224,-73.961452&output=json&sensor=true_or_false&key=' . $api_key;
		// make the HTTP request
		$data = file_get_contents($url);
		
		echo $data;
		// parse the json response
		$jsondata = json_decode($data,true);
		echo ($jsondata);
		// if we get a placemark array and the status was good, get the addres
		//&& $jsondata ['Status']['code']==200
		//if(is_array($jsondata ))
		//{
			  $addr = $jsondata ['latitude'];
			  echo ($addr);
		//}
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */