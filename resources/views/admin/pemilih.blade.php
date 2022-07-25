@extends('admin.layouts.master')
@section('title', 'Data Pemilih')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::has('deleted'))
        <div class="alert alert-danger alert-dismissible show fade">
            {{ Session::get('deleted') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Pemlih
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nis</th>
                                <th>Kelas</th>
                                <th>Voting</th>
                                <th>Role</th>
                                <th style="width: 10px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemilih as $p)
                                <tr>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->nis }}</td>
                                    <td>{{ $p->kelas }}</td>
                                    <td>
                                        @if ($p->voting == 'true')
                                            <span class="badge bg-success">Sudah Voting</span>
                                        @else
                                            <span class="badge bg-danger">Belum Voting</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $p->role }}
                                    </td>
                                    <td nowrap="nowrap">
                                        <a href="{{ route('admin.resetPemilih', [$p->id, $p->voting_id]) }}"
                                            class="btn btn-primary">Reset
                                            Voting</a>
                                        <a href="{{ route('admin.deletePemilih', $p->id) }}"
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
