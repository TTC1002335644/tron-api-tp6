<?php

namespace ETHtp6;

use ETHtp6\Implement\WalletInterface;
use ETHtp6\Http\Http;

class Wallet extends Common implements WalletInterface
{

    public function createAccount(string $owner_address, string $account_address, bool $visible = false, $permission_id = null)
    {
        //获取访问的url
        $url = $this->buildUrl($this->host , self::createAccountUrl , []);
        //开始请求数据
        $params = [
            'owner_address' => $owner_address,
            'account_address' => $account_address,
            'visible' => $visible,
        ];
        if(is_int($permission_id)){
            $params['permission_id'] = $permission_id;
        }

        //此处该有验证数据（可以依赖tp的验证）
        $data = Http::post($url , $params);
        var_dump($data);
    }

    public function getAccount(string $address, bool $visible = false)
    {
        //获取访问的url
        $url = $this->buildUrl($this->host , self::getAccountUrl , []);
        //开始请求数据
        $params = [
            'address' => $address,
            'visible' => $visible,
        ];

        //此处该有验证数据（可以依赖tp的验证）
        $data = Http::post($url , $params);
        var_dump($data);
    }

    public function updateAccount(string $owner_address, string $account_name, bool $visible = false, ?int $permission_id = null)
    {

        //获取访问的url
        $url = $this->buildUrl($this->host , self::getAccountUrl , []);
        //开始请求数据
        $params = [
            'owner_address' => $owner_address,
            'account_address' => $account_name,
            'visible' => $visible,
        ];
        if(is_int($permission_id)){
            $params['permission_id'] = $permission_id;
        }
        //此处该有验证数据（可以依赖tp的验证）
        $data = Http::post($url , $params);
        var_dump($data);


    }
}