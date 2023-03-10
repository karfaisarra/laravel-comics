@extends('layouts.app')


@section('content')
<section class="comics bg-dark py-5">
    <div class="container">
        <div class="comics_list">
            <div class="row row-cols-6 g-4">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <img class="card-img-top rounded-0" src="{{$comic['thumb']}}" alt="">
                        <div class="card-body">
                            <h6 class="text-uppercase text-white">{{$comic['series']}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="banner py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Digital comics</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Dc Merchandise</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Subscription</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Comic Shop Locator</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span class="text-uppercase text-white ps-3">Dc power visa</span>
            </div>
        </div>
    </div>
</section>
@endsection