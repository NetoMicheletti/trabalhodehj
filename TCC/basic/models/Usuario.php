<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $idUsuario
 * @property string $Nome
 * @property string $Email
 * @property string $Nascimento
 * @property string $Senha
 * @property string $Sexo
 *
 * @property Comentario[] $comentarios
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Nascimento'], 'safe'],
            [['Nome', 'Email'], 'string', 'max' => 180],
            [['Senha'], 'string', 'max' => 45],
            [['Sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'Nome' => 'Nome',
            'Email' => 'E-mail',
            'Nascimento' => 'Nascimento',
            'Senha' => 'Senha',
            'Sexo' => 'Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['Usuario_idUsuario' => 'idUsuario']);
    }
}
