<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Books;

/**
 * BookSearch represents the model behind the search form about `backend\models\Books`.
 */
class BookSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'create_by', 'update_by', 'item_order'], 'integer'],
            [['name', 'detail', 'image', 'create_date', 'update_date', 'isactive'], 'safe'],
            [['price'], 'number'],
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
        $query = Books::find();

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
            'id' => $this->id,
            'price' => $this->price,
            'cat_id' => $this->cat_id,
            'create_date' => $this->create_date,
            'create_by' => $this->create_by,
            'update_date' => $this->update_date,
            'update_by' => $this->update_by,
            'item_order' => $this->item_order,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'isactive', $this->isactive]);

        return $dataProvider;
    }
}
