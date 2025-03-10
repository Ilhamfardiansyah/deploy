@extends('layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <figure class="highcharts-figure">
                        <div id="container" style="width: 100%; height: 400px;"></div>
                        <p class="highcharts-description">

                        </p>
                    </figure>
                </div>

                <script>
                    // Ambil data dari controller
                    const dataFromBackend = @json($totalAhli);

                    // Mapping data untuk Highcharts
                    const chartData = dataFromBackend.map(item => ({
                        name: item.ahli_ditunjuk,
                        y: item.total
                    }));

                    // Inisialisasi Highcharts
                    Highcharts.chart('container', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Statistik Ahli Yang Ditunjuk'
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: 'Total jumlah penunjukan'
                            }
                        },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y}'
                                }
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
                        },
                        series: [{
                            name: 'Ahli Ditunjuk',
                            colorByPoint: true,
                            data: chartData
                        }]
                    });
                </script>

                <div class="d-flex justify-content-center align-items-center">
                    <a class="btn btn-primary" href="{{ route('tabulasi') }}">Tabulasi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
