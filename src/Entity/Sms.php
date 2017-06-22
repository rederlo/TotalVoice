<?php
/**
 * Created by PhpStorm.
 * User: ederl
 * Date: 21/06/2017
 * Time: 17:44
 */

namespace rederlo\TotalVoice\Entity;

/**
 * Class Sms
 * @package rederlo\TotalVoice\Sms
 */
class Sms extends Entity
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
    private $resposta_usuario;

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
}