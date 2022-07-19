@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                @if (auth()->user()->voting == 'false')
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    John Doe & Joni
                                </div>
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text">Visi: Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Laudantium cupiditate similique numquam, error nobis dignissimos
                                        eligendi, minus voluptas aliquid libero illum quis assumenda modi velit
                                        placeat. Placeat nemo minima iusto?</p>
                                    <a href="#" class="btn btn-primary">Voting</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text">Visi: Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Laudantium cupiditate similique numquam, error nobis dignissimos
                                        eligendi, minus voluptas aliquid libero illum quis assumenda modi velit
                                        placeat. Placeat nemo minima iusto?</p>
                                    <a href="#" class="btn btn-primary">Voting</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text">Visi: Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Laudantium cupiditate similique numquam, error nobis dignissimos
                                        eligendi, minus voluptas aliquid libero illum quis assumenda modi velit
                                        placeat. Placeat nemo minima iusto?</p>
                                    <a href="#" class="btn btn-primary">Voting</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
