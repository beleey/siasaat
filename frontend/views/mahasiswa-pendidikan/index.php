<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Pendidikans');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Pendidikan'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'pendidikan_tingkat',
            'pendidikan_nama',
            'pendidikan_tahun_masuk',
            // 'pendidikan_tahun_lulus',
            // 'pendidikan_gelar',
            // 'pendidikan_kota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
