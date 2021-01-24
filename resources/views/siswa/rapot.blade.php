@extends('layouts.app')
@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rapot Nilai</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 pr-1">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Kriteria Ketuntasan Minimal</th>
                                </thead>
                                <tbody>
                                    @foreach($rapot as $data)
                                    <td>{{ $data->id }}</td>
                                    <th>{{ $data->guru->nama }}</th>
                                    <th>{{ $data->guru->mata_pelajaran }}</th>
                                    <th>{{ $data->nilai }}</th>
                                    <th>{{ $data->kkm }}</th>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
