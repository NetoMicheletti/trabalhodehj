<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artista".
 *
 * @property integer $idArtista
 * @property string $Nome
 * @property string $Pais
 * @property string $Nascimento
 *
 * @property FilmeHasArtista[] $filmeHasArtistas
 * @property Filme[] $filmeIdFilmes
 */
class Artista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artista';
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
            'idArtista' => 'Id Artista',
            'Nome' => 'Nome',
            'Pais' => 'Pais',
            'Nascimento' => 'Nascimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmeHasArtistas()
    {
        return $this->hasMany(FilmeHasArtista::className(), ['Artista_idArtista' => 'idArtista']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmeIdFilmes()
    {
        return $this->hasMany(Filme::className(), ['idFilmes' => 'Filme_idFilmes'])->viaTable('filme_has_artista', ['Artista_idArtista' => 'idArtista']);
    }
}
