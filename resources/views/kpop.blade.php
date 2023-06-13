@extends('home')

@section('concert')
<div class="cards-container">
        <div class="card mb-3 cards position-relative">
            <div class="row g-0 card-content">
                <div class="col-md-4 image-cards">
                    <img src="{{{asset('img/blackpink.png')}}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body cards-content">
                    <h6 class="card-title">BLACKPINK: BORN-PINK</h6>
                    <p class="card-text">Legendary K-Pop Group, BLACKPINK will be back in Jakarta to promote their new album, BORN PINK through a world tour with the name, BLACKPINK WORLD TOUR [BORN PINK].
                        This four people group will greet Indonesian BLINK for two days!</p>
                    </div>
                </div>
                <div class="information-concert position-absolute">
                    <div class="info-content">
                        <h2>21</h2>
                        <p>March<br>2023</p>
                    </div>
                    <div class="location">
                        <p>Gelora Bung Karno Main Stadium</p>
                    </div>
                </div>
                <div class="position-absolute">
                    <form action="btn-book">
                        <a href=""><button type="button" class="btn btn-light btn-booked">Book</button></a>
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="cards-container">
    <div class="card mb-3 cards position-relative">
        <div class="row g-0 card-content">
            <div class="col-md-4 image-cards">
                <img src="{{{asset('img/blackpink.png')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">BLACKPINK: BORN-PINK</h6>
                <p class="card-text">Legendary K-Pop Group, BLACKPINK will be back in Jakarta to promote their new album, BORN PINK through a world tour with the name, BLACKPINK WORLD TOUR [BORN PINK].
                    This four people group will greet Indonesian BLINK for two days!</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>22</h2>
                    <p>March<br>2023</p>
                </div>
                <div class="location">
                    <p>Gelora Bung Karno Main Stadium</p>
                </div>
            </div>
            <div class="position-absolute">
                <form action="btn-book">
                    <a href=""><button type="button" class="btn btn-light btn-booked">Book</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
