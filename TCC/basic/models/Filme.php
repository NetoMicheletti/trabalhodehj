<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "filme".
 *
 * @property integer $idFilmes
 * @property string $Titulo
 * @property string $Diretor
 * @property string $Elenco
 * @property string $Ano
 * @property string $Duracao
 * @property integer $Classificação
 * @property integer $Diretor_idDiretor
 *
 * @property Comentario[] $comentarios
 * @property Diretor $diretorIdDiretor
 * @property FilmeHasArtista[] $filmeHasArtistas
 * @property Artista[] $artistaIdArtistas
 * @property GeneroHasFilme[] $generoHasFilmes
 */
class Filme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ano', 'Duracao'], 'safe'],
            [['Classificação', 'Diretor_idDiretor'], 'integer'],
            [['Diretor_idDiretor'], 'required'],
            [['Titulo', 'Diretor', 'Elenco'], 'string', 'max' => 45],
            [['Diretor_idDiretor'], 'exist', 'skipOnError' => true, 'targetClass' => Diretor::className(), 'targetAttribute' => ['Diretor_idDiretor' => 'idDiretor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFilmes' => 'Id Filmes',
            'Titulo' => 'Titulo',
            'Diretor' => 'Diretor',
            'Elenco' => 'Elenco',
            'Ano' => 'Ano',
            'Duracao' => 'Duracao',
            'Classificação' => 'Classificação',
            'Diretor_idDiretor' => 'Diretor Id Diretor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['Filmes_idFilmes' => 'idFilmes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiretorIdDiretor()
    {
        return $this->hasOne(Diretor::className(), ['idDiretor' => 'Diretor_idDiretor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmeHasArtistas()
    {
        return $this->hasMany(FilmeHasArtista::className(), ['Filme_idFilmes' => 'idFilmes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtistaIdArtistas()
    {
        return $this->hasMany(Artista::className(), ['idArtista' => 'Artista_idArtista'])->viaTable('filme_has_artista', ['Filme_idFilmes' => 'idFilmes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneroHasFilmes()
    {
        return $this->hasMany(GeneroHasFilme::className(), ['Filmes_idFilmes' => 'idFilmes']);
    }
}
