<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-pendidikan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendidikan_tingkat',
            'pendidikan_nama',
            'pendidikan_tahun_masuk',
            'pendidikan_tahun_lulus',
            'pendidikan_gelar',
            'pendidikan_kota',
        ],
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['mahasiswa/pendidikan', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
