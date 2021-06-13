<?php

namespace app\models;

use Yii;
use app\models\query\ActionQuery;

/**
 * This is the model class for table "{{%action}}".
 *
 * @property int $id
 * @property int|null $id_form
 * @property string|null $Action
 *
 * @property Forms $form
 */
class Actions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%action}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_form'], 'integer'],
            [['Action'], 'string'],
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
            'Action' => 'Action',
        ];
    }

    /**
     * Gets query for [[Form]].
     *
     * @return \yii\db\ActiveQuery|FormsQuery
     */
    public function getForm()
    {
        return $this->hasOne(Forms::className(), ['id' => 'id_form']);
    }

    /**
     * {@inheritdoc}
     * @return ActionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActionsQuery(get_called_class());
    }
}
