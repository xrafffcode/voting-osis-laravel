<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes - Voting Osis</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/error.css') }}">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('assets/images/undraw_voting_nvu7 (1).svg') }}" alt="Succes">
                    <h1 class="error-title">Voting Berhasil</h1>
                    <p class="fs-5 text-gray-600">Terimakasih telah melakukan voting :D.</p>
                    <a class="btn btn-lg btn-outline-primary mt-3" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                        document.getElementById('logout-form').submit();">
                        <i class="icon-mid bi bi-box-arrow-left me-2"></i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
