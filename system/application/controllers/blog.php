<?php 
	class Blog extends Controller{
		function index(){
			$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
			$data['title'] = "My real Title";
			$data['heading'] = "My real Heading";
			$this->load->view('vistablog', $data);
		}
	}
 ?>
 