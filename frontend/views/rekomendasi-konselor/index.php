<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaRekomendasiKonselorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-rekomendasi-konselor-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'rekomendasi',
                'format' => 'html',
            ],
        ],
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['mahasiswa/rekomendasi-konselor', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
