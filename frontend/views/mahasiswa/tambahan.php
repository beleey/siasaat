<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Diri Tambahan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa'), 'url' => ['mahasiswa/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['sidenav_heading'] = $mahasiswa->nama;
$this->params['sidenav_items'] = $sidebar;
?>
<div class="mahasiswa-index">
     <h1><?= Html::encode($this->title) ?></h1>
    <?php
        $request = Yii::$app->request;

         if ($request->get('save')) {
            Alert::begin([
                  'options' => [
                      'class' => 'alert-warning',
                  ],
              ]);
             
              echo "<b>" . Yii::t('app', 'Data telah tersimpan') . "</b>";
              Alert::end();   
         }
    ?>
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
        <div class="panel-heading"><?= Yii::t('app', 'Data Diri Tambahan') ?></div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <?= $this->render('//mahasiswa-tambahan/_form', [
                        'model' => $modelTambahan,
                        'nim' => $mahasiswa->nim,
                    ]) ?>
                </div>                
            </div>
        </div>
    </div>
    
</div>
