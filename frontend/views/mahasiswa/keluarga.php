<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Keluarga Mahasiswa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa'), 'url' => ['mahasiswa/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['sidenav_heading'] = $mahasiswa->nama;
$this->params['sidenav_items'] = $sidebar;
?>
<div class="mahasiswa-index">
     <h1><?= Html::encode($this->title) ?></h1>
    
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
                                    return ($model->keluarga_agama ? $model::getAgama()[$model->keluarga_agama] : NULL);
                                },
                            ],
                            'keluarga_gereja',

                             [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{delete}',
                                'controller' => 'mahasiswa-keluarga',
                            ],
                        ],
                         'afterRow' => function($model, $key, $index) {
                            return Html::tag('tr',
                                Html::tag('td', '')
                                .Html::tag('td', '<b style="color:#337ab7">' . Yii::t('app', 'Keterangan: ') . '</b>' . $model->keluarga_keterangan, ['colspan'=>'9'])
                                //add more columns
                            );
                        }
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
