<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_razonsocial')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'domicilio_fiscal')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'rif')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telefono1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telefono2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telefono3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'nombre_encargado')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telefono_encargado')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'otro')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>