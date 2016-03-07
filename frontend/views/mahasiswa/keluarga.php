<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Keluarga Mahasiswa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa'), 'url' => ['mahasiswa/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    
    <div class="panel panel-success">
        <div class="panel-heading"><?= Yii::t('app', 'Mahasiswa') ?></div>
        <div class="panel-body">
             <div class="row">
                <div class="col-md-6 col-offset-6 centered">
                    <div class="spacer_small"><?= $mahasiswa->getAttributeLabel('nama'); ?></div>
                    <div class="field_view"><?= $mahasiswa->nama; ?></div>
                    <div class="spacer_small"><?= $mahasiswa->getAttributeLabel('nim'); ?></div>
                    <div class="field_view"><?= $mahasiswa->nim; ?></div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="panel panel-success">
        <div class="panel-heading"><?= Yii::t('app', 'Keluarga') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

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

                             [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{delete}',
                                'controller' => 'mahasiswa-keluarga',
                            ],
                        ],
                    ]); ?>
                </div>                
            </div>
        </div>
    </div>
   <div class="panel panel-success">
        <div class="panel-heading"><?= Yii::t('app', 'Tambah Keluarga') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= $this->render('//mahasiswa-keluarga/_form', [
                        'model' => $modelKeluarga,
                        'nim' => $mahasiswa->nim,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
