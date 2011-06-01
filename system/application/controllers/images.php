<?php

class Images extends Controller {

	function Images()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod')){
			header('Location: http://menuar.com/online/iphone.html');
			exit();
		} else {
			if (!$this->MemberSystem->isLogin()){
				$this->template->write_view('freeReg', 'common/freereg');
			}
			$this->template->write_view('navBar', 'common/nav');
			$this->template->write_view('loginStatus', 'common/loginStatus','',true);
			$this->template->write_view('content', 'main');
			$this->template->render();
		}
	}
	
	function showimg($imgPath = NULL)
	{

		/*
		some basic checking
		*/
		if (!isset($imgPath)) exit;
		echo $imgPath;
		if (!file_exists($imgPath)) exit;
		$Size = filesize($imgPath);
		
		/*
		send out all headers
		*/
		header("HTTP/1.1 200 OK");
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Content-Type: image/jpg");
		header("Content-Length: $Size");
		/*
		and finally the image itself
		*/
		readfile($imgPath);

	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */