<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filme;

/**
 * FilmeSearch represents the model behind the search form about `app\models\Filme`.
 */
class FilmeSearch extends Filme
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFilmes', 'Classificação', 'Diretor_idDiretor'], 'integer'],
            [['Titulo', 'Diretor', 'Elenco', 'Ano', 'Duracao'], 'safe'],
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
        $query = Filme::find();

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
            'idFilmes' => $this->idFilmes,
            'Ano' => $this->Ano,
            'Duracao' => $this->Duracao,
            'Classificação' => $this->Classificação,
            'Diretor_idDiretor' => $this->Diretor_idDiretor,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Diretor', $this->Diretor])
            ->andFilterWhere(['like', 'Elenco', $this->Elenco]);

        return $dataProvider;
    }
}
