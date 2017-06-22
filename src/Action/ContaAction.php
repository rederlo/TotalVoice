<?php
/**
 * Created by PhpStorm.
 * User: ederl
 * Date: 21/06/2017
 * Time: 19:23
 */

namespace rederlo\TotalVoice\Action;

use rederlo\TotalVoice\Http\HttpClient;

class ContaAction
{
    /**
     * @param HttpClient $http
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function getConta(HttpClient $http)
    {
        return $http->get("/conta");
    }

    /**
     * @param HttpClient $http
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function getRecargas(HttpClient $http)
    {
        return $http->get("/conta/recargas");
    }

    /**
     * @param HttpClient $http
     * @return \rederlo\TotalVoice\Http\HttpResponse
     */
    public static function getSaldo(HttpClient $http)
    {
        return $http->get("/saldo");
    }

}