<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPelayanan */

$this->title = Yii::t('app', 'Create Mahasiswa Pelayanan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Pelayanans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pelayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
