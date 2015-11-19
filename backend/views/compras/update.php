<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */

$this->title = 'Modificar compra';
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'factura_id' => $model->factura_id, 'producto_id' => $model->producto_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
