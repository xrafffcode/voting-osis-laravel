@extends('layouts.admin')
@section('title', 'Data Calon')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Calon
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
                            @foreach ($calons as $calon)
                                <tr>
                                    <td nowrap="nowrap">{{ $calon->nama_ketua }}</td>
                                    <td nowrap="nowrap">{{ $calon->nama_wakil }}</td>
                                    <td nowrap="nowrap">
                                        <a href="{{ url('/foto_calon/' . $calon->foto_calon) }}" data-lightbox="example-1">
                                            <img id="zoom-img" class="img-fluid mb-3"
                                                src="{{ url('/foto_calon/' . $calon->foto_calon) }}" width="50">
                                        </a>
                                    </td>
                                    <td>{{ $calon->visi }}</td>
                                    <td>{{ $calon->misi }}</td>
                                    <td nowrap>
                                        <a href="{{ route('calon.edit', $calon->id) }}" class="btn btn-primary">Edit
                                            Data</a>
                                        <form action="{{ route('calon.destroy', $calon->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('yakin ingin menghapus data?');">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('calon.create') }}" class="btn btn-primary me-1 mb-1 float-end">Tambah Data</a>
            </div>
        </div>
    </section>
@endsection
