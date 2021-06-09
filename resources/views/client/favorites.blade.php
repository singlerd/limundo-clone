@extends('layouts.client')
@section('content')
{{--    @php--}}
{{--        dd(auth()->id());--}}
{{--    @endphp--}}
    <main role="main" class="container pt-3">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header back-gradient-green text-white">
                        <h6 class="text-to-uppercase">MOJ LIMUNDO</h6>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-link">Svi predmeti člana</a>
                        <a href="#" class="btn btn-link">Pitanje za člana</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 pt-3 pb-3">
                <div class="card">
                    <div class="card-header back-gradient-grey text-white">
                        <h6 class="text-to-uppercase">PREDMETI KOJE POSMATRATE</h6>
                    </div>
                    <div class="card-body">
                        <table class="table borderless table-hover table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Slika</th>
                                <th>Naziv</th>
                                <th>Stanje</th>
                                <th>Cena</th>
                                <th>Postavljeno</th>
                                <th>Upravljaj</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($favorites as $favorite)
                                @foreach($favorite->products as $product)

                                    <tr>
                                        <td><img src="https://picsum.photos/100" alt="test"></td>
                                        <td><a href="">{{$product->name}}</a></td>
                                        <td>{{$product->product_state}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td><button class="btn btn-danger" onclick="deleteFromFavorites({{$product->id}}, {{ auth()->id()}})">Ukloni</button></td>
                                    </tr>
                                @endforeach
                            @empty
                                <div class="alert alert-info">Nemaš omiljenih predmeta</div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@stop

