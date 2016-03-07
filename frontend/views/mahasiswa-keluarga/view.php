<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaKeluarga */

$this->title = $model->seq;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Keluargas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-keluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->seq], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->seq], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'seq',
            'nim',
            'keluarga_nama',
            'keluarga_hubungan',
            'keluarga_tgl_lahir',
            'keluarga_hidup_status',
            'keluarga_alamat',
            'keluarga_telp_rumah',
            'keluarga_telp_hp',
            'keluarga_pekerjaan',
            'keluarga_agama',
            'keluarga_gereja',
        ],
    ]) ?>

</div>
