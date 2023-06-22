@extends('home')

@section('concert')
<div class="cards-container">
    @foreach ($concerts as $concert)
        <div class="card mb-3 cards position-relative">
            <div class="row g-0 card-content">
                <div class="col-md-4 image-cards">
                    <img src="{{$concert->image_path}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body cards-content">
                    <h6 class="card-title">{{$concert->artist}}{{$concert->name}}</h6>
                    <p class="card-text">{{$concert->description}}</p>
                    </div>
                </div>
                <div class="information-concert position-absolute">
                    <div class="info-content">
                        <h2>{{$concert->date}}</h2>
                        <p>{{$concert->month}}<br>{{$concert->year}}</p>
                    </div>
                    <div class="location">
                        <p>{{$concert->place}}</p>
                    </div>
                </div>
                <div class="position-absolute">
                    <form action="btn-book">
                        <a href="{{ route('bookedpage', ['id' => $concert->id]) }}"><button type="button" class="btn btn-light btn-booked">Book</button></a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection()
