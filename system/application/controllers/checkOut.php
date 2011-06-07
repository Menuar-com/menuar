<?php

class CheckOut extends Controller {

	function CheckOut()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->template->add_css('style/checkOut.css');
		$this->template->add_css('style/ui-lightness/jquery-ui-1.8.9.custom.css');
		$this->template->add_css('plugin/fileUpload/jquery.fileupload-ui.css');
		
		$this->template->add_js('plugin/timepicker/jquery-ui-timepicker-addon.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload-ui.js');
		$this->template->add_js('script/foodOrdering.js');
		
		$this->template->write_view('navBar', 'common/nav');
		$this->template->write_view('loginStatus', 'common/loginStatus','',true);
		$this->template->write_view('content', 'checkOut/main');
		$this->template->render();
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */