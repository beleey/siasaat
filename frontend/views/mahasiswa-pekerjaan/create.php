<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPekerjaan */

$this->title = Yii::t('app', 'Create Mahasiswa Pekerjaan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Pekerjaans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pekerjaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
