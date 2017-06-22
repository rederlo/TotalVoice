<?php
namespace TotalVoiceTest;

use rederlo\TotalVoice\Action\ContaAction;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class ContaActionTest
 * @package TotalVoiceTest
 */
class ContaActionTest extends \PHPUnit_Framework_TestCase
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
    public function testSaldo()
    {
        $response = ContaAction::getSaldo($this->Http);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testRecargas()
    {
        $response = ContaAction::getRecargas($this->Http);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testConta()
    {
        $response = ContaAction::getConta($this->Http);
        $this->assertEquals(200, $response->getStatusCode());
    }
}
