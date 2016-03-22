<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRohani */

$this->title = $model->seq;
?>
<div class="mahasiswa-rohani-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'kesaksian_pertobatan:ntext',
            'kesaksian_panggilan:ntext',
            'kehidupan_rohani:ntext',
        ],
    ]) ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['//mahasiswa/rohani', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>


</div>
