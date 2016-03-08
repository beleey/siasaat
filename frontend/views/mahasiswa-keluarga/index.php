<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaKeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-keluarga-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'keluarga_nama',
            [        
                'attribute' => 'keluarga_hubungan',
                'value' => function ($model) {
                    return $model::getHubungan()[$model->keluarga_hubungan] ;
                },
            ],
            'keluarga_tgl_lahir',
            [        
                'attribute' => 'keluarga_hidup_status',
                'value' => function ($model) {
                    return $model::getStatusKeluarga()[$model->keluarga_hidup_status] ;
                },
            ],
            'keluarga_alamat',
            'keluarga_telp_rumah',
            'keluarga_telp_hp',
            'keluarga_pekerjaan',
             [        
                'attribute' => 'keluarga_agama',
                'value' => function ($model) {
                    return $model::getAgama()[$model->keluarga_agama] ;
                },
            ],
            'keluarga_gereja',

        ],
    ]); ?>

</div>
