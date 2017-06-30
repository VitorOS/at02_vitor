<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividade extends CI_Controller {
	
	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/login');
	}

	public function cadastrar(){
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('atividade/cadastrar');
	}

	public function cadastrados(){
		$this->load->model('Atividade_Model');
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$dados['resultado'] = $this->Atividade_Model->getRelatorios();	
		$this->load->view('atividade/relatorio',$dados);
	}

	public function upload(){
		$this->load->model("Atividade_Model");
	     $this->Atividade_Model->addHistory();
		$teste = explode('index.php', $_SERVER['SCRIPT_FILENAME']);
		$uploaddir = $teste[0] . 'uploads/';
		$uploadfile = $uploaddir . basename($_FILES['import_file']['name']);
		move_uploaded_file($_FILES['import_file']['tmp_name'], $uploadfile);
		$ponteiro = fopen($uploadfile ,'r');

		while (!feof ($ponteiro)) {
			$html="";
	     	 $linha = fgets($ponteiro,196);
	     	 $html.= $linha.'<br>';
	     }
		// Instancia a classe mPDF
		$mpdf = new mPDF();
		// Ao invés de imprimir a view 'welcome_message' na tela, passa o código
		// HTML dela para a variável $html
		//$html = $this->load->view('welcome_message','',TRUE);
		// Define um Cabeçalho para o arquivo PDF
		$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
		// Define um rodapé para o arquivo PDF, nesse caso inserindo o número da
		// página através da pseudo-variável PAGENO
		$mpdf->SetFooter('{PAGENO}');
		// Insere o conteúdo da variável $html no arquivo PDF
		$mpdf->writeHTML($html);
		// Cria uma nova página no arquivo
		$mpdf->AddPage();
		// Insere o conteúdo na nova página do arquivo PDF
		$mpdf->WriteHTML('<p><b>Minha nova página no arquivo PDF</b></p>');
		// Gera o arquivo PDF
		$mpdf->Output();



	}
	
}
