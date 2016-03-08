<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaRekomendasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-rekomendasi-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rekomendasi_nama',
            [        
                'attribute' => 'rekomendasi_jabatan',
                'value' => function ($model) {
                    return $model::getJabatan()[$model->rekomendasi_jabatan] ;
                },
            ],
            'rekomendasi_alamat',
            'rekomendasi_kota',
            'rekomendasi_kodepos',
            'rekomendasi_telp_rumah',
            'rekomendasi_telp_hp',
            'rekomendasi_email:email',
        ],
    ]); ?>

</div>
