{{--JQUERY FOR BOOTSTRAP--}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{--POPPER JS FOR BOOTSTRAP--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
{{--BOOTSTRAP CDN - JAVASCRIPT--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{--OUR CUSTOM JAVASCRIPT FILE--}}
<script src="{{ asset('js/custom.js') }}"></script>
{{--INCLUDE JAVASCRIPT FILE FOR SPECIFIED PAGE--}}
@if(\Request::is('main'))
    <script src="{{ asset('js/client/main.js') }}"></script>
@elseif(\Request::is('auctions'))
    <script src="{{ asset('js/client/auction.js') }}"></script>
@elseif(\Request::is('odeca/aukcije'))
    <script src="{{ asset('js/client/category_pages/odeca.js') }}"></script>
@elseif(\Request::is('MojLimundo/NovaAukcija'))
    <script src="{{ asset('js/client/new_auction.js') }}"></script>
@elseif(\Request::is('odeca/kupovina/{slug}}'))
    <script src="{{ asset('js/client/product.js') }}"></script>
@endif
