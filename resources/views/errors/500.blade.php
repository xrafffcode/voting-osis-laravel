@extends('layouts.error')

@section('title', '505 Internal Server Error')

@section('content')
    <div class="col-md-8 col-12 offset-md-2">
        <div class="text-center">
            <img class="img-error" src="{{ asset('assets/images/samples/error-500.svg') }}" alt="Not Found">
            <h1 class="error-title">System Error</h1>
            <p class="fs-5 text-gray-600">The website is currently unaivailable. Try again later or contact the
                developer.</p>
            <a href="{{ route('home') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
        </div>
    </div>
@endsection
