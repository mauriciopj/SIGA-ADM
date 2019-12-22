<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tcc".
 *
 * @property int $id
 * @property string $tema
 * @property string $titulo
 */
class Tcc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tcc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['tema'], 'string', 'max' => 120],
            [['titulo'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tema' => 'Tema',
            'titulo' => 'Título',
        ];
    }
}
