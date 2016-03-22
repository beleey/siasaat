<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin([
                'options' => ['enctype'=>'multipart/form-data']
            ]); ?>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'panggilan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gender')->dropDownList($model::getGender(),['prompt' => '--' . Yii::t('app', 'Pilih Jenis Kelamin') . '--']); ?> 
        </div>
        <div class="col-sm-4">
            <!--<?= Html::img('@web/../images/default_user.png');?>-->
             <?= $form->field($model, 'image_file')->fileInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= 
                DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'tgl_lahir',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'form' => $form,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ]
                ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'alamat')->textArea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'telp_rumah')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'telp_hp')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'gol_darah')->radioList(['A' => 'A', 'B' => 'B','AB' => 'AB', 'O' => 'O']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'bangsa')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'tahun_angkatan')->textInput() ?>
        </div>
    </div> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
