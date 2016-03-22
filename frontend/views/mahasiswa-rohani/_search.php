<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRohaniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-rohani-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'kesaksian_pertobatan') ?>

    <?= $form->field($model, 'kesaksian_panggilan') ?>

    <?= $form->field($model, 'kehidupan_rohani') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
