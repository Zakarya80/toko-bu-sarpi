<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiPenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'nama_pembeli') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'Penjual_id_penjual') ?>

    <?php // echo $form->field($model, 'Pasok_id_pasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>