<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRohani */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-rohani-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
    <?= $form->field($model, 'kesaksian_pertobatan')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'kehidupan_rohani')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'kesaksian_panggilan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Lengkapi Data') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
