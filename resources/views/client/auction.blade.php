@extends('layouts.client')
@section('content')
<main role="main" class="container pt-2">
    <div class="card">
        <div class="card-body">
{{--            <div class="btn-toolbar">--}}
{{--                <button class="btn col-md-2 col-sm-12" id="lastBtn">Najvažnije aukcije >></button>--}}
{{--                <button class="btn col-md-2 col-sm-12" id="lastBtn">Najvažnije aukcije >></button>--}}
{{--                <button class="btn col-md-2 col-sm-12" id="lastBtn">Najvažnije aukcije >></button>--}}
{{--                <button class="btn col-md-2 col-sm-12" id="lastBtn">Ističu >></button>--}}
{{--                <button class="btn col-md-4 col-sm-12" id="lastBtn">Kupi odmah >></button>--}}
{{--            </div>--}}
            <div class="product-links">
               <div class="row" id="auctionLinks">
                   @foreach($categories as $category)
                       <div class="col-md-3 col-sm-12">
                           <ul class="list-group pt-5">
                               <a href="{{$category->slug}}/aukcije"><li class="list-group-item active">{{$category->category_name}}</li></a>
                                @foreach($category->subCategories as $subCategory)
                                   <a href="{{$category->slug}}/aukcije"><li class="list-group-item">{{$subCategory->sub_category_name}}</li></a>
                                @endforeach
                           </ul>
                       </div>
                   @endforeach
               </div>
            </div>
        </div>
    </div>
</main>
@stop

