<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="mahasiswa-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama',
            'panggilan',
            'gender',
            'tempat_lahir',
            'tgl_lahir',
            'gol_darah',
            'alamat',
            'kota',
            'kode_pos',
            'telp_rumah',
            'telp_hp',
            'email:email',
            'bangsa',
            'tahun_angkatan',
            'create_date',
        ],
    ]) ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
