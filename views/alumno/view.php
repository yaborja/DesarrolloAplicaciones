<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Alumno $model */

$this->title = $model->Idalumno;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alumno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Idalumno' => $model->Idalumno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Idalumno' => $model->Idalumno], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Idalumno',
            'Apellidos',
            'Nombres',
            'Fechanacimiento',
            'Sexo',
            'Direccion',
            'Telefono',
            'Email:email',
            'Password',
            'Grado',
            'Seccion',
        ],
    ]) ?>

</div>
