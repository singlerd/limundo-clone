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
                                @auth
                                <div class="col-12">
                                    <button class="btn btn-light" id="addToFavoriteBtn" onclick="addToFavorite({{$user_id}}, {{$productBySlug->id}})">Ubaci u listu želja</button>
                                </div>
                                @endauth
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
                                       @if($isPurchased)
                                           <div class="alert alert-success">
                                               Kupovina je u obradi
                                           </div>
                                       @else
                                           @auth
                                           <button class="btn btn-primary" id="purchaseBtn" onclick="purchaseProduct({{auth()->id()}}, {{$productBySlug->id}})">Kupi predmet</button>
                                           @endauth
                                       @endif
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-6 pt-3">
                           <p>Slanje paketa</p>
                       </div>
                       <div class="col-6 pt-3">
                            @php
                               $sending_method = $productBySlug->sending_methods;
                                $ex =   explode(",", $sending_method);
                                 foreach ( $ex as $e)
                                 {
                                     echo $e . "</br >";
                                 }
                            @endphp
                        </div>
                        <div class="col-6 pt-3">
                            <p>Plaćanje</p>
                        </div>
                        <div class="col-6 pt-3">
                            @php
                                $payment_method = $productBySlug->payment_methods;
                                $ex =   explode(",", $payment_method);
                                 foreach ( $ex as $e)
                                 {
                                     echo $e . "</br >";
                                 }
                            @endphp
                        </div>
                        <div class="col-6 pt-3">
                            <p>Stanje</p>
                        </div>
                        <div class="col-6 pt-3">
                            <p>{{$productBySlug->product_state}}</p>
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
                                @auth
                                 <button class="btn btn-primary" data-toggle="modal" data-target="#sendMessageModal">Pošalji poruku</button>
                                @endauth
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

<!-- Modal -->
<div class="modal fade" id="sendMessageModal" tabindex="-1" role="dialog" aria-labelledby="sendMessageModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pošalji poruku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="receiver">Primalac</label>
                        <input type="text" class="form-control" id="receiver" disabled value="{{$productBySlug->user->username}}">
                    </div>
                    <div class="form-group">
                        <label for="message_title">Naslov poruke</label>
                        <input type="text" class="form-control" id="message_title">
                    </div>
                    <div class="form-group">
                        <label for="message_body">Naslov poruke</label>
                        <input type="text" class="form-control" id="message_body">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Odustani</button>
                <button type="button" class="btn btn-primary" onclick="sendMessage({{auth()->id()}}, {{$productBySlug->user->id}})">Pošalji poruku</button>
            </div>
        </div>
    </div>
</div>
@stop
