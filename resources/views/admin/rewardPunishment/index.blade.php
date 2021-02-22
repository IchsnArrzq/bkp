@extends('layouts.app')

@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="{{ route('menu.admin.kode.store') }}" method="post">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>kode</h2>
                            </div>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tipe</label>
                                        <select name="tipe_id" id="tipe_id" class="form-control">
                                            <option value="">--Pilih--</option>
                                            @foreach($tipe as $data)
                                            <option value="{{ $data->id }}">{{ $data->tipe }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kode</label>
                                        <input type="text" class="form-control" name="kode">
                                    </div>
                                </div>
                            </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Tipe</th>
                                <th>Nama</th>
                                <th>action</th>
                            </tr>

                            @foreach($kode as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->tipe->tipe }}</td>
                                <td>{{ $data->kode }}</td>
                                <td><button onclick="kodeDelete()" type="button" class="btn btn-danger">Delete</button></td>
                                <form method="post" id="kodeDelete" action="{{ route('menu.admin.kode.destroy',$data->id) }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </table>
                        <script>
                            function kodeDelete() {
                                if(confirm('ini akan menghapus table table yang berkaitan')){
                                    document.getElementById('kodeDelete').submit()
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('menu.admin.skor.store') }}" method="post">
                        <div class="card-title">
                            <h2>Skor</h2>
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label for="">Tipe</label>
                                <select name="kode_id" id="kode_id" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach($kode as $data)
                                    <option value="{{ $data->id }}">{{ $data->kode }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Skor</label>
                                <input type="text" class="form-control" name="skor">
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>action</th>
                            </tr>
                            @foreach($skor as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->kode->kode }}</td>
                                <td>{{ $data->skor }}</td>
                                <td><button onclick="skor()" class="btn btn-danger">Delete</button></td>
                                <form method="post" id="skorDelete" action="{{ route('menu.admin.skor.destroy',$data->id) }}">
                                    @csrf
                                    @method('delete')
                                </form>
                                <script>
                                    function skor() {
                                        if (confirm('ingin menghapus row ini?')) {
                                            event.preventDefault();
                                            document.getElementById('skorDelete').submit();
                                        }
                                    }
                                </script>
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
