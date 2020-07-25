<?php 

class Usuario {

	private $id;
	private $nome;
	private $senha;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSenha(){
		return $this->senha;
    }

	public function setSenha($senha){
		$this->senha = $senha;
    }

	
	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM usuario WHERE id = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0) {

			$this->setData($results[0]);

		}

	}

	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario ORDER BY nome;");

	}

	public static function search($nome){

		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario WHERE nome LIKE :SEARCH ORDER BY nome", array(
			':SEARCH'=>"%".$nome."%"
		));

	}

	public function login($nome, $senha){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM usuario WHERE nome = :LOGIN AND senha = :PASSWORD", array(
			":LOGIN"=>$nome,
			":PASSWORD"=>$senha
		));

		if (count($results) > 0) {

			$this->setData($results[0]);

		} else {

			throw new Exception("Login e/ou senha inválidos.");

		}

	}

	public function setData($data){

		$this->setId($data['id']);
		$this->setNome($data['nome']);
		$this->setSenha($data['senha']);
	}

	public function insert(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_usuario_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getNome(),
			':PASSWORD'=>$this->getSenha()
		));

		if (count($results) > 0) {
			$this->setData($results[0]);
		}

	}

	public function update($login, $password){

		$this->setNome($login);
		$this->setSenha($password);

		$sql = new Sql();

		$sql->query("UPDATE usuario SET nome = :LOGIN, senha = :PASSWORD WHERE id = :ID", array(
			':LOGIN'=>$this->getNome(),
			':PASSWORD'=>$this->getSenha(),
			':ID'=>$this->getId()
		));

	}

	public function delete(){

		$sql = new Sql();

		$sql->query("DELETE FROM usuario WHERE id = :ID", array(
			':ID'=>$this->getId()
		));

		$this->setId(0);
		$this->setNome("");
		$this->setSenha("");

	}

	public function __construct($login = "", $password = ""){

		$this->setNome($login);
		$this->setSenha($password);

	}

	public function __toString(){

		return json_encode(array(
			"id"=>$this->getId(),
			"nome"=>$this->getNome(),
			"senha"=>$this->getSenha(),
		));

	}

}
 ?>