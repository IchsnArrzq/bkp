@extends('layouts.app')
@section('content')
@include('layouts.alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('menu.admin.siswa.update',$siswa->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('siswa.partials.form')
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('fotoSiswa/'.$siswa->foto) }}" alt="...">
                                <h5 class="title">{{ Auth::user()->email }}</h5>
                            </a>
                            <p class="description">
                                {{ $siswa->nama }}
                            </p>
                        </div>
                        <p class="description text-center">
                            {{ $siswa->nis }} <br>
                            {{ $siswa->rombel }} <br>
                            {{ $siswa->rayon }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
