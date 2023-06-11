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
                    <h5 class="card-title">{{$concert->name}}</h5>
                    <p class="card-text">{{$concert->description}}</p>
                    </div>
                </div>
                <div class="information-concert position-absolute">
                    <div class="info-content">
                        <h2>23-24</h2>
                        <p>March <br> 2023</p>
                    </div>
                    <div class="location">
                        <p>Gelora Bung Karno Main Stadium</p>
                    </div>
                </div>
                <div class="position-absolute">
                    <form action="btn-book">
                        <button type="button" class="btn btn-light btn-booked">Book</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection()
