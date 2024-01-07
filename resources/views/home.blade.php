@extends('layouts.app')

@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (auth()->user()->voting == 0)
                    <div class="row justify-content-md-center">
                        @foreach ($kandidat as $k)
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header text-center fw-bold">
                                        {{ $k->nama_ketua }} & {{ $k->nama_wakil }}
                                    </div>
                                    <img src="{{ url('/foto_calon/' . $k->foto_calon) }}" class="card-img-top" alt="...">
                                    <div class="card-body p-0">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingVisi{{ $k->id }}">
                                                    <button class="accordion-button collapsed"
                                                        style="box-shadow: 0 0 0 0rem " type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseVisi{{ $k->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseVisi{{ $k->id }}">
                                                        Visi
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseVisi{{ $k->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingVisi{{ $k->id }}"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {!! $k->visi !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingMisi{{ $k->id }}">
                                                    <button class="accordion-button collapsed"
                                                        style="box-shadow: 0 0 0 0rem " type="button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapse{{ $k->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapse{{ $k->id }}">
                                                        Misi
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse{{ $k->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingMisi{{ $k->id }}"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {!! $k->misi !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/vote/{{ $k->id }}" class="d-grid gap-2 p-3">
                                            <button class="btn btn-primary">Vote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if (auth()->user()->voting == 1)
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Anda Sudah Melakukan Voting</h4>
                        <p>Jika anda merasa belum melakukan voting, silahkan hubungin panitia.</p>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
