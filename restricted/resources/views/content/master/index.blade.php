@extends('dashboard.layouts.app')

@php
    $routeReadable = Str::title(implode(' ',explode('-',$route)));
@endphp

@section('title', "Master ". $routeReadable )
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row d-block">
                    <h4 class="card-title d-xs-block d-md-contents">List {{ $routeReadable }}</h4>
                </div>
            </div>
            <div class="card-body">
                <x-alert/>
                <div class="table-responsive">
                    <table id="datatables" class="display table table-striped table-hover" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function () {
        var table = $('#datatables').DataTable({
            processing: true,
            responsive: true,
            pagingType: 'full_numbers',
            serverSide: true,
            ajax: {
                url: "{{ route("$route.index") }}",
                method: 'GET',
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'latitude', name: 'latitude'},
                {data: 'longitude', name: 'longitude'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
    });
</script>
@endsection
