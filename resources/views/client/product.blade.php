@extends('layouts.client')
@section('content')
    <main role="main" class="container pt-2">
        <div class="row">
            <div class="col-8">
               <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <img class="rounded" src="https://picsum.photos/200" alt="Specific Image">
                            </div>
                        </div>
                    </div>
                   <div class="col-8 ">
                    <div class="row">
                        <div class="col-12">
                            <h3>{{$productBySlug->name}}</h3>
                        </div>
                        <div class="col-12">
                            <p>Broj predmeta: 102175189</p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-light">Ubaci u listu želja</button>
                        </div>
                        <div class="col-6 pt-3">
                            <p>Preostalo vreme</p>
                        </div>
                        <div class="col-6 pt-3">
                            <strong>3 sata, 54 minuta</strong>
                            <pre>( 1. jun 2021, 21:06h)</pre>
                        </div>
                        <div class="col-6">
                            <p>Broj ponuda</p>
                        </div>
                        <div class="col-6">
                            <a href="#">16 ponuda</a>
                        </div>
                       <div class="col-12">
                           <div class="card bg-grey p-3">
                               <div class="row">
                                   <div class="col-6">
                                       <p>Aktuelna ponuda</p>
                                   </div>
                                   <div class="col-6">
                                       <h5>{{$productBySlug->price}}</h5>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-4">
                                       <p>Moja ponuda</p>
                                   </div>
                                   <div class="col-4">
                                       <input type="text" name="tender" class="form-control" id="tender" placeholder="(min. 720 din)">
                                   </div>
                                   <div class="col-4">
                                       <button class="btn btn-primary">Licitiraj</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-6 pt-3">
                           <p>Slanje paketa</p>
                       </div>
                       <div class="col-6 pt-3">
                           <p>Slanje paketa</p>
                       </div>
                        <div class="col-6">
                            <p>Plaćanje</p>
                        </div>
                        <div class="col-6">
                            <p>	Tekući račun (pre slanja)
                                PostNet (pre slanja)
                                Pouzećem
                                Lično </p>
                        </div>
                        <div class="col-6">
                            <p>Stanje</p>
                        </div>
                        <div class="col-6">
                            <p>Polovno</p>
                        </div>
                        <div class="col-6">
                            <p>Garantni list:</p>
                        </div>
                        <div class="col-6">
                            <p>Ne</p>
                        </div>
                    </div>
                   </div>
               </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Prodavac
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="#">Gojko</a>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-12">
                                Lokacija: Beograd
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-12">
                                <button class="btn btn-primary">Pošalji poruku</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Opis proizvoda
                    </div>
                    <div class="card-body">
                        {{$productBySlug->description}}

                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
