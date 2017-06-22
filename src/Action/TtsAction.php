<?php
namespace rederlo\TotalVoice\Action;

use rederlo\TotalVoice\Entity\Sms;
use rederlo\TotalVoice\Entity\Tts;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class TtsAction
 * @package rederlo\TotalVoice\Action
 */
class TtsAction
{
    /**
     * @param HttpClient $http
     * @param Tts $sms
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function send(HttpClient $http, Tts $sms)
    {
        return $http->post('/tts', $sms->toArray());
    }

    /**
     * @param HttpClient $http
     * @param $id
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function get(HttpClient $http, $id)
    {
        return $http->get("/tts/{$id}");
    }

    /**
     * @param HttpClient $http
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function report(HttpClient $http)
    {
        return $http->get("/tts/relatorio");
    }
}