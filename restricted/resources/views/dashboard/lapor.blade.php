@extends('dashboard.layouts.app')

@section('title', 'Laporan Warga')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <h4 class="card-title">Daftar Laporan Warga</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table-warga" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat</th>
                                <th>Foto</th>
                                <th>Kategori Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Azis</td>
                                <td>Lorem Ipsum</td>
                                <td>lorem.jpg</td>
                                <td>Kecelakaan</td>
                            </tr>
                            <tr>
                                <td>Azis</td>
                                <td>Lorem Ipsum</td>
                                <td>lorem.jpg</td>
                                <td>Kecelakaan</td>
                            </tr>
                            <tr>
                                <td>Azis</td>
                                <td>Lorem Ipsum</td>
                                <td>lorem.jpg</td>
                                <td>Kecelakaan</td>
                            </tr>
                            <tr>
                                <td>Azis</td>
                                <td>Lorem Ipsum</td>
                                <td>lorem.jpg</td>
                                <td>Kecelakaan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection