<?php
	$this->MemberSystem->isLogin();
	if ($this->MemberSystem->isLogin() == TRUE){
		$this->load->view('common/loginInfo');
	}
	else
	{
		$this->load->view('common/loginBar');
	}
?>