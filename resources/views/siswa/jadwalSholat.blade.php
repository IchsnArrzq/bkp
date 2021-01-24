@extends('layouts.app')
@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Jadwal Sholat</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 pr-1">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Nama</th>
                                    <th>Sholat</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                </thead>
                                @foreach($sholat as $data)
                                <tbody>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->user_id }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->sholat }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->waktu }}</td>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{ $sholat->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Jadwal Sholat</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('menu.siswa.sholatStore') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Company (disabled)</label>
                                <input type="text" class="form-control" value="{{ config('app.name','Laravel') }}" disabled="" placeholder="Company" value="Creative Code Inc.">
                            </div>
                        </div>
                        <div class="col-md-7 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" readonly class="form-control" value="{{ Auth::user()->email ?? '' }}" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Siswa ID</label>
                                <input type="text" readonly class="form-control" name="siswa_id" placeholder="siswa_id" value="{{ $siswa->user_id ?? old('nis') }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="datetime" readonly class="form-control" name="nama" placeholder="Nama" value="{{ $siswa->nama ?? old('nama')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Sholat</label>
                                <select name="sholat" class="form-control" id="sholat">
                                    <option value="subuh">Subuh</option>
                                    <option value="dzuhur">Dzuhur</option>
                                    <option value="ashar">Ashar</option>
                                    <option value="magrib">Magrib</option>
                                    <option value="isya">isya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="tanggal">
                            </div>
                        </div>

                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="waktu" placeholder="waktu">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
