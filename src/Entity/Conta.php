<?php
namespace rederlo\TotalVoice\Entity;

/**
 * Class Conta
 * @package rederlo\TotalVoice\Entity
 */
class Conta extends Entity
{
    /**
     * @var
     */
    private $nome;

    /**
     * @var
     */
    private $login;

    /**
     * @var
     */
    private $senha;

    /**
     * @var
     */
    private $cpf_cnpj;

    /**
     * @var
     */
    private $telefone;

    /**
     * @var
     */
    private $preco_cel;

    /**
     * @var
     */
    private $email_financeiro;

    /**
     * @var
     */
    private $nome_fantasia;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * @param mixed $cpf_cnpj
     */
    public function setCpfCnpj($cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getPrecoCel()
    {
        return $this->preco_cel;
    }

    /**
     * @param mixed $preco_cel
     */
    public function setPrecoCel($preco_cel)
    {
        $this->preco_cel = $preco_cel;
    }

    /**
     * @return mixed
     */
    public function getEmailFinanceiro()
    {
        return $this->email_financeiro;
    }

    /**
     * @param mixed $email_financeiro
     */
    public function setEmailFinanceiro($email_financeiro)
    {
        $this->email_financeiro = $email_financeiro;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nome_fantasia;
    }

    /**
     * @param mixed $nome_fantasia
     */
    public function setNomeFantasia($nome_fantasia)
    {
        $this->nome_fantasia = $nome_fantasia;
    }
}