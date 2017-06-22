<?php
namespace TotalVoiceTest;

use rederlo\TotalVoice\Action\SmsAction;
use rederlo\TotalVoice\Action\TtsAction;
use rederlo\TotalVoice\Entity\Sms;
use rederlo\TotalVoice\Entity\Tts;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class TtsActionTest
 * @package TotalVoiceTest
 */
class TtsActionTest extends \PHPUnit_Framework_TestCase
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
        $tts = new Tts();
        $tts->setNumeroDestino('4199999999');
        $tts->setMensagem("teste");
        $tts->setRespostaUsuario(false);
        $tts->setBina('xxxx-xxxx');

        $response = TtsAction::send($this->Http, $tts);
        $this->assertEquals(402, $response->getStatusCode());
    }

    /**
     *
     */
    public function testGet()
    {
        $response = TtsAction::get($this->Http, 1);
        $this->assertEquals(404, $response->getStatusCode());
    }

    /**
     *
     */
    public function testReport()
    {
        $response = TtsAction::report($this->Http, 1);
        $this->assertEquals(200, $response->getStatusCode());
    }
}