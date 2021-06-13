<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Inputs}}".
 *
 * @property int $id
 * @property int|null $id_form
 * @property string|null $Label
 * @property int|null $Required
 */
class Inputs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Inputs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_form', 'Required'], 'integer'],
            [['Label'], 'string', 'max' => 512],
            [['id_form'], 'exist', 'skipOnError' => true, 'targetClass' => Forms::className(), 'targetAttribute' => ['id_form' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_form' => 'Id Form',
            'Label' => 'Label',
            'Required' => 'Required',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InputsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InputsQuery(get_called_class());
    }
}
