<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aacc".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $tipo
 */
class Aacc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aacc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['titulo'], 'string', 'max' => 120],
            [['descricao'], 'string', 'max' => 200],
            [['tipo'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Título',
            'descricao' => 'Descrição',
            'tipo' => 'Tipo',
        ];
    }
}
