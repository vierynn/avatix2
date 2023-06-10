@extends('home')

@section('concert')
<div class="cards-container">
    @foreach ($concerts as $concert)
        <div class="card mb-3 cards" style="max-width: 540px;">
            <div class="row g-0 cards-container">
                <div class="col-md-4 image-cards">
                    <img src="{{asset('img/coldplay.png')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{$concert->name}}</h5>
                    <p class="card-text">{{$concert->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection()
