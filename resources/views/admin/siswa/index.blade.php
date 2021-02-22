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
                            <th>Action</th>
                        </tr>
                        @foreach($siswa as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->nis ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->nama ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->rombel ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->rayon ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->alamat ?? 'Belum Diisi' }}</td>
                            <td>{{ $data->telepon ?? 'Belum Diisi' }}</td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <form method="post" action="{{ route('menu.admin.siswa.destroy',$data->id) }}">
                                @csrf
                                @method('delete')
                            </form>
                        </tr>
                        @endforeach
                        <script>
                                    
                        </script>
                    </table>
                </div>
                {{ $siswa->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
