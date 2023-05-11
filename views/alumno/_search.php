<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SearchAlumno $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alumno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Idalumno') ?>

    <?= $form->field($model, 'Apellidos') ?>

    <?= $form->field($model, 'Nombres') ?>

    <?= $form->field($model, 'Fechanacimiento') ?>

    <?= $form->field($model, 'Sexo') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'Grado') ?>

    <?php // echo $form->field($model, 'Seccion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
