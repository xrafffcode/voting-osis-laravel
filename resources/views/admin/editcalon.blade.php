@extends('admin.layouts.master')
@section('title', 'Edit Kandidat')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Kandidat</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    @foreach ($calon as $c)
                        <form class="form form-vertical" method="POST" action="{{ route('admin.updatecalon', $c->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $c->id }}">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama-ketua">Nama Ketua</label>
                                            <input type="text" id="nama-ketua" class="form-control" name="nama_ketua"
                                                placeholder="Nama Ketua" required value="{{ $c->nama_ketua }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama-wakil">Nama Wakil</label>
                                            <input type="text" id="nama-wakil" class="form-control" name="nama_wakil"
                                                placeholder="Nama Wakil" required value="{{ $c->nama_wakil }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="visi">Visi</label>
                                            <textarea class="form-control" id="visi" rows="3" name="visi">{{ $c->visi }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="misi">Misi</label>
                                            <textarea class="form-control" id="misi" rows="3" name="misi" required>{{ $c->misi }}</textarea>
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
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
