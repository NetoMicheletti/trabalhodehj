<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comentario;

/**
 * ComentarioSearch represents the model behind the search form about `app\models\Comentario`.
 */
class ComentarioSearch extends Comentario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idComentarios', 'Filmes_idFilmes', 'Usuario_idUsuario'], 'integer'],
            [['Comentario', 'Data', 'status'], 'safe'],
            [['Nota'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comentario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idComentarios' => $this->idComentarios,
            'Data' => $this->Data,
            'Nota' => $this->Nota,
            'Filmes_idFilmes' => $this->Filmes_idFilmes,
            'Usuario_idUsuario' => $this->Usuario_idUsuario,
        ]);

        $query->andFilterWhere(['like', 'Comentario', $this->Comentario])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
