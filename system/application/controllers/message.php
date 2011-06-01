<?php

class Message extends Controller {
	
	function view($type = NULL)
	{
		// get data from database
		$data['messages'] = $this->Message_model->get();
		
		if ($type == "ajax") // load inline view for call from ajax
			$this->load->view('messages_list', $data);
		else // load the default view
			$this->load->view('default', $data);
	}
	
	function add()
	{
		// if HTTP POST is sent, add the data to database
		if($_POST && $_POST['message'] != NULL) {
			$message['message'] = $this->input->xss_clean($_POST['message']);
			$this->Message_model->add($message);
		} else
			redirect('message/view');
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */