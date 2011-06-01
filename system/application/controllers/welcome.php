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
	function login()
	{
		if ($this->MemberSystem->memberLogin() == TRUE)
		{
			$this->load->view('common/loginInfo');
		}
	}
	function logout()
	{
		$this->MemberSystem->memberLogout();
		redirect('/welcome', 'refresh');
	}
	function regionChoice()
	{
		$this->template->write_view('content', 'regionchoice');
		$this->template->render();
	}
	function testing()
	{
		$this->template->write_view('content', 'testing');
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