<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaPenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-penyakit-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penyakit_nama',
            'penyakit_keterangan',
            'penyakit_tahun',

        ],
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['mahasiswa/penyakit', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
