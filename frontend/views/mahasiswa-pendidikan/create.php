<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPendidikan */

$this->title = Yii::t('app', 'Create Mahasiswa Pendidikan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Pendidikans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
