<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @author Vitor<>
* 
* 
* @copyright 2017 - Atividade Prado
*/
class Atividade_Model extends CI_Model{
		

		public function addHistory(){

			$this->db->set('cpf_cadastro' , $_POST['cpf_usuario']);
			$this->db->set('nome_doc' , $_FILES['import_file']['name']);
			$this->db->set('id_usuario' , $_SESSION['usuario_id']);
			$this->db->set('data_cadastro' , date('Y-m-d H:i:s'));
			$retorno = $this->db->insert('usuario_doc');
			
			return $retorno;



		}

		public function getRelatorios(){
		
				$this->db->from('usuario_doc');
				$this->db->group_by("id_doc");
				 $this->db->join('user', 'user.id_user = usuario_doc.id_usuario');
				//$this->db->join('equipamento', 'equipamento.id_equipamento = reserva.id_equipamento');
				//$this->db->join('usuario', 'usuario.id_usuario = reserva.id_usuario');
				$query = $this->db->get();
			
			$relatorio;
			foreach ($query->result() as $key => $value) {
				$relatorio[$key] = $value;
			}	
			return $relatorio;
  }

}	