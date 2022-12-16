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
<section>

</section>
@endsection