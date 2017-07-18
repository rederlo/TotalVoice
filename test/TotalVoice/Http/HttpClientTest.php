<?php
namespace TotalVoiceTest;

use rederlo\TotalVoice\Entity\Conta;
use rederlo\TotalVoice\Entity\Sms;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class HttpClientTest
 * @package TotalVoiceTest
 */
class HttpClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    private $Http;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();
        $this->Http = new HttpClient([
            'token' => MY_TOKEN,
            'url' => URL
        ]);
    }

    /**
     *
     */
    public function testPost()
    {
        $sms = new Sms();
        $sms->setNumeroDestino('41998274011');
        $sms->setMensagem("teste");
        $sms->setRespostaUsuario(false);

        $response = $this->Http->post('/sms', $sms->toArray());

        $this->assertEquals(402, $response->getStatusCode());
        $this->assertInstanceOf('rederlo\\TotalVoice\\Http\\HttpClient', $this->Http);

    }

    /**
     *
     */
    public function testGet()
    {
        $response = $this->Http->get('/saldo');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('rederlo\\TotalVoice\\Http\\HttpClient', $this->Http);
    }

//    /**
//     *
//     */
//    public function testPut()
//    {
//        $conta = new Conta();
//        $conta->setNome("Ederlo Rodrigo");
//        $conta->setLogin('rederlo');
//        $conta->setSenha("1234");
//
//        $response = $this->Http->put('/conta', $conta->toArray());
//        $this->assertEquals(200, $response->getStatusCode());
//        $this->assertInstanceOf('rederlo\\TotalVoice\\Http\\HttpClient', $this->Http);
//    }
}