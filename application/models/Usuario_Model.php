<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @author Vitor<>
* 
* 
* @copyright 2017 - Atividade Prado
*/
class Usuario_Model extends CI_Model{
	
	public function Verifica_login(){
		/*
		*	Tipos de retorno
		*   0 - Usuário Existente e senha correta
		*	1 - Usuário existente porém senha errada
		*	2 - Usuário não existe
		*   * - Podem ser definidos diversos status
		*/

		$this->db->select("*");
		$this->db->from("user_login");
		$this->db->where('cpf', $this->input->post("cpf"));
		$query = $this->db->get();

		/*
		* Verifica se existe usuario com este CPF
		* Se existir, verifica se a senha digitada é igual a do usuario
		* Se a senha digitada é igual a do usuario carrega a classe usuario e retorna 0
		* Se não retorna 1 
		* Se o usuário não existir, retorna 2
		*/
		if($query->num_rows()){
			foreach($query->result() as $key => $value){
				$usuario[$key] = $value;				
			}	
			if($usuario[0]->password == md5($this->input->post("password"))){
				$this->load->library("session");
				$_SESSION['usuario_id'] = $usuario[0]->id_user; 
				$_SESSION['usuario_email'] = $usuario[0]->email; 
				$_SESSION['usuario_doc'] = $usuario[0]->cpf; 
				$_SESSION['usuario_login'] = $usuario[0]->id_login;
				return 0;
				exit;
			}else{
				return 1;
				exit;
			}
		}else{
			return 2;
			exit;
		}
	}
}