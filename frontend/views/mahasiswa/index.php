<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
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
                        'url'   => ['update'],
                    ],
                    [
                        'label' => 'Keluarga',
                        'url'   => ['update'],
                    ],
                    [
                        'label' => 'Kesehatan',
                        'url'   => ['update'],
                    ],
                    [
                        'label' => 'Rekomendasi',
                        'url'   => ['update'],
                    ],
                    [
                        'label' => 'Hasil Tes & Wawancara',
                        'url'   => ['update'],
                    ],
                    [
                        'label' => 'Rekomendasi Konselor',
                        'url'   => ['update'],
                    ],
                ]
            ],
        ],
    ]); ?>
</div>
