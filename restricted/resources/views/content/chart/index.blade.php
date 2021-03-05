@extends('dashboard.layouts.app')
@section('title', "Database" )

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row d-block">
                    <h4 class="card-title d-xs-block d-md-contents">List Database Penduduk</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <canvas id="chart-last-education" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-4">
                        <canvas id="chart-agama" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-4">
                        <canvas id="chart-job" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-4">
                        <canvas id="chart-sex" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>

    $(document).ready(function(){
        $.ajax({
                url: "<?= route('api.chart.penduduk-pendidikan-terakhir') ?>",
                method: "GET",
                success: function(data) {
                    
                    var dynamicColors = function() {
                        var r = Math.floor(Math.random() * 255);
                        var g = Math.floor(Math.random() * 255);
                        var b = Math.floor(Math.random() * 255);
                        return "rgb(" + r + "," + g + "," + b + ")";
                    };

                    let last_education = data.data.last_education;
                    let job = data.data.job;
                    let agama = data.data.agama;
                    let sex = data.data.sex;
                    let last_education_color = [];
                    let job_color = [];
                    let agama_color = [];
                    let sex_color = [];
                    for (var i in last_education.keys) {
                        last_education_color.push(dynamicColors());
                    }
                    for (var i in job.keys) {
                        job_color.push(dynamicColors());
                    }
                    for (var i in sex.keys) {
                        sex_color.push(dynamicColors());
                    }
                    for (var i in agama.keys) {
                        agama_color.push(dynamicColors());
                    }
                    
                    var ctx_last_education = document.getElementById('chart-last-education').getContext('2d');
                    var ctx_job = document.getElementById('chart-job').getContext('2d');
                    var ctx_agama = document.getElementById('chart-agama').getContext('2d');
                    var ctx_sex = document.getElementById('chart-sex').getContext('2d');
                    var chart_last_education = new Chart(ctx_last_education, {
                        type: 'bar',
                        data: {
                            labels: last_education.keys,
                            datasets: [{
                                label: 'Diagram Pendidikan Penduduk',
                                backgroundColor: last_education_color,
                                borderColor: 'rgb(255, 255, 255)',
                                data: last_education.values
                            }]
                        },
                        options: {}
                    });
                    var chart_job = new Chart(ctx_job, {
                        type: 'bar',
                        data: {
                            labels: job.keys,
                            datasets: [{
                                label: 'Pekerjaan',
                                backgroundColor: job_color,
                                borderColor: 'rgb(255, 255, 255)',
                                data: job.values
                            }]
                        },
                        options: {}
                    });
                    var chart_agama = new Chart(ctx_agama, {
                        type: 'doughnut',
                        data: {
                            labels: agama.keys,
                            datasets: [{
                                label: 'Agama',
                                backgroundColor: agama_color,
                                borderColor: 'rgb(255, 255, 255)',
                                data: agama.values
                            }]
                        },
                        options: {}
                    });
                    var chart_sex = new Chart(ctx_sex, {
                        type: 'pie',
                        data: {
                            labels: sex.keys,
                            datasets: [{
                                label: 'Jenis Kelamin',
                                backgroundColor: sex_color,
                                borderColor: 'rgb(255, 255, 255)',
                                data: sex.values
                            }]
                        },
                        options: {}
                    });
                }
            });
    });
</script>
@endsection
