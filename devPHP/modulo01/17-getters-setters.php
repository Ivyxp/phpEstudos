<?php

class Login {
  protected $email;
  protected $senha;
  
  
  public function getEmail()
  {
    return $this->email;
  }
  
  public function setEmail($email)
  {
    $this->email = $email;
  }
  
  public function getSenha()
    {
      return $this->senha;
    }
    
    public function setSenha($senha)
    {
      $this->senha = $senha;
    }
    
    public function logar()
    {
    if ($this->email == "teste@teste.com" AND $this->senha == "123456") {
      return "logado";
    }else {
      return "dados invalidos";
    }
  }
    //MEETODO PRIVADO
    private function sair()
    {
      return 'saiu com sucesso!';
    }
    //PARA ACESSAR METODOS PRIVADOS E NECESSARIO TER UNAVOUTRA FUNCAO PARA ACESSAR ESSE METODO
    public function acao()
    {
      //acessando metodo privado pelo o escopo do metodo publico
      $this->sair();
    }
    
    
}

$login = new Login();
//pessando argumentos via getters e chamando o metodo.
$login->setEmail("teste@teste.com");
$login->setSenha("123456");
$login->logar();
//chamado o metodo acao que redireciona paaara o metodo saiu
$login->acao();