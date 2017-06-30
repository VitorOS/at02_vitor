<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/login');
	}

	public function Login(){
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('common/home');	
	}
	/*
	* Verifica se o usuário preencheu os campos de login
	* Se ele não os preencheu devolve com os erros se sim chama a função que verifica usuário
	*/
	public function Valida_Login(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cpf', 'CPF', 'required|min_length[11]',
			 array('required' => 'Por favor, Digite um número de CPF',
			 'min_length' => 'Por favor, Digite um número de CPF válido')
		);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]',
        	array('required', 'Por favor informe sua senha',
        		   'min_length' => 'Sua senha deve conter mais de 6 digitos')
        );
		if ($this->form_validation->run() == FALSE){
		 	$this->load->view('common/header');
            $this->load->view('common/login');
	    }else{
    		$this->form_validation->set_rules('geral', 'geral', 'callback_Verifica_login')	;
    		$this->form_validation->run();
    		if($this->form_validation->run() == FALSE){
         		$this->load->view('common/header');
            	$this->load->view('common/login');
    		}else{
    			$this->Login();
    		}
        }
	}

	public function Verifica_login(){
		$this->load->model("Usuario_Model");
		$status_retorno = $this->Usuario_Model->Verifica_login();
		switch ($status_retorno) {
			//Senha errada
			case 1:
				$this->form_validation->set_message('Verifica_login', ' <div class="alert alert-warning">Senha incorreta</div>');
				return false;
				break;
			//Usuário não encontrado
			case 2:
				$this->form_validation->set_message('Verifica_login', '<div class="alert alert-danger">Usuário não encontrado</div>');
				return false;
				break;
			// Erro 
			default:
				# code...
			break;
		}
	}	
}
