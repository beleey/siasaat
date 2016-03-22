<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
$this->params['sidenav_items'][] = [
        'url' => ['mahasiswa/index'],
        'label' => Yii::t('app', 'Daftar Mahasiswa'),
        'icon' => 'user'
    ];
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <!--  <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
             [        
                'attribute' => 'gender',
                'value' => function ($model) {
                    return $model::getGender()[$model->gender] ;
                },
            ],
            'tahun_angkatan',
            // 'create_date',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ],
            [
                'class' => \microinginer\dropDownActionColumn\DropDownActionColumn::className(),
                'items' => [
                   [
                        'label' => 'Data Diri Tambahan',
                        'url'   => ['tambahan'],
                    ],
                    [
                        'label' => 'Data Diri Tambahan',
                        'url'   => ['tambahan'],
                    ],
                     [
                        'label' => 'Kehidupan Rohani & Kesaksian',
                        'url'   => ['rohani'],
                    ],
                    [
                        'label' => 'Pendidikan',
                        'url'   => ['pendidikan'],
                    ],
                    [
                        'label' => 'Pekerjaan',
                        'url'   => ['pekerjaan'],
                    ],
                    [
                        'label' => 'Keluarga',
                        'url'   => ['keluarga'],
                    ],
                    [
                        'label' => 'Kesehatan',
                        'url'   => ['penyakit'],
                    ],
                    [
                        'label' => 'Pengalaman Pelayanan',
                        'url'   => ['pelayanan'],
                    ],
                    [
                        'label' => 'Rekomendasi',
                        'url'   => ['rekomendasi'],
                    ],
                    [
                        'label' => 'Hasil Tes & Wawancara',
                        'url'   => ['hasiltest'],
                    ],
                    [
                        'label' => 'Catatan Khusus',
                        'url'   => ['rekomendasi-konselor'],
                    ],
                ]
            ],
        ],
    ]); ?>
</div>
