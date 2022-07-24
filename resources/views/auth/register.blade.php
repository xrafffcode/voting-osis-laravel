@extends('admin.layouts.master')

@section('title', 'Tambah Pemilih')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section id="basic-vertical-layouts">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Masukan Data Pemilih</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-ketua">{{ __('Nama') }}</label>
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-wakil">{{ __('Nis') }}</label>
                                        <input id="nis" type="text"
                                            class="form-control @error('nis') is-invalid @enderror" name="nis"
                                            value="{{ old('nis') }}" required autocomplete="nis">

                                        @error('nis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto-calon">{{ __('Kelas') }}</label>
                                        <select class="form-select" name="kelas">
                                            @foreach ($kelas as $kelas)
                                                <option value="{{ $kelas->kelas }}">{{ $kelas->kelas }}</option>
                                            @endforeach

                                        </select>
                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="visi">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="misi">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            {{ __('Register') }}
                                        </button>

                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1"
                                            required>Reset</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
