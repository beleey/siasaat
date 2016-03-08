<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = $model->nama . " (" . $model->nim . ")";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama',
            'panggilan',
            'gender',
            'tempat_lahir',
            'tgl_lahir',
            'gol_darah',
            'alamat',
            'kota',
            'kode_pos',
            'telp_rumah',
            'telp_hp',
            'email:email',
            'bangsa',
            'tahun_angkatan',
            'create_date',
        ],
    ]) ?>

</div>
