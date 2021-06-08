@extends('layouts.client')
@section('content')
{{--    @php--}}
{{--        dd($productBySlug->user->profile);--}}
{{--    @endphp--}}
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

                        @auth
                            @if($favorited == true)
                                <div class="col-12">
                                    <div class="alert alert-info" role="alert">
                                        Ubacio si u omiljene predmete
                                    </div>
                                </div>
                            @else
                                <div class="col-12">
                                    <button class="btn btn-light" onclick="addToFavorite({{$user_id}}, {{$productBySlug->id}})">Ubaci u listu želja</button>
                                </div>
                            @endif
                        @endauth
                       <div class="col-12 pt-3">
                           <div class="card bg-grey p-3">
                               <div class="row">
                                   <div class="col-6">
                                       <p>Cena</p>
                                   </div>
                                   <div class="col-6">
                                       <h5>{{$productBySlug->price}}</h5>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-6">
                                   </div>
                                   <div class="col-6">
                                       <button class="btn btn-primary">Kupi predmet</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-6 pt-3">
                           <p>Slanje paketa</p>
                       </div>
                       <div class="col-6 pt-3">
                            @php
                                json_decode($productBySlug->payment_methods)
                            @endphp
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
                                <a href="{{route('showProfilePage', $productBySlug->user->username)}}">{{$productBySlug->user->username}}</a>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-4">
                                Lokacija
                            </div>
                            <div class="col-8">
                                {{$productBySlug->user->profile->township}}
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
