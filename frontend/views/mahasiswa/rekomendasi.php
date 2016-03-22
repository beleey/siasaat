<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rekomendasi');
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
        <div class="panel-heading"><?= Yii::t('app', 'Rekomendasi') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
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
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{delete}',
                                'controller' => 'mahasiswa-rekomendasi',
                            ],
                        ],
                        'afterRow' => function($model, $key, $index) {
                            return Html::tag('tr',
                                Html::tag('td', '')
                                .Html::tag('td', '<b>' . Yii::t('app', 'Rekomendasi: ') . '</b>' . $model->rekomendasi_isi, ['colspan'=>'9'])
                                //add more columns
                            );
                        }
                    ]); ?>
                </div>                
            </div>
        </div>
    </div>
   <div class="panel panel-success">
        <div class="panel-heading"><?= Yii::t('app', 'Tambah Rekomendasi') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= $this->render('//mahasiswa-rekomendasi/_form', [
                        'model' => $modelRekomendasi,
                        'nim' => $mahasiswa->nim,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
