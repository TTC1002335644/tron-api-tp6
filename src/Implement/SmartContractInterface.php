<?php
namespace ETHtp6\Implement;


/**
 * 账户
 * Interface AccountInterface
 * @package ETHtp6\Implement
 */
interface SmartContractInterface
{


    /**
     * 获取合约历史交易信息
     * @param array $data 数据
     * @param bool|null $data["contractAddress"] Base58check 地址或 HEX 地址
     * @param bool|null $data["only_confirmed"] 是否查已确认
     * @param bool|null $data["only_unconfirmed"] 是否查未经确认
     * @param int $data["min_timestamp"] 起始时间, 默认为0
     * @param int $data["max_timestamp"] 终止时间, 默认为当前时间
     * @param int $data["order_by"] block_timestamp,asc 或 block_timestamp,desc
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @param string $data["search_internal"] 是否查询内部交易, 默认为 true
     * @return array
     */
    public function getHistoryTransactions( array $data );


    /**
     * 获取 TRC20 持有者余额信息
     * @param array $data 数据
     * @param bool|null $data["contractAddress"] Base58check 地址或 HEX 地址
     * @param bool|null $data["only_confirmed"] 是否查已确认
     * @param bool|null $data["only_unconfirmed"] 是否查未经确认
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @param string $data["order_by"] balance,desc | balance,asc
     * @return array
     */
    public function getBalanceTRC20( array $data );




}