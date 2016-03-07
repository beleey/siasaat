<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPendidikan */
/* @var $form yii\widgets\ActiveForm */

/* Ugly way to do it - temporary*/
?>

<div class="mahasiswa-pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
            <?= $form->field($model, 'pendidikan_tingkat')->dropDownList($model::getTingkatPendidikan(),['prompt' => '--' . Yii::t('app', 'Pilih Data') . '--']); ?>
            <?= $form->field($model, 'pendidikan_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'pendidikan_kota')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pendidikan_tahun_masuk')->textInput() ?>
            <?= $form->field($model, 'pendidikan_tahun_lulus')->textInput() ?>
            <?= $form->field($model, 'pendidikan_gelar')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
