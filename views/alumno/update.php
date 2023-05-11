<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Alumno $model */

$this->title = 'Update Alumno: ' . $model->Idalumno;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Idalumno, 'url' => ['view', 'Idalumno' => $model->Idalumno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
