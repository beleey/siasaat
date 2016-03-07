<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPekerjaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-pekerjaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan_tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan_tahun_masuk')->textInput() ?>

    <?= $form->field($model, 'pekerjaan_tahun_keluar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
