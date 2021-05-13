<?php
namespace ETHtp6\Implement;


/**
 * 账户
 * Interface AccountInterface
 * @package ETHtp6\Implement
 */
interface AccountInterface
{


    /**
     * 获取账户信息
     * @param array $data 数据
     * @param bool|null $data["address"] Base58check 地址或 HEX 地址
     * @param bool|null $data["only_confirmed"] 是否查已确认
     * @param bool|null $data["only_unconfirmed"] 是否查未经确认
     * @return array
     */
    public function getAccountInfo( array $data );

    /**
     * 获取账户历史交易信息
     * @param array $data 数据
     * @param bool|null $data["address"] Base58check 地址或 HEX 地址
     * @param bool|null $data["only_confirmed"] 是否查已确认
     * @param bool|null $data["only_unconfirmed"] 是否查未经确认
     * @param bool|null $data["only_to"] 只查询转入交易
     * @param bool|null $data["only_from"] 只查询转出交易
     * @param bool|null $data["only_from"] 只查询转出交易
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @param int $data["order_by"] block_timestamp,asc 或 block_timestamp,desc (默认)
     * @param int $data["min_timestamp"] 起始时间, 默认为0
     * @param int $data["max_timestamp"] 终止时间, 默认为当前时间
     * @param bool|null $data["search_internal"] 是否查询内部交易, 默认 true
     * @return array
     */
    public function getHistoryTransactions( array $data );

    /**
     * 获取账户历史TRC20交易记录
     * @param array $data 数据
     * @param bool|null $data["address"] Base58check 地址或 HEX 地址
     * @param bool|null $data["only_confirmed"] 是否查已确认
     * @param bool|null $data["only_unconfirmed"] 是否查未经确认
     * @param bool|null $data["only_to"] 只查询转入交易
     * @param bool|null $data["only_from"] 只查询转出交易
     * @param bool|null $data["only_from"] 只查询转出交易
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @param string $data["order_by"] block_timestamp,asc 或 block_timestamp,desc (默认)
     * @param int $data["min_timestamp"] 起始时间, 默认为0
     * @param int $data["max_timestamp"] 终止时间, 默认为当前时间
     * @param bool|null $data["search_internal"] 是否查询内部交易, 默认 true
     * @param string $data["contract_address"] 特定合约地址, 用于过滤 TRC20 交易
     * @return array
     */
    public function getTrc20HistoryTransactions( array $data );



}