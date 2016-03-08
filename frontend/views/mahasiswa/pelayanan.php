<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pengalaman Pelayanan Mahasiswa');
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
        <div class="panel-heading"><?= Yii::t('app', 'Pengalaman Pelayanan') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,

                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'pelayanan_bidang',
                            'pelayanan_posisi',
                            'pelayanan_tahun_awal',
                            'pelayanan_tahun_akhir',
                            // 'create_date',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{delete}',
                                'controller' => 'mahasiswa-pelayanan',
                            ],
                        ],
                    ]); ?>
                </div>                
            </div>
        </div>
    </div>
   <div class="panel panel-success">
        <div class="panel-heading"><?= Yii::t('app', 'Tambah Pengalaman') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= $this->render('//mahasiswa-pelayanan/_form', [
                        'model' => $modelPelayanan,
                        'nim' => $mahasiswa->nim,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
