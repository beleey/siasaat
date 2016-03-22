<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = $model->nama . " (" . $model->nim . ")";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['sidenav_items'][] = [
        'url' => ['mahasiswa/index'],
        'label' => Yii::t('app', 'Daftar Mahasiswa'),
        'icon' => 'user'
    ];
?>
<div class="mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= TabsX::widget([
           'position'=>TabsX::POS_LEFT,
            'encodeLabels'=>false,
            'items' => [
                [
                    'label' => Yii::t('app', 'Data Diri'),
                    'content' => $this->render('view-data-diri', [
                        'model' => $model,
                    ]),
                    'active' => true
                ],
                [
                    'label' => Yii::t('app', 'Data Diri Tambahan'),
                    'content' => $this->render('//mahasiswa-tambahan/view', [
                        'model' => $modelTambahan,
                         'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Keh. Rohani & Kesaksian'),
                    'content' => $this->render('//mahasiswa-rohani/view', [
                        'model' => $modelRohani,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Pendidikan'),
                    'content' => $this->render('//mahasiswa-pendidikan/index', [
                        'dataProvider' => $dataProviderPendidikan,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Pekerjaan'),
                    'content' => $this->render('//mahasiswa-pekerjaan/index', [
                        'dataProvider' => $dataProviderPekerjaan,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Keluarga'),
                    'content' => $this->render('//mahasiswa-keluarga/index', [
                        'dataProvider' => $dataProviderKeluarga,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Kesehatan'),
                    'content' => $this->render('//mahasiswa-penyakit/index', [
                        'dataProvider' => $dataProviderPenyakit,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Pelayanan'),
                    'content' => $this->render('//mahasiswa-pelayanan/index', [
                        'dataProvider' => $dataProviderPelayanan,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Rekomendasi'),
                    'content' => $this->render('//mahasiswa-rekomendasi/index', [
                        'dataProvider' => $dataProviderRekomendasi,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Hasil Test'),
                    'content' => $this->render('//mahasiswa-hasiltest/index', [
                        'dataProvider' => $dataProviderHasiltest,
                        'nim' => $model->nim,
                    ]),
                ],
                [
                    'label' => Yii::t('app', 'Catatan Khusus'),
                    'content' => $this->render('//rekomendasi-konselor/index', [
                        'dataProvider' => $dataProviderKonselor,
                        'nim' => $model->nim,
                    ]),
                ],
            ],
        ]);
    ?>

    

</div>
