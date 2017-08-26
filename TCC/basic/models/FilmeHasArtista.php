<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "filme_has_artista".
 *
 * @property integer $Filme_idFilmes
 * @property integer $Artista_idArtista
 *
 * @property Artista $artistaIdArtista
 * @property Filme $filmeIdFilmes
 */
class FilmeHasArtista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filme_has_artista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Filme_idFilmes', 'Artista_idArtista'], 'required'],
            [['Filme_idFilmes', 'Artista_idArtista'], 'integer'],
            [['Artista_idArtista'], 'exist', 'skipOnError' => true, 'targetClass' => Artista::className(), 'targetAttribute' => ['Artista_idArtista' => 'idArtista']],
            [['Filme_idFilmes'], 'exist', 'skipOnError' => true, 'targetClass' => Filme::className(), 'targetAttribute' => ['Filme_idFilmes' => 'idFilmes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Filme_idFilmes' => 'Filme Id Filmes',
            'Artista_idArtista' => 'Artista Id Artista',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtistaIdArtista()
    {
        return $this->hasOne(Artista::className(), ['idArtista' => 'Artista_idArtista']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmeIdFilmes()
    {
        return $this->hasOne(Filme::className(), ['idFilmes' => 'Filme_idFilmes']);
    }
}
