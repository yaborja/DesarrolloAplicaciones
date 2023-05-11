<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * SearchAlumno represents the model behind the search form of `app\models\Alumno`.
 */
class SearchAlumno extends Alumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Idalumno'], 'integer'],
            [['Apellidos', 'Nombres', 'Fechanacimiento', 'Sexo', 'Direccion', 'Telefono', 'Email', 'Password', 'Grado', 'Seccion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Alumno::find();

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
            'Idalumno' => $this->Idalumno,
        ]);

        $query->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Fechanacimiento', $this->Fechanacimiento])
            ->andFilterWhere(['like', 'Sexo', $this->Sexo])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Telefono', $this->Telefono])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'Grado', $this->Grado])
            ->andFilterWhere(['like', 'Seccion', $this->Seccion]);

        return $dataProvider;
    }
}
