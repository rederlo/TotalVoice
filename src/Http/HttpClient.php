<?php
namespace rederlo\TotalVoice\Http;

/**
 * Class HttpClient
 * @package rederlo\TotalVoice\Http
 */
class HttpClient
{

    /**
     * @var
     */
    public $token;

    /**
     * @var
     */
    public $url;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->token = $config['token'];
        $this->url = $config['url'];
    }

    /**
     * @param $url
     * @param array $data
     * @return HttpResponse
     */
    public function post($url, array $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Access-Token: ' . $this->token]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = new HttpResponse();
        $response->setStatusCode((int)$info['http_code']);
        $response->setContentType($info['content_type']);
        $response->setContent(json_decode($output));
        return $response;
    }

    /**
     * @param $url
     * @param array $data
     * @return HttpResponse
     */
    public function put($url, array $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Access-Token: ' . $this->token]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = new HttpResponse();
        $response->setStatusCode((int)$info['http_code']);
        $response->setContentType($info['content_type']);
        $response->setContent(json_decode($output));
        return $response;
    }

    /**
     * @param $url
     * @return HttpResponse
     */
    public function get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $url);
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Access-Token: ' . $this->token]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = new HttpResponse();
        $response->setStatusCode((int)$info['http_code']);
        $response->setContentType($info['content_type']);
        $response->setContent(json_decode($output));
        return $response;
    }
}