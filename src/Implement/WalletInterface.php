<?php
namespace ETHtp6\Implement;

interface WalletInterface
{
    /**
     * string 创建账号的url
     */
    const createAccountUrl = "/wallet/createaccount";

    /**
     * string 查询一个账号的url
     */
    const getAccountUrl = "/wallet/getaccount";

    /**
     * string 修改账户的名称
     */
    const updateAccountUrl = "/wallet/updateaccount";



        /**
     * 在链上创建账号. 一个已经激活的账号创建一个新账号需要花费 0.1 TRX 或等值 Bandwidth.
     * @param string $owner_address 创建者账号地址, 需要已经激活且至少有 0.1 TRX 余额, Base58check 格式或 HEX 格式
     * @param string $account_address 所创建的账户地址, Base58check 格式或 HEX 格式. 可以通过地址工具 API 获得
     * @param bool $visible 账户地址是否为 Base58check 格式, 默认为 false, 使用 HEX 地址
     * @param null $permission_id 可选，用于多签名
     * @return mixed
     */
    public function createAccount( string $owner_address ,  string $account_address , bool $visible = false , $permission_id = null);

    /**
     * 查询一个账号的信息, 包括余额, TRC10 余额, 冻结资源, 权限等.
     * @param string $address
     * @param bool $visible
     * @return mixed
     */
    public function getAccount( string $address , bool $visible = false );

    /**
     * 修改账户的名称
     * @param string $owner_address
     * @param string $account_name
     * @param bool $visible
     * @param int|null $permission_id
     * @return mixed
     */
    public function updateAccount( string $owner_address , string $account_name , bool $visible = false , ?int $permission_id = null);



}