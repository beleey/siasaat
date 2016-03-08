<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaHasiltestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="mahasiswa-hasiltest-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           [        
                                'attribute' => 'nama_test',
                                'value' => function ($model) {
                                    return $model::getJenistes()[$model->nama_test] ;
                                },
                            ],
            [
                'attribute' => 'hasil',
                'format' => 'html',
            ],

        ],
    ]); ?>

</div>
