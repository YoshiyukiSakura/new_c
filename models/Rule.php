<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rule".
 *
 * @property int $id
 * @property string $rule_name 规则名称
 * @property string $forward_path 转发路径
 * @property string $source_address 目标地址
 * @property string $before_behaviors 转发前行为
 * @property string $after_behaviors 转发前行为
 * @property int $created_at 创建时间
 * @property int $updated_at 最后修改时间
 */
class Rule extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [\yii\behaviors\TimestampBehavior::className()];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['rule_name', 'forward_path', 'source_address', 'before_behaviors', 'after_behaviors'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rule_name' => '规则名称',
            'forward_path' => '转发路径',
            'source_address' => '目标地址',
            'before_behaviors' => '转发前行为',
            'after_behaviors' => '转发前行为',
            'created_at' => '创建时间',
            'updated_at' => '最后修改时间',
        ];
    }
}