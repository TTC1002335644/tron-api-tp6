<?php
namespace ETHtp6\Implement;

/**
 * TRC 通证（Asset)
 * Interface AccessInterface
 * @package ETHtp6\Implement
 */
interface AccessInterface
{

    /**
     * 获取所有 TRC10 列表
     * @param array $data 数据
     * @param string $data["order_by"] 排序：total_supply,asc | total_supply,desc | start_time,asc | start_time,desc | end_time,asc | end_time,desc | id,asc | id,desc
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @return array
     */
    public function getAllTRC10List( array $data );


    /**
     * 以名字查询 TRC10
     * @param array $data 数据
     * @param string $data["name"] TRC10 通证的名字缩写, 即符号
     * @param string $data["order_by"] 排序：total_supply,asc | total_supply,desc | start_time,asc | start_time,desc | end_time,asc | end_time,desc | id,asc | id,desc
     * @param int $data["limit"] 每页结果数, 默认 20 最大 200
     * @param string $data["fingerprint"] 翻页参数, 指定上一页的 fingerprint
     * @param bool $data["only_confirmed"] 是否查已确认
     * @return array
     */
    public function getTRC10ListByName( array $data );

    /**
     * 以 ID 或发行人查询 TRC10
     * @param array $data 数据
     * @param string $data["identifier"] TRC10 通证 Asset ID 或发行者账户地址
     * @param bool $data["only_confirmed"] 是否查已确认
     * @return array
     */
    public function getAllTRC10ByIdentifier( array $data );

}