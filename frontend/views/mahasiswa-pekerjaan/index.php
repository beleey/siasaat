<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-pekerjaan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pekerjaan_tempat',
            'pekerjaan_jabatan',
            'pekerjaan_tahun_masuk',
            'pekerjaan_tahun_keluar',
        ],
    ]); ?>

</div>
