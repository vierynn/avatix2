@extends('home')

@section('concert')
<div class="cards-container">
    <div class="card mb-3 cards position-relative">
        <div class="row g-0 card-content">
            <div class="col-md-4 image-cards">
                <img src="{{{asset('img/tuturbatin.jpg')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">TUTUR BATIN: PERTUNJUKAN TUTUR BATIN LIVE CONCERT 2023</h6>
                <p class="card-text">Yura Yunita is ready to celebrate magic from her third album, Tutur Batin in a solo concert titled Pertunjukkan Tutur Batin.
                    After being introduced to a wide audience in October 2021 and getting a good impression from listeners.</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>09</h2>
                    <p>June<br>2023</p>
                </div>
                <div class="location">
                    <p>Jatim International Expo(JIE) Convention Exhibition</p>
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
            <img src="{{{asset('img/niki.jpg')}}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body cards-content">
            <h6 class="card-title">NIKI: NICOLE WORLD TOUR 2023</h6>
            <p class="card-text">Legendary K-Pop Group, BLACKPINK will be back in Jakarta to promote their new album, BORN PINK through a world tour with the name, BLACKPINK WORLD TOUR [BORN PINK].
                This four people group will greet Indonesian BLINK for two days!</p>
            </div>
        </div>
        <div class="information-concert position-absolute">
            <div class="info-content">
                <h2>26</h2>
                <p>September<br>2023</p>
            </div>
            <div class="location">
                <p>Garuda Wisnu Kencana</p>
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
