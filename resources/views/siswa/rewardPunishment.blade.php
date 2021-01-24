@extends('layouts.app')
@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Reward & Punishment</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 pr-1">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>Guru ID</th>
                                    <th>Kode</th>
                                    <th>Tipe</th>
                                    <th>Sekor</th>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($sikap as $data)
                                <tbody>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->siswa->nama }}</td>
                                    <td>
                                        <ul>
                                            <li>{{ $data->guru_id }}</li>
                                            <li>{{ $data->guru->nama }}</li>
                                        </ul>
                                    </td>
                                    <td>{{ $data->kode->kode }}</td>
                                    <td>{{ $data->tipe->tipe }}</td>
                                    <td>{{ $data->skor->skor }}</td>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{ $sikap->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
