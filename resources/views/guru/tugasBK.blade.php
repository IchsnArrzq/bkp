@extends('layouts.app')

@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>Id</th>
                                    <th>Guru</th>
                                    <th>KKM</th>
                                    <th>Deadline</th>
                                    <th>Tugas</th>
                                    <th>File</th>
                                </tr>
                                @foreach($tugas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->guru->nama }}</td>
                                    <td>{{ $data->kkm }}</td>
                                    <td>{{ $data->deadline }}</td>
                                    <td>{{ $data->tugas }}</td>
                                    <td><a href="{{ asset('folderTugas/'.$data->file) }}" target="_BLANK"><button class="btn btn-success">File</button></a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('menu.guru.tugasBKStore') }}">
                            @csrf
                            @include('guru.partials.tugasBK')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
