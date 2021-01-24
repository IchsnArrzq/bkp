@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h2>{{ __('Dashboard') }} {{ Auth::user()->role }}</h2>
                    </div>
                </div>

                <div class="card-body">
                    <hr>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4>Halo {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
