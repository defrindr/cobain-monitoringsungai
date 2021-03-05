@extends('dashboard.layouts.app')

@php
    $routeReadable = Str::title(implode(' ',explode('-',$route)));
@endphp

@section('title', 'Master '. $routeReadable)

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" crossorigin="">
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js" crossorigin=""></script>
<style>
    .col-centered{
        margin: 0 auto;
        float: none;
    }
</style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <h4 class="card-title">Detail {{ $routeReadable }}</h4>
                </div>
            </div>
            <div class="card-body">
                <div id="mapid"></div>
            </div>

            <div class="card-footer">
                <a href="{{ route("$route.index") }}" class="btn btn-default">{{ __('Cancel') }}</a>
                <a href="{{ route("$route.edit",$model) }}" class="btn btn-primary">{{ __('Edit') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    let setup = async() => {
        var cctvict = L.icon({
            iconUrl: '{{ asset("assets/img/cctv.svg") }}',
            iconSize: [50, 50]
        });
		var mymap = L.map('mapid').setView([-8.0735,111.9164], 12);

		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiZGVmcmluZHIiLCJhIjoiY2s4ZTN5ZjM0MDFrNzNsdG1tNXk2M2dlMSJ9.YXJM0PTu8PSsCCtYVjJNmw'
        }).addTo(mymap);

        L.marker([<?= $model->latitude ?>, <?= $model->longitude ?>], {icon: cctvict}).addTo(mymap);
    }
	let main = async() => {
		await setup();
	}

	main();
</script>
@endsection
