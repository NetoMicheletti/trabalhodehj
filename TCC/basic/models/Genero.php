<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property integer $idGenero
 * @property string $Descricao
 *
 * @property GeneroHasFilme[] $generoHasFilmes
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Descricao'], 'string', 'max' => 180],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGenero' => 'Id Genero',
            'Descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneroHasFilmes()
    {
        return $this->hasMany(GeneroHasFilme::className(), ['Genero_idGenero' => 'idGenero']);
    }
}
