<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero_has_filme".
 *
 * @property integer $Genero_idGenero
 * @property integer $Filmes_idFilmes
 *
 * @property Filme $filmesIdFilmes
 * @property Genero $generoIdGenero
 */
class GeneroHasFilme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genero_has_filme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Genero_idGenero', 'Filmes_idFilmes'], 'required'],
            [['Genero_idGenero', 'Filmes_idFilmes'], 'integer'],
            [['Filmes_idFilmes'], 'exist', 'skipOnError' => true, 'targetClass' => Filme::className(), 'targetAttribute' => ['Filmes_idFilmes' => 'idFilmes']],
            [['Genero_idGenero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['Genero_idGenero' => 'idGenero']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Genero_idGenero' => 'Genero Id Genero',
            'Filmes_idFilmes' => 'Filmes Id Filmes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmesIdFilmes()
    {
        return $this->hasOne(Filme::className(), ['idFilmes' => 'Filmes_idFilmes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneroIdGenero()
    {
        return $this->hasOne(Genero::className(), ['idGenero' => 'Genero_idGenero']);
    }
}
