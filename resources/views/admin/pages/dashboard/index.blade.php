@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi-person-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Pemilih</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jumlahPemilih }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi-person-check-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Sudah Memilih</h6>
                                    <h6 class="font-extrabold mb-0" id="sudahmemilih"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="card ">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Kandidat</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalKandidat }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <h1 class="text-center text-primary mt-3">
                        Hasil Voting
                    </h1>
                    <div class="row mt-2 justify-content-center">
                        @foreach ($kandidat as $k)
                            <div class="col-sm-4">
                                <div class="card shadow-lg">
                                    <div class="card-header text-center fw-bold">
                                        {{ $k->nama_ketua }} & {{ $k->nama_wakil }}
                                    </div>
                                    <img src="{{ url('/foto_calon/' . $k->foto_calon) }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="mt-3" id="vote{{ $k->id }}"></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">

            <div class="card">
                <div class="card-header">
                    <h4>Pemilih Terkini</h4>
                </div>

                @foreach ($number as $num)
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1" id="namapemlih{{ $num['index'] }}"></h5>
                                <h6 class="text-muted mb-0" id="kelaspemilih{{ $num['index'] }}"></h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Hasil Voting</h4>
                </div>
                <div class="card-body">
                    <div id="voting"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/pages/apexcharts.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script>
        var options = {
            series: [
                @foreach ($kandidat as $k)
                    {{ $k->suara }},
                @endforeach
            ],
            labels: [
                @foreach ($kandidat as $k)
                    '{{ $k->nama_ketua }} & {{ $k->nama_wakil }}',
                @endforeach
            ],
            colors: ["#435ebe", "#55c6e8", "#FEB139", "#EB1D36"],
            chart: {
                type: "donut",
                width: "100%",
                height: "350px"
            },
            legend: {
                position: "bottom"
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "30%"
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#voting"), options);
        chart.render();

        setInterval(function() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '{{ route('api.totalSuara') }}',
                success: function(data) {
                    @foreach ($kandidat as $k)
                        $('#vote{{ $k->id }}').html(data[{{ $k->id - 1 }}].suara +
                            ' Suara');
                    @endforeach

                    chart.updateSeries([
                        @foreach ($kandidat as $k)
                            data[{{ $k->id - 1 }}].suara,
                        @endforeach
                    ]);

                }
            });
        }, 1000);

        const number = [0, 1, 2, 3]

        setInterval(function() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '{{ route('api.pemilihTerkini') }}',
                success: function(data) {
                    for (let el of number) {
                        $('#namapemlih' + [el]).html(data[el].user.nama);
                        $('#kelaspemilih' + [el]).html(data[el].user.kelas);
                        if (el === 3) {
                            break;
                        }
                    }
                }
            });
        }, 1000);

        setInterval(function() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '{{ route('api.sudahMemilih') }}',
                success: function(data) {
                    $('#sudahmemilih').html(data);
                }
            });
        }, 1000);
    </script>
@endsection
