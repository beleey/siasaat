<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Penyakits');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Penyakit'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'penyakit_nama',
            'penyakit_keterangan',
            'penyakit_tahun',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
