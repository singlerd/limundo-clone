@extends('layouts.client')
@section('content')
<div class="card">
    <div class="card-body">
       <div class="row">
           <div class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto cum eaque iure nam necessitatibus repellat totam voluptates. Debitis et iste nihil totam voluptas. Error facilis hic in ipsa nihil officia perferendis suscipit tempora? Corporis non optio voluptatem? Amet deleniti dolorem eos harum, laborum magnam quibusdam sint soluta vero voluptate?</div>
           <div class="col-4">
               <img class="rounded float-right" src="https://picsum.photos/200" alt="Specific Image">
           </div>
       </div>
    </div>
    <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/100" alt="First slide" width="300" height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/200" alt="Second slide"  width="300" height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/300" alt="Third slide"  width="300" height="300">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="products pt-5">
    <div class="row">
        <div class="col-6">
            <div class="row text-left">
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row text-left">
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="#" class="col-12">Ime</a>
                        <span class="col-12 money"><strong>10 din</strong></span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="text-left col-6">
            <button class="btn main-btn">Top naslovna</button>
        </div>
        <div class="text-right col-6">
            <button class="btn main-btn">></button>
        </div>
    </div>
</div>

    <div class="card main-back">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="text-left">
                        <h4 class="txt-color">Preporučujemo</h4>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <a href="#">Prikaži sve</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="row text-center">
                        <div class="col-12 pt-3">
                            <img class="rounded" src="https://picsum.photos/100" alt="Specific Image">
                        </div>
                        <div class="col-12 pt-2">
                            <a href="#">Biciikl</a>
                        </div>
                        <div class="col-12 pt-2 money">
                            <strong>100 din</strong>
                        </div>
                        <div class="col-12 pt-2">
                            <strong>20 ponude</strong>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="row text-center">
                        <div class="col-12 pt-3">
                            <img class="rounded" src="https://picsum.photos/100" alt="Specific Image">
                        </div>
                        <div class="col-12 pt-2">
                            <a href="#">Biciikl</a>
                        </div>
                        <div class="col-12 pt-2 money">
                            <strong>100 din</strong>
                        </div>
                        <div class="col-12 pt-2">
                            <strong>20 ponude</strong>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="row text-center">
                        <div class="col-12 pt-3">
                            <img class="rounded" src="https://picsum.photos/100" alt="Specific Image">
                        </div>
                        <div class="col-12 pt-2">
                            <a href="#">Biciikl</a>
                        </div>
                        <div class="col-12 pt-2 money">
                            <strong>100 din</strong>
                        </div>
                        <div class="col-12 pt-2">
                            <strong>20 ponude</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
