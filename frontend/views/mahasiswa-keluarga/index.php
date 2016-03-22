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
                    return (isset($model->keluarga_hidup_status) ? $model::getStatusKeluarga()[$model->keluarga_hidup_status] : NULL);
                },
            ],
            'keluarga_alamat',
            'keluarga_telp_rumah',
            'keluarga_telp_hp',
            'keluarga_pekerjaan',
            [        
                'attribute' => 'keluarga_agama',
                'value' => function ($model) {
                    var_dump($model->keluarga_agama);
                    return ($model->keluarga_agama ? $model::getAgama()[$model->keluarga_agama] : NULL);
                },
            ],
            'keluarga_gereja',

        ],
        'afterRow' => function($model, $key, $index) {
            return Html::tag('tr',
                Html::tag('td', '')
                .Html::tag('td', '<b>' . Yii::t('app', 'Keterangan: ') . '</b>' . $model->keluarga_keterangan, ['colspan'=>'9'])
                //add more columns
            );
        }
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['mahasiswa/keluarga', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
