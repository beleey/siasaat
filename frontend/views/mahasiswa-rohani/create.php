<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRohani */

$this->title = Yii::t('app', 'Create Mahasiswa Rohani');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Rohanis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-rohani-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
