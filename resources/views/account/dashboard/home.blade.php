@extends('layouts.main')
@section('content')
    <section class="section dashboard">
        <div class="row">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Kasus Masuk<span> | Jumlah</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-align-bottom"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $dataKasus }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Belum Di Proses <span>| Jumlah</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $belumProses }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Revenue Card -->
                </div>
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Dalam Proses <span>| Jumlah</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $sedangProses }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Selesai <span>| Jumlah</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-check-double-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $selesai }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Revenue Card -->
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Website Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Traffic Persuratan</h5>
                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Total',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: {{ $sedangProses }},
                                                name: 'Dalam Proses'
                                            },
                                            {
                                                value: {{ $selesai }},
                                                name: 'Selesai'
                                            },
                                            {
                                                value: {{ $dataKasus }},
                                                name: 'Total Kasus'
                                            },
                                            {
                                                value: {{ $belumProses }},
                                                name: 'Belum Di Proses'
                                            },


                                        ]
                                    }]
                                });
                            });
                        </script>
                    </div>
                </div><!-- End Website Traffic -->
            </div><!-- End Right side columns -->

        </div>
    </section>
@endsection
