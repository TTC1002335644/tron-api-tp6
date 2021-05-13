<?php
namespace ETHtp6\Config;

/**
 * Class Config
 * @package ETHtp6\Config
 */
class Config
{
    /**
     * 主网的域名
     */
    public static $host;

    /**
     * apiKey
     * @var string
     */
    public static $apiKey;

    public static $instance = null;

    private function __construct()
    {
        self::$host = "https://api.trongrid.io";
        self::$apiKey = "fb126ec2-a0d3-40b1-9ddc-41a1dad8fb07";
    }


    /**
     * 单例
     * @return Config|null
     */
    public static function instance()
    {
        if(self::$instance === null){
            self::$instance = new Config();
        }
        return self::$instance;
    }


    /**
     * 获取apiKey
     * @return string
     */
    public function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * 获取主网域名
     * @return string
     */
    public function getHost()
    {
        return self::$host;
    }


}