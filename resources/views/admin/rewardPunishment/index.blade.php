@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Tipe</h2>
                        </div>
                        <a href=""><button class="btn btn-primary">Tambah</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th colspan="3"></th>
                                </tr>
                                @foreach($tipe as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->tipe }}</td>
                                    <td><a href=""><button class="btn btn-info">Show</button></a></td>
                                    <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                                    <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
                                    <form method="post" action="{{ route('menu.admin.siswa.destroy',$data->id) }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>kode</h2>
                        </div>
                        <a href=""><button class="btn btn-primary">Tambah</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Tipe</th>
                                    <th>Nama</th>
                                    <th colspan="3"></th>
                                </tr>
                                @foreach($kode as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->tipe->tipe }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td><a href=""><button class="btn btn-info">Show</button></a></td>
                                    <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                                    <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
                                    <form method="post" action="{{ route('menu.admin.siswa.destroy',$data->id) }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Skor</h2>
                        </div>
                        <a href=""><button class="btn btn-primary">Tambah</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th colspan="3"></th>
                                </tr>
                                @foreach($skor as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->kode->kode }}</td>
                                    <td>{{ $data->skor }}</td>
                                    <td><a href=""><button class="btn btn-info">Show</button></a></td>
                                    <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                                    <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
                                    <form method="post" action="{{ route('menu.admin.siswa.destroy',$data->id) }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </tr>
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
