<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-pelayanan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pelayanan_bidang',
            'pelayanan_posisi',
            'pelayanan_tahun_awal',
            'pelayanan_tahun_akhir',
        ],
    ]); ?>

</div>
