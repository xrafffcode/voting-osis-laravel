@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                @if (auth()->user()->voting == 'false')
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-center fw-bold">
                                    John Doe & Joni
                                </div>
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                    aria-controls="flush-collapseOne">
                                                    Visi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                                                    type="button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                    aria-controls="flush-collapseTwo">
                                                    Misi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 p-3">
                                        <a href="#" class="btn btn-primary">Vote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-center fw-bold">
                                    John Doe & Joni
                                </div>
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                    aria-controls="flush-collapseThree">
                                                    Visi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingThree"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                                    aria-controls="flush-collapseFour">
                                                    Misi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 p-3">
                                        <a href="#" class="btn btn-primary">Vote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-center fw-bold">
                                    John Doe & Joni
                                </div>
                                <img src="{{ asset('images/calon.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                                    aria-controls="flush-collapseFive">
                                                    Visi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingFive"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingSix">
                                                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                                    aria-controls="flush-collapseSix">
                                                    Misi
                                                </button>
                                            </h2>
                                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingSix"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                    provident accusamus iste et iusto aspernatur eius impedit, id ipsa
                                                    incidunt voluptatem, nemo in dolorem? Aut delectus cupiditate autem
                                                    libero accusamus!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 p-3">
                                        <a href="#" class="btn btn-primary">Vote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
