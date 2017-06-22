<?php
namespace rederlo\TotalVoice\Action;

use rederlo\TotalVoice\Entity\Sms;
use rederlo\TotalVoice\Http\HttpClient;

/**
 * Class SmsAction
 * @package rederlo\TotalVoice\Action
 */
class SmsAction
{
    /**
     * @param HttpClient $http
     * @param Sms $sms
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function send(HttpClient $http, Sms $sms)
    {
        return $http->post('/sms', $sms->toArray());
    }

    /**
     * @param HttpClient $http
     * @param $id
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function get(HttpClient $http, $id)
    {
        return $http->get("/sms/{$id}");
    }

    /**
     * @param HttpClient $http
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function report(HttpClient $http)
    {
        return $http->get("/sms/relatorio");
    }
}