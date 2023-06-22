@extends('home')

@section('concert')
<div class="cards-container">
    <div class="card mb-3 cards position-relative">
        <div class="row g-0 card-content">
            <div class="col-md-4 image-cards">
                <img src="{{{asset('img/wethefest.jpg')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">WE THE FEST 2023</h6>
                <p class="card-text">We The Fest is an annual music, art, fashion and food festival held in Jakarta.
                    In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>21</h2>
                    <p>July<br>2023</p>
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
                <img src="{{{asset('img/wethefest.jpg')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">WE THE FEST 2023</h6>
                <p class="card-text">We The Fest is an annual music, art, fashion and food festival held in Jakarta.
                    In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>22</h2>
                    <p>July<br>2023</p>
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
                <img src="{{{asset('img/wethefest.jpg')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">WE THE FEST 2023</h6>
                <p class="card-text">We The Fest is an annual music, art, fashion and food festival held in Jakarta.
                    In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>23</h2>
                    <p>July<br>2023</p>
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
