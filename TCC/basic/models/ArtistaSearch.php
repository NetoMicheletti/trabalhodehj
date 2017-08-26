<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Artista;

/**
 * ArtistaSearch represents the model behind the search form about `app\models\Artista`.
 */
class ArtistaSearch extends Artista
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idArtista'], 'integer'],
            [['Nome', 'Pais', 'Nascimento'], 'safe'],
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
        $query = Artista::find();

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
            'idArtista' => $this->idArtista,
            'Nascimento' => $this->Nascimento,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Pais', $this->Pais]);

        return $dataProvider;
    }
}
