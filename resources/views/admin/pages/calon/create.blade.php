@extends('layouts.admin')
@section('title', 'Data Calon')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Masukan Data Kandidat</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('admin.addCalon') }}"
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
@endsection
