<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaKeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Keluargas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Keluarga'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'keluarga_nama',
            'keluarga_hubungan',
            'keluarga_tgl_lahir',
            // 'keluarga_hidup_status',
            // 'keluarga_alamat',
            // 'keluarga_telp_rumah',
            // 'keluarga_telp_hp',
            // 'keluarga_pekerjaan',
            // 'keluarga_agama',
            // 'keluarga_gereja',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
