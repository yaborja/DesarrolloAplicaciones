<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property int $Idalumno
 * @property string $Apellidos
 * @property string $Nombres
 * @property string $Fechanacimiento
 * @property string $Sexo
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Email
 * @property string $Password
 * @property string $Grado
 * @property string $Seccion
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Idalumno', 'Apellidos', 'Nombres', 'Fechanacimiento', 'Sexo', 'Direccion', 'Telefono', 'Email', 'Password', 'Grado', 'Seccion'], 'required'],
            [['Idalumno'], 'integer'],
            [['Apellidos', 'Nombres', 'Direccion', 'Telefono', 'Email', 'Password'], 'string', 'max' => 50],
            [['Fechanacimiento'], 'string', 'max' => 10],
            [['Sexo'], 'string', 'max' => 20],
            [['Grado', 'Seccion'], 'string', 'max' => 1],
            [['Idalumno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Idalumno' => 'Idalumno',
            'Apellidos' => 'Apellidos',
            'Nombres' => 'Nombres',
            'Fechanacimiento' => 'Fechanacimiento',
            'Sexo' => 'Sexo',
            'Direccion' => 'Direccion',
            'Telefono' => 'Telefono',
            'Email' => 'Email',
            'Password' => 'Password',
            'Grado' => 'Grado',
            'Seccion' => 'Seccion',
        ];
    }
}
