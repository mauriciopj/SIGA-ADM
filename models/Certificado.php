<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aacc".
 *
 * @property int $id
 * @property string $tamanho
 */
class Certificado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['tamanho'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tamanho' => 'Tamanho',
        ];
    }
}
