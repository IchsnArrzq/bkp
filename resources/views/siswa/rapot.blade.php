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
                    <div class="col-md-6 pr-1">
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
                                    <td>{{ $data->kkm }}</td>
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
