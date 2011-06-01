<?php

class Form extends Controller {
	function index()
	{
    mysql_client_encoding(
		$this->load->helper('form');
		
		$attributes = array('class' => '', 'id' => 'login_form');
			echo form_open('login/welcome', $attributes);
			echo form_label('Email:', 'email');
			echo form_input('email' ,'');
			echo form_label('Password:', 'password');
			echo form_password('password' ,'');
	}
}
