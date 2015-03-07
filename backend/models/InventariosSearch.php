<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventarios;

/**
 * InventariosSearch represents the model behind the search form about `app\models\Inventarios`.
 */
class InventariosSearch extends Inventarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cantidad'], 'integer'],
            [['producto_id'], 'string'],
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
        $query = Inventarios::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('producto');

        $query->andFilterWhere([
            'id' => $this->id,
            //'producto_id' => $this->producto_id,
            'cantidad' => $this->cantidad,
        ]);

        $query->andFilterWhere(['like', 'productos.nombre', $this->producto_id])
        ->andFilterWhere(['like', 'productos.marca', $this->producto_id]);

        return $dataProvider;
    }
}
