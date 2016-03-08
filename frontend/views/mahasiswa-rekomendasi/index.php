<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaRekomendasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Rekomendasis');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-rekomendasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Rekomendasi'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'rekomendasi_nama',
            'rekomendasi_jabatan',
            'rekomendasi_alamat',
            // 'rekomendasi_kota',
            // 'rekomendasi_kodepos',
            // 'rekomendasi_telp_rumah',
            // 'rekomendasi_telp_hp',
            // 'rekomendasi_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
