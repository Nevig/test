<?php 
	class Blog extends Controller{
		function index(){
			$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands', 'nuevo actualizar');
			$data['title'] = "prueba para actualizat heroku";
			$data['heading'] = "Heroku is actualized";
			$this->load->view('vistablog', $data);
		}
	}
 ?>
 