@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>Guru</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>User Id</th>
                            <th>Nama</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                        @foreach($guru as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->nama ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->mata_pelajaran ?? 'Belum Diisi' }}</td>
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


@endsection
