<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compras;

/**
 * ComprasSearch represents the model behind the search form about `app\models\Compras`.
 */
class ComprasSearch extends Compras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'facturas_id', 'productos_id', 'cantidad', 'fraccion', 'descuento'], 'integer'],
            [['precio_unitario'], 'number'],
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
        $query = Compras::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'facturas_id' => $this->facturas_id,
            'productos_id' => $this->productos_id,
            'cantidad' => $this->cantidad,
            'fraccion' => $this->fraccion,
            'precio_unitario' => $this->precio_unitario,
            'descuento' => $this->descuento,
        ]);

        return $dataProvider;
    }
}
