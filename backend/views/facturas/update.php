<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */

$this->title = 'Update Facturas: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'clientes_id' => $model->clientes_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="facturas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>