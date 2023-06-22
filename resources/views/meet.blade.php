@extends('home')

@section('concert')
<div class="cards-container">
    <div class="card mb-3 cards position-relative">
        <div class="row g-0 card-content">
            <div class="col-md-4 image-cards">
                <img src="{{{asset('img/kim_seon_ho.png')}}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cards-content">
                <h6 class="card-title">KIM SEON HO: ASIA TOUR IN JAKARTA</h6>
                <p class="card-text">The Korean artist's fanmeet schedule in Indonesia was then filled by Kim Seon-ho. After being on hiatus for about a year, the actor who will be starring in the film Sad Tropics is ready to hold a fan meeting in the Asian region in an event titled ASIA TOUR IN JAKARTA.</p>
                </div>
            </div>
            <div class="information-concert position-absolute">
                <div class="info-content">
                    <h2>3</h2>
                    <p>June<br>2023</p>
                </div>
                <div class="location">
                    <p>Tennis Indoor Senayan</p>
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
