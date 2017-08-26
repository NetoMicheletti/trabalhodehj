<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property integer $idComentarios
 * @property string $Comentario
 * @property string $Data
 * @property string $Nota
 * @property string $status
 * @property integer $Filmes_idFilmes
 * @property integer $Usuario_idUsuario
 *
 * @property Usuario $usuarioIdUsuario
 * @property Filme $filmesIdFilmes
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Data'], 'safe'],
            [['Nota'], 'number'],
            [['Filmes_idFilmes', 'Usuario_idUsuario'], 'required'],
            [['Filmes_idFilmes', 'Usuario_idUsuario'], 'integer'],
            [['Comentario'], 'string', 'max' => 180],
            [['status'], 'string', 'max' => 45],
            [['Usuario_idUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['Usuario_idUsuario' => 'idUsuario']],
            [['Filmes_idFilmes'], 'exist', 'skipOnError' => true, 'targetClass' => Filme::className(), 'targetAttribute' => ['Filmes_idFilmes' => 'idFilmes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idComentarios' => 'Id Comentarios',
            'Comentario' => 'Comentario',
            'Data' => 'Data',
            'Nota' => 'Nota',
            'status' => 'Status',
            'Filmes_idFilmes' => 'Filmes Id Filmes',
            'Usuario_idUsuario' => 'Usuario Id Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['idUsuario' => 'Usuario_idUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmesIdFilmes()
    {
        return $this->hasOne(Filme::className(), ['idFilmes' => 'Filmes_idFilmes']);
    }
}
