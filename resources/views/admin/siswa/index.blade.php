@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>Siswa</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>User Id</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Rombel</th>
                            <th>Rayon</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th colspan="3"></th>
                        </tr>
                        @foreach($siswa as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->rombel }}</td>
                            <td>{{ $data->rayon }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telepon }}</td>
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


@endsection
