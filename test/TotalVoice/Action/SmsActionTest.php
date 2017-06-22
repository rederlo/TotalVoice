<?php
namespace TotalVoiceTest;

use rederlo\TotalVoice\Action\SmsAction;
use rederlo\TotalVoice\Entity\Sms;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class SmsActionTest
 * @package TotalVoiceTest
 */
class SmsActionTest extends \PHPUnit_Framework_TestCase
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
    public function testSend()
    {
        $sms = new Sms();
        $sms->setNumeroDestino('4199999999');
        $sms->setMensagem("teste");
        $sms->setRespostaUsuario(false);

        $response = SmsAction::send($this->Http, $sms);
        $this->assertEquals(402, $response->getStatusCode());
    }

    /**
     *
     */
    public function testGet()
    {
        $response = SmsAction::get($this->Http, 1);
        $this->assertEquals(404, $response->getStatusCode());
    }

    /**
     *
     */
    public function testReport()
    {
        $response = SmsAction::report($this->Http, 1);
        $this->assertEquals(200, $response->getStatusCode());
    }
}