@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="fs-1 text-center mt-5">Selamat Datang Pengguna!</p>
                <div class="card">
                    <div class="card-header">{{ __('Login Dashboard') }}</div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Kamu Berhasil Masuk!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
