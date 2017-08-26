<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diretor".
 *
 * @property integer $idDiretor
 * @property string $Nome
 * @property string $Pais
 * @property string $Nascimento
 *
 * @property Filme[] $filmes
 */
class Diretor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diretor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Nascimento'], 'safe'],
            [['Nome', 'Pais'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDiretor' => 'Id Diretor',
            'Nome' => 'Nome',
            'Pais' => 'Pais',
            'Nascimento' => 'Nascimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmes()
    {
        return $this->hasMany(Filme::className(), ['Diretor_idDiretor' => 'idDiretor']);
    }
}
