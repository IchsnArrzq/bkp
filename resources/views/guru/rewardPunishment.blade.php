@extends('layouts.app')
@section('content')
@include('layouts.alert')
<script src="{{ asset('jquery.js') }}"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('menu.guru.rewardPunishmentStore') }}">
                            @csrf
                            @include('guru.partials.rewardPunishment')
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
                                    <th>Tipe</th>
                                    <th>Kode</th>
                                    <th>Skor</th>
                                </thead>
                                @foreach($skor as $data)
                                <tbody>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->kode->tipe->tipe }}</td>
                                    <td>{{ $data->kode->kode }}</td>
                                    <td>{{ $data->skor }}</td>
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
