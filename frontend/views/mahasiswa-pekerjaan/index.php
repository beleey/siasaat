<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Pekerjaans');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pekerjaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Pekerjaan'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'pekerjaan_tempat',
            'pekerjaan_jabatan',
            'pekerjaan_tahun_masuk',
            // 'pekerjaan_tahun_keluar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
