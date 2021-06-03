@extends('layouts.client')
@section('content')
    <main role="main" class="container pt-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="" id="newAuctionForm">
                        <div class="row p-5">
                                <div class="col-12">
                                    <h6>Unesite nov predmet</h6>
                                </div>
                                <div class="col-4 pt-3">
                                    <h6>Detalji i slike proizvoda koji prodajete</h6>
                                </div>
                                <div class="col-8 pt-3">
                                    <hr>
                                </div>
                                <div class="col-2 pt-3">
                                    <h6>Naslov</h6>
                                </div>
                                <div class="col-6 pt-3">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col-4 pt-4 font-s14">
                                    <i>Duži naslov = kupac će pre naći predmet u pretrazi</i>
                                </div>
                                <div class="col-2 pt-3">
                                    <h6>Opis predmeta</h6>
                                </div>
                                <div class="col-10 pt-3">
                                    <textarea type="text" class="form-control"  id="description" rows="5" name="description"> </textarea>
                                </div>

                                <div class="col-2 pt-3">
                                    <h6>Slika predmeta</h6>
                                </div>

                                <div class="col-10 pt-3">
                                    <input id='files' type='file' name="files[]" multiple/>
                                    <output id='result' />
                                </div>
                                <div class="col-2 pt-3">
                                    <h6>Stanje predmeta</h6>
                                </div>
                                <div class="col-10 pt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="product_state" id="product_state" value="nekorisceno">
                                        <label class="form-check-label" for="product_state1">
                                            Nekorišćeno
                                        </label>
                                    </div>

                                    <div class="form-check pt-1">
                                        <input class="form-check-input" type="radio" name="product_state" id="product_state" value="polovno">
                                        <label class="form-check-label" for="product_state2">
                                            Polovno
                                        </label>
                                    </div>

                                    <div class="form-check pt-1">
                                        <input class="form-check-input" type="radio" name="product_state" id="product_state" value="neispravno">
                                        <label class="form-check-label" for="product_state3">
                                            Neispravno
                                        </label>
                                    </div>

                                    <div class="form-check pt-1">
                                        <input class="form-check-input" type="radio" name="product_state" id="product_state" value="kolekcionarski">
                                        <label class="form-check-label" for="product_state4">
                                            Kolekcionarski primerak
                                        </label>
                                    </div>
                                </div>

                                <div class="col-4 pt-3">
                                    <h6 class="">Detalji i slike proizvoda koji prodajete</h6>
                                </div>
                                <div class="col-8 pt-3">
                                    <hr>
                                </div>

                                <div class="col-2 pt-3">
                                    <h6>Kategorije</h6>
                                </div>

                                <div class="col-5 pt-3">
                                    <div class="form-group">
                                        <select multiple class="form-control" id="select1" name="select1">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-5 pt-3">
                                    <div class="form-group">
                                        <select multiple class="form-control" id="select2" name="select2">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-4 pt-3">
                                    <h6>Tip prodaje, način plaćanja i dostave</h6>
                                </div>
                                <div class="col-8">
                                    <hr>
                                </div>

                                <div class="col-6 pt-3">
                                    <div class="card p-5 bg-grey">
                                        <label for="price">Fiksna Cena</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>

                                </div>
                                <div class="col-6 pt-3">
                                    <div class="card p-5 bg-grey">
                                        <label for="price">Lager</label>
                                        <select class="form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4 pt-3">
                                    <h6>Način plaćanja i dostave</h6>
                                </div>
                                <div class="col-8 pt-3">
                                    <hr>
                                </div>

                                <div class="col-6 pt-3" id="payment_methods">
                                    <h6>Načini plaćanja</h6>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="racun" value="2">
                                        <label class="custom-control-label" for="racun">Tekući račun (pre slanja)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="postnet" name="payment_methods[]">
                                        <label class="custom-control-label" for="postnet">PostNet (pre slanja)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="other" name="payment_methods[]">
                                        <label class="custom-control-label" for="other">Ostalo (pre slanja)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="take_it" name="payment_methods[]">
                                        <label class="custom-control-label" for="take_it">Pouzećem</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="personally" name="payment_methods[]">
                                        <label class="custom-control-label" for="personally">Lično</label>
                                    </div>
                                </div>

                                <div class="col-6 pt-3 pb-5">
                                    <h6>Načini slanja</h6>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="aks">
                                        <label class="custom-control-label" for="aks">AKS</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="bex">
                                        <label class="custom-control-label" for="bex">BEX</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="city_express">
                                        <label class="custom-control-label" for="city_express">City Express</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="posta">
                                        <label class="custom-control-label" for="posta">Pošta</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="post_express">
                                        <label class="custom-control-label" for="post_express"> Post Express</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="daily_express">
                                        <label class="custom-control-label" for="daily_express">Daily Express</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="personal_take">
                                        <label class="custom-control-label" for="personal_take">Lično preuzimanje</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="org_transport">
                                        <label class="custom-control-label" for="org_transport">Organizovani transport</label>
                                    </div>
                                </div>
                                <table class="table text-center borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="pricingSize">MASNA SLOVA</th>
                                        <th scope="col" class="pricingSize">NEK SIJA</th>
                                        <th scope="col" class="pricingSize">TOP NASLOVNA</th>
                                        <th scope="col" class="pricingSize">TOP POTKATEGORIJA</th>
                                        <th scope="col" class="pricingSize">TOP KATEGORIJA</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-grey">
                                        <td>Istaknite svoj predmet uz minimalna ulaganja.</td>
                                        <td>Duplo veća šansa da uspešno prodate svoj predmet.</td>
                                        <td>Naslovna strana Limunda se svakoga dana pregleda više od 160.000 puta.</td>
                                        <td>Vaš predmet uvek među prvima na mestu na kom kupac traži</td>
                                        <td>Dobar odnos cene i kvaliteta. Povećajte mogućnost prodaje za 80%.</td>
                                    </tr>
                                    <tr class="bg-grey">
                                        <td><h4>49</h4> <pre>din</pre></td>
                                        <td><h4>69</h4> <pre>din</pre></td>
                                        <td><h4>129</h4> <pre>din</pre></td>
                                        <td><h4>139</h4> <pre>din</pre></td>
                                        <td><h4>199</h4> <pre>din</pre></td>
                                    </tr>
                                    <tr class="bg-grey">
                                        <td><button class="btn btn-primary">Aktiviraj</button></td>
                                        <td><button class="btn btn-primary">Aktiviraj</button></td>
                                        <td><button class="btn btn-primary">Aktiviraj</button></td>
                                        <td><button class="btn btn-primary">Aktiviraj</button></td>
                                        <td><button class="btn btn-primary">Aktiviraj</button></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="col-12 text-center pt-5">
                                    <button class="btn btn btn-success" id="submitNewAuctionBtn">Pokreni</button>
                                    <button class="btn btn-primary">Snimi u pripremu</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@stop
