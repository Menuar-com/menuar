<?php

class CheckOut extends Controller {

	function CheckOut()
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
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */