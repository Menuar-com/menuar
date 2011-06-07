<?php

class FoodOrdering extends Controller {

	function FoodOrdering()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->template->add_css('style/foodOrdering.css');
		$this->template->add_css('style/ui-lightness/jquery-ui-1.8.9.custom.css');
		$this->template->add_css('plugin/fileUpload/jquery.fileupload-ui.css');
		
		$this->template->add_js('plugin/timepicker/jquery-ui-timepicker-addon.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload-ui.js');
		$this->template->add_js('script/foodOrdering.js');
		
		$this->template->write_view('navBar', 'common/nav');
		$this->template->write_view('loginStatus', 'common/loginStatus','',true);
		$this->template->write_view('content', 'foodOrdering/foodOrderingFlow');
		$this->template->render();
	}
	
	
	function whereAreYou() {
		if ($_POST["ssCode"] == "3e27GW7V729q60ud"){
			$this->load->view('foodOrdering/whereAreYou');
		}
	}
	
	function chooseRestautant() {
		if ($_POST["ssCode"] == "3e27GW7V729q60ud"){
			$this->load->view('foodOrdering/chooseRestaurant');
		}
	}
	
	function selectFood() {
		if ($_POST["ssCode"] == "3e27GW7V729q60ud"){
			$this->load->view('foodOrdering/selectFood');
		}
	}
	
	function checkOut() {
		
	}
	
	// 選餐廳 - show restaurant list
	function s2resList(){
		
	}
}

/* End of file foodOrdering.php */
/* Location: ./system/application/controllers/foodOrdering.php */