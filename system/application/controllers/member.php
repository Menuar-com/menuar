<?php

class Member extends Controller {

	function index()
	{
		// Blank
		echo "blank!";
	}
	
	function logout()
	{
		$this->MemberSystem->memberLogout();
	}
	
	function registration() {
		$this->template->add_js('script/jquery.validate.min.js');
		$this->template->add_js('script/jquery.maskedinput-1.2.2.min.js');
		$this->template->write_view('navBar', 'common/nav');
		$this->template->write_view('content', 'member/registration');
		$this->template->render();
	}
	
	function registrationShadowbox() {
		$this->template->add_js('script/jquery.validate.min.js');
		$this->template->add_js('script/jquery.maskedinput-1.2.2.min.js');
		$this->load->view('member/registration');
	}
	
	function addMember() {
		$validationResult = $this->MemberSystem->memberRegValidation();
		if ($validationResult != "ok") {
			switch ($validationResult) {
				case "error000" :
					echo "此電郵已登記，按此登入。";
					break;
				case "error001" :
				case "error002" :
					echo "請使用支援Javascript的Broswer。";
					break;
			}
			return;
		} else {
			$this->MemberSystem->memberRegInsertData();
			echo "成功申請!";
		}
	}

}

/* End of file member.php */
/* Location: ./system/application/controllers/member.php */