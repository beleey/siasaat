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
        'label' => 'Data Mahasiswa',
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
            'gender',
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
                        'label' => 'Pendidikan',
                        'url'   => ['pendidikan'],
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
                        'label' => 'Rekomendasi Kerabat',
                        'url'   => ['rekomendasi'],
                    ],
                    [
                        'label' => 'Hasil Tes & Wawancara',
                        'url'   => ['hasiltest'],
                    ],
                    [
                        'label' => 'Rekomendasi Konselor',
                        'url'   => ['rekomendasi-konselor'],
                    ],
                ]
            ],
        ],
    ]); ?>
</div>
