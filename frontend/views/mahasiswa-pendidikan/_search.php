<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPendidikanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-pendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'pendidikan_tingkat') ?>

    <?= $form->field($model, 'pendidikan_nama') ?>

    <?= $form->field($model, 'pendidikan_tahun_masuk') ?>

    <?php // echo $form->field($model, 'pendidikan_tahun_lulus') ?>

    <?php // echo $form->field($model, 'pendidikan_gelar') ?>

    <?php // echo $form->field($model, 'pendidikan_kota') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
