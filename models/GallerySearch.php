<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 01.05.2023
 * Time: 01:14
 */

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GalleryModel;

class GallerySearch extends GalleryModel
{
    public function rules()
    {
        return [
            [['name'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = GalleryModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}