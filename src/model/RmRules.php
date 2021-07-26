<?php


namespace RmTop\model;


use think\Model;

/**
 * Class app\common\model\RmRules
 *
 * @property int $id
 * @property string $ptype
 * @property string $v0
 * @property string $v1
 * @property string $v2
 * @property string $v3
 * @property string $v4
 * @property string $v5
 */
class RmRules  extends Model
{

    // 设置当前模型对应的完整数据表名称
    protected $table;
    // 开启自动写入时间戳字段

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = true;

    public function __construct(array $data = [])
    {
        $this->table = env('database.prefix', '')."rules";
        parent::__construct($data);
    }

}