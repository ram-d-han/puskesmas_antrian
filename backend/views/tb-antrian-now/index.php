<?php

/* @var $this yii\web\View */

$this->title = 'Daftar Antrian Sekarang';
?>

<style type="text/css">
    .col-lg-3 {
        background-color: lightgrey;
        margin: 2% 4%;
        height: 250px;
        padding: 1rem 2rem;
    }
    .antrian {
        font-size: 110px !important;
        font-weight: bold;
    }
</style>

<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli Umum</p>

                <p class="antrian"><?= $antrian['poli_umum'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli Gigi</p>

                <p class="antrian"><?= $antrian['poli_gigi'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli TB Kusta</p>

                <p class="antrian"><?= $antrian['poli_tb_kusta'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Kandungan</p>

                <p class="antrian"><?= $antrian['poli_kandungan'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli KB</p>

                <p class="antrian"><?= $antrian['poli_kb'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli MTBS</p>

                <p class="antrian"><?= $antrian['poli_mtbs'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli Jiwa</p>

                <p class="antrian"><?= $antrian['poli_jiwa'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Poli Lansia</p>

                <p class="antrian"><?= $antrian['poli_lansia'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-3">Imunisasi</p>

                <p class="antrian"><?= $antrian['imunisasi'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-4">Laboratorium</p>

                <p class="antrian"><?= $antrian['laboratorium'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-4">Pojok Gizi</p>

                <p class="antrian"><?= $antrian['pojok_gizi'] ?></p>
            </div>
            <div class="col-lg-3 text-center text-dark">
                <p class="display-4">Klinik Sanitasi</p>

                <p class="antrian"><?= $antrian['klinik_sanitasi'] ?></p>
            </div>
            
        </div>

    </div>
</div>
