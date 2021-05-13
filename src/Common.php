<?php
namespace ETHtp6;

use ETHtp6\Config\Config;

class Common
{

    /**
     * 主网的域名
     */
    public $host;

    /**
     * apiKey
     * @var string
     */
    public $apiKey;

    public function __construct()
    {
        $configInstance = Config::instance();
        $this->host = $configInstance->getHost();
        $this->apiKey = $configInstance->getApiKey();
    }


    /**
     * 创建一个url
     * @param string $host
     * @param string $uri
     * @param array $param
     * @return string
     */
    public function buildUrl(string $host  , string $uri , array $param = []) : string
    {
        $url = $host . $uri;
        if(!empty($param)){

        }
        return $url;
    }




}