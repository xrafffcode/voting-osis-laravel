@extends('admin.layouts.master')
@section('title', 'Tambah Kandidat')
@section('content')

    <link rel="stylesheet" href="{{ asset('dist/css/lightbox.min.css') }}">
    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::has('deleted'))
        <div class="alert alert-danger alert-dismissible show fade">
            {{ Session::get('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section id="basic-vertical-layouts">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Masukan Data Kandidat</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('admin.addcalon') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-ketua">Nama Ketua</label>
                                        <input type="text" id="nama-ketua" class="form-control" name="nama_ketua"
                                            placeholder="Nama Ketua" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-wakil">Nama Wakil</label>
                                        <input type="text" id="nama-wakil" class="form-control" name="nama_wakil"
                                            placeholder="Nama Wakil" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto-calon">Foto Calon</label>
                                        <input class="form-control" type="file" id="formFile" name="foto_calon"
                                            @error('password') is-invalid @enderror required>

                                        @error('foto_calon')
                                            <p class="text-danger">*format gambar harus jpg!</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="visi">Visi</label>
                                        <textarea class="form-control" id="visi" rows="3" name="visi"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="misi">Misi</label>
                                        <textarea class="form-control" id="misi" rows="3" name="misi" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Kandidat
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Ketua</th>
                                <th>Nama Wakil</th>
                                <th>Foto Calon</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kandidat as $k)
                                <tr>
                                    <td nowrap="nowrap">{{ $k->nama_ketua }}</td>
                                    <td nowrap="nowrap">{{ $k->nama_wakil }}</td>
                                    <td nowrap="nowrap">
                                        <a href="{{ url('/foto_calon/' . $k->foto_calon) }}" data-lightbox="example-1">
                                            <img id="zoom-img" class="img-fluid mb-3"
                                                src="{{ url('/foto_calon/' . $k->foto_calon) }}" width="50">
                                        </a>
                                    </td>
                                    <td>{{ $k->visi }}</td>
                                    <td>{{ $k->misi }}</td>
                                    <td nowrap="nowrap">
                                        <a href="{{ route('admin.editcalon', $k->id_calon) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.deletecalon', $k->id_calon) }}"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
