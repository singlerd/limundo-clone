@extends('layouts.client')
@section('content')

<main role="main" class="container pt-3">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="navigation text-left">
                    {{--START SPINNER--}}
                    <div class="text-center">
                        <div class="lds-ripple" id="isSpinSubCategoryLinks"><div></div><div></div></div>
                    </div>

                    {{--END SPINNER--}}
                    <ul class="nav flex-column main-back" id="getSubCategoryNavigation">
                    {{--RENDER SUB CATEGORY LINKS - odeca.js--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 pt-3">

                <div class="col-12 text-left pb-3">
                    <h3>Odeća</h3>
                </div>
                {{--START ACCORDION--}}
                <div id="accordion pb-2">
                    <div class="card">
                        <div class="card-header bg-white" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <strong style="cursor: pointer; ">Filter</strong>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body back-grey">
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col-md-4 col-sm-12 form-group">
                                            <label for="detail_search" class="label-grey"><strong>Detaljna pretraga</strong></label>
                                            <input type="text" class="form-control" id="detail_search" name="detail_search">
                                        </div>
                                        <div class="col-md-4 col-sm-12 form-group">
                                            <label for="seller" class="label-grey"><strong>Prodavac</strong></label>
                                            <input type="text" class="form-control" id="seller" name="seller">
                                        </div>
                                        <div class="col-md-2 col-sm-12 form-group">
                                            <label for="price_from" class="label-grey"><strong>Cena</strong></label>
                                            <input type="text" class="form-control" id="price_from" name="price_from" placeholder="od">
                                        </div>
                                        <div class="col-md-2 col-sm-12 form-group">
                                            <label for="price_from" class="label-grey"><strong>Cena</strong></label>
                                            <input type="text" class="form-control" id="price_to" name="price_to" placeholder="do">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Traži</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--END ACCORDION--}}
                <div class="row pt-3">
                    <div class="col-12 p-3" id="getProducts">
                    {{--START SPINNER--}}
                        <div class="text-center">
                            <div class="lds-ripple" id="isSpinProducts"><div></div><div></div></div>
                        </div>

                    {{--END SPINNER--}}

                    {{--RENDER PRODUCTS - odeca.js--}}
                    </div>
                </div>
            </div>
        </div>
</main>
@stop

