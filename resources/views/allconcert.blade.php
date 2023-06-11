@extends('home')

@section('concert')
<div class="cards-container">
    @foreach ($concerts as $concert)
        <div class="card mb-3 cards">
            <div class="row g-0">
                <div class="col-md-4 image-cards">
                    <img src="{{asset('img/coldplay.png')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body cards-content">
                    <h5 class="card-title">{{$concert->name}}</h5>
                    <p class="card-text">{{$concert->description}}</p>
                    </div>
                </div>
                <form action="btn-book">
                    <button type="button" class="btn btn-light btn-custom">Book</button>
                </form>
                <div class="information-concert">
                    <div class="info-content">
                        <h2>23-24</h2>
                        <p>March <br> 2023</p>
                    </div>
                    <div class="location">
                        <p>Gelora Bung Karno Main Stadium</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection()
