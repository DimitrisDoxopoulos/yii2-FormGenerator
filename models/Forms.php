<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Forms}}".
 *
 * @property int $id
 * @property int|null $active
 */


class Forms extends \yii\db\ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Forms}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['form_name'], 'string', 'max' => 512],
            [['active'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'form_name' => 'Form Name',
            'active' => 'Active',
        ];
    }

    public function getStatusLabels()
    {
        return [
            self::STATUS_INACTIVE => 'Inactive',
            self::STATUS_ACTIVE => 'Active'
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\FormsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\FormsQuery(get_called_class());
    }

    
public function getActions()
    {
        return $this->hasMany(Actions::className(), ['id_form'=>'id']);
    }

    public function getInputs()
    {
        return $this->hasMany(Inputs::className(), ['id_form'=> 'id']);
    }


}
