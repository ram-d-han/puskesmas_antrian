<?php
use dosamigos\chartjs\ChartJs;

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>

<div class="site-index">

    <div class="jumbotron d-flex">
        <div class="card mx-2 w-50 text-center">
            <p class="font-weight-bold">Total Antrian Loket</p>
            <h2><?= $antrianLoket ?> Antrian</h2>
        </div>
        <div class="card mx-2 w-50 text-center">
            <p class="font-weight-bold">Antrian Poli</p>
            <h2><?= $antrianPoli ?> Antrian</h2>
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3" style="margin-left: 3%">
                <h2>Resume Data</h2>

                <p>Total Admin</p>
                <h2><?= $AdminCount ?></h2>
                <p>Total Pasien</p>
                <h2><?= $PasienCount ?></h2>
                <p>Total Poli</p>
                <h2><?= $PoliCount ?></h2>

            </div>

            <div class="col-lg-8">
                <?= ChartJs::widget([
                    'type' => 'line',
                    'options' => [
                        'height' => 240,
                        'width' => 460
                    ],
                    'data' => [
                        'labels' => ["Umum", "Gigi", "Tb Kusta", "Kandungan", "KB", "MTBS", "Jiwa", "Lansia", "Imunisasi", "Laboratorium", "Pojok Gizi", "K. Sanitasi"],
                        'datasets' => [
                            [
                                'label' => "Pasien Masuk",
                                'backgroundColor' => "rgba(132,99,255,0.2)",
                                'borderColor' => "rgba(132,99,255,1)",
                                'pointBackgroundColor' => "rgba(179,181,198,1)",
                                'pointBorderColor' => "#fff",
                                'pointHoverBackgroundColor' => "#fff",
                                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                                'data' => [
                                    $antrian['poli_umum'],
                                    $antrian['poli_gigi'],
                                    $antrian['poli_tb_kusta'],
                                    $antrian['poli_kandungan'],
                                    $antrian['poli_kb'],
                                    $antrian['poli_mtbs'],
                                    $antrian['poli_jiwa'],
                                    $antrian['poli_lansia'],
                                    $antrian['imunisasi'],
                                    $antrian['laboratorium'],
                                    $antrian['pojok_gizi'],
                                    $antrian['klinik_sanitasi'],
                                ]
                            ],
                        ]
                    ],
                ]); ?>
            </div>

        </div>

    </div>
</div>
