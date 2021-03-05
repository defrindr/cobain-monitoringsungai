@extends('blog.layout')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
<style>
    #jarakAirDariSensor, #mapid, #grafikAir, #weather, #grafikBaterai { height: 220px;width: 100%;display:block;margin: auto; overflow: hidden }
    .col-centered{
        margin: 0 auto;
        float: none;
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body text-center">
                    <h1>Realtime Monitoring Sungai XXX</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-2  mt-1">
            <div class="box">
                <div class="box-body">
                    <h3 style="text-align:center;padding: 5px 5px 10px;color: white">Ketinggian Sungai</h3>
                    <div id="meter"></div>
                    <h4 style="text-align:center;padding: 5px 5px 10px;color: white">20 / 100</h4>
                </div>
            </div>
        </div>
        <div class="col-md-7  mt-1">
            <div class="box">
                <div class="box-body">
                    <canvas id="grafikAir"></canvas>
                </div>
            </div>

        </div>
        <div class="col-md-3 mt-1">
            <div class="box">
                <div class="box-body">
                    <div id="mapid"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="box mt-1">
                <div class="box-body">
                    <a id="weather" class="weatherwidget-io" href="https://forecast7.com/en/n0d79113d92/indonesia/" data-label_1="INDONESIA" data-label_2="WEATHER" data-days="3" data-theme="original" data-basecolor="rgba(31, 86, 124, 0)" data-lowcolor="#fff994" data-cloudfill="#9f222e" data-raincolor="#f8ff94" >INDONESIA WEATHER</a>
                    <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
                </div>
            </div>
        </div>
        <div class="col-md-2  mt-1">
            <div class="box">
                <div class="box-body">
                    <canvas id="jarakAirDariSensor"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-2  mt-1">
            <div class="box">
                <div class="box-body">
                    
                    <h3 style="text-align:center;padding: 5px 5px 10px;color: white">Ketinggian Sungai</h3>
                    <div id="meter2"></div>
                    <h4 style="text-align:center;padding: 5px 5px 10px;color: white">45 / 70</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-body">
                    <canvas id="grafikBaterai"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    var barChart = document.getElementById('grafikAir').getContext('2d');
    Chart.defaults.global.defaultFontColor = 'white';
    var myBarChart = new Chart(barChart, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Trend Level Sungai",
                backgroundColor: 'rgb(255, 255, 255, 0)',
                borderColor: 'rgb(255, 140, 140)',
                data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                labels: {
                    fontColor: "white"
                }
            }
        }
    });
    var barChart = document.getElementById('grafikBaterai').getContext('2d');
    Chart.defaults.global.defaultFontColor = 'white';
    var myBarChart = new Chart(barChart, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Trend Voltase Baterai",
                backgroundColor: 'rgb(255, 255, 255, 0)',
                borderColor: 'rgb(255, 255, 255)',
                data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                labels: {
                    fontColor: "white"
                }
            }
        }
    });
    var jarakAirDariSensor = document.getElementById('jarakAirDariSensor').getContext('2d');
    var myChart = new Chart(jarakAirDariSensor, {
        type: "doughnut",
        data: {
            labels: ["Jarak Air Dari Sensor"],
            datasets: [
            {
                label: ["# of Votes"],
                data: [45, 55],
                backgroundColor: ["rgba(255, 99, 132, 0.2)"],
                borderColor: ["rgba(255,99,132,1)"],
                borderWidth: 1
            }
            ]
        },
        options: {
            legend: {
                hidden: true
            },
            maintainAspectRatio: false,
            circumference: Math.PI + 1,
            rotation: -Math.PI - 0.5,
            cutoutPercentage: 20,

            onClick(...args) {
            console.log(args);
            }
        }
        });


    let setup = async () => {
        var mymap = L.map('mapid').setView([-8.0735, 111.9164], 12);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiZGVmcmluZHIiLCJhIjoiY2s4ZTN5ZjM0MDFrNzNsdG1tNXk2M2dlMSJ9.YXJM0PTu8PSsCCtYVjJNmw'
        }).addTo(mymap);

        L.marker([{!! $model->latitude !!},{!! $model->longitude!!}]).addTo(mymap);
    }
    
    let main = async () => {
        await setup();
    }

    main();

    let meter = document.querySelector("#meter");

    meter.setAttribute("style", "display:block;width: 65%; height: 160px;margin: auto;border: 1px solid #fff;border-radius:5%;padding: 10px");
    meter.innerHTML += `
    <div style="display: flex;flex-direction: column;height:100%;align-self:end;align-content:flex-end">
        <div style="display: block;background: transparent;width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: transparent;width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: transparent;width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
    </div>`;
    
    meter = document.querySelector("#meter2");

    meter.setAttribute("style", "display:block;width: 65%; height: 160px;margin: auto;border: 1px solid #fff;border-radius:5%;padding: 10px");
    meter.innerHTML += `
    <div style="display: flex;flex-direction: column;height:100%;align-self:end;align-content:flex-end">
        <div style="display: block;background: transparent;width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
        <div style="display: block;background: rgba(255, 255, 255, .3);width: 100%;height: 10px; flex-grow: 1;flex:1"></div>
    </div>`;

</script>
@endsection
