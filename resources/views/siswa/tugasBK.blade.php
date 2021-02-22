@extends('layouts.app')

@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nilai Yang Belum Kompoten</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped border">
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Kriteria Ketuntasan Minimal</th>
                                </tr>
                                <tr>
                                    @foreach($rapot as $data)
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->guru->nama }}</td>
                                    <td>{{ $data->guru->mata_pelajaran }}</td>
                                    <td>{{ $data->nilai }}</td>
                                    <td><h2><span class="badge badge-secondary">{{ $data->kkm }}</span></h2></td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tugas Belum Kompoten</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped border">
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Kriteria Ketuntasan Minimal</th>
                                    <th>File</th>
                                </tr>
                                <tr>
                                    @foreach($tugas as $data)
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->guru->nama }}</td>
                                    <td>{{ $data->guru->mata_pelajaran }}</td>
                                    <td>{{ $data->tugas }}</td>
                                    <td>{{ $data->kkm }}</td>
                                    <td><a target="_BLANK" href="{{ asset('folderTugas/'.$data->file) }}"><button class="btn btn-primary">File</button></a></td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
