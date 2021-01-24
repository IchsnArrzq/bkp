@extends('layouts.app')

@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Rapot Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menu.guru.rapotSiswaStore') }}" method="post">
                            @csrf
                            @include('guru.partials.rapotSiswa')
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Siswa</th>
                                    <th>Guru</th>
                                    <th>Nilai</th>
                                    <th>Kkm</th>
                                </thead>
                                @foreach($rapot as $data)
                                <tbody>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->siswa->nama }}</td>
                                    <td>{{ $data->guru->mata_pelajaran }}</td>
                                    <td>{{ $data->nilai }}</td>
                                    <td>{{ $data->kkm }}</td>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
