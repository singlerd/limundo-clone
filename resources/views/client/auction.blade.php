@extends('layouts.client')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="btn-toolbar">
                <button class="btn" id="lastBtn">Najvažnije aukcije >></button>
                <button class="btn" id="lastBtn">Najvažnije aukcije >></button>
                <button class="btn" id="lastBtn">Najvažnije aukcije >></button>
                <button class="btn" id="lastBtn">Ističu >></button>
                <button class="btn" id="lastBtn">Kupi odmah >></button>
            </div>
            <div class="product-links">
               <div class="row" id="auctionLinks">
                   @foreach($categories as $category)
                       <div class="col-3">
                           <ul class="list-group pt-5">
                               <a href="auction/{{$category->slug}}"><li class="list-group-item active">{{$category->category_name}}</li></a>
                                @foreach($category->subCategories as $subCategory)
                                   <a href="auction/{{$category->slug}}"><li class="list-group-item">{{$subCategory->sub_category_name}}</li></a>
                                @endforeach
                           </ul>
                       </div>
                   @endforeach
               </div>
            </div>
        </div>
    </div>
@stop

