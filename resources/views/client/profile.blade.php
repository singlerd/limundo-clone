@extends('layouts.client')
@section('content')
<main role="main" class="container pt-3 pb-3">
    <div class="row">
        <div class="col-md-3 col-sm-12">
           <div class="card">
               <div class="card-header back-gradient-green text-white">
                   <h6 class="text-to-uppercase">Predmeti i pitanja</h6>
               </div>
               <div class="card-body">
                    <a href="" class="btn btn-link">Svi predmeti člana</a>
                    <a href="#" class="btn btn-link">Pitanje za člana</a>
               </div>
           </div>
        </div>
        <div class="col-md-9 col-sm-12 pt-3">
            <div class="card">
                <div class="card-header back-gradient-grey text-white">
                    <h6 class="text-to-uppercase">{{auth()->user()->username}} je Limundovac</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>Onsovni podaci</h4>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-md-3 col-sm-12">
                            <h6>Član</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            {{auth()->user()->username}}
                        </div>
                    </div>

                    <div class="row pt-1">
                        <div class="col-md-3 col-sm-12">
                            <h6>Uspešnost</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            Bez pozitivnih ocena u poslednjih 12 meseci
                        </div>
                    </div>

                    <div class="row pt-1">
                        <div class="col-md-3 col-sm-12">
                            <h6>Član od</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            @php
                                \Carbon\Carbon::setLocale('rs');
                                echo \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', auth()->user()->created_at)->format("d. M.". " '"."y");
                            @endphp
                        </div>
                    </div>

                    <div class="row pt-1">
                        <div class="col-md-3 col-sm-12">
                            <h6>Poslednja Aktivnost</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            @php
                                \Carbon\Carbon::setLocale('rs');
                                echo \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', auth()->user()->created_at)->format("d. M.". " '"."y - H:i");
                            @endphp
                        </div>
                    </div>
                    <hr class="pt-3">

                    <div class="row pt-1">
                        <div class="col-md-3 col-sm-12">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            aasdasd
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <h6>Omiljeni citat</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            asdasd
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <h6>Ukratko o članu</h6>
                        </div>
                        <div class="col-md-9 col-sm-12">

                        </div>
                    </div>
                    <hr class="pt-3">

                    <div class="row">
                        <div class="col-6">
                            <h3 class="d-inline">Statistike</h3><div> <h6 class="d-inline "> (u poslednjih 90 dana)</h6></div>
                        </div>
                        <div class="col-6">
                            <h3 class="d-inline">Ocene</h3> <div><h6 class="d-inline"> (u poslednjih 90 dana)</h6></div>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-3">
                            <h6>Prodavao</h6>
                        </div>
                        <div class="col-3">
                            <h6>0</h6>
                        </div>
                        <div class="col-3">
                            <h6>Pozitivne</h6>
                        </div>
                        <div class="col-3">
                            <h6>0</h6>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-3">
                            <h6>Kupio</h6>
                        </div>
                        <div class="col-3">
                            <h6>0</h6>
                        </div>
                        <div class="col-3">
                            <h6>Negativne</h6>
                        </div>
                        <div class="col-3">
                            <h6>0</h6>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-3">
                            <h6>Licitirao</h6>
                        </div>
                        <div class="col-3">
                            <h6>0</h6>
                        </div>
                        <div class="col-3">
                            <h6>Od kupca</h6>
                        </div>
                        <div class="col-3">
                            <h6>Od prodavaca</h6>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr class="text-to-uppercase">
                                        <th scope="col">Datum</th>
                                        <th scope="col">Komentari</th>
                                        <th scope="col">Ocena</th>
                                        <th scope="col">Ocena od</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@stop
