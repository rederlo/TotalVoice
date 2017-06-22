<?php
namespace rederlo\TotalVoice\Entity;

/**
 * Class Tts
 * @package rederlo\TotalVoice\Entity
 */
class Tts extends Entity
{
    /**
     * @var
     */
    private $numero_destino;

    /**
     * @var
     */
    private $mensagem;

    /**
     * @var
     */
    private $velocidade;

    /**
     * @var
     */
    private $resposta_usuario;

    /**
     * @var
     */
    private $bina;

    /**
     * @return mixed
     */
    public function getNumeroDestino()
    {
        return $this->numero_destino;
    }

    /**
     * @param mixed $numero_destino
     */
    public function setNumeroDestino($numero_destino)
    {
        $this->numero_destino = $numero_destino;
    }

    /**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return mixed
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * @param mixed $velocidade
     */
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
    }

    /**
     * @return mixed
     */
    public function getRespostaUsuario()
    {
        return $this->resposta_usuario;
    }

    /**
     * @param mixed $resposta_usuario
     */
    public function setRespostaUsuario($resposta_usuario)
    {
        $this->resposta_usuario = $resposta_usuario;
    }

    /**
     * @return mixed
     */
    public function getBina()
    {
        return $this->bina;
    }

    /**
     * @param mixed $bina
     */
    public function setBina($bina)
    {
        $this->bina = $bina;
    }
}