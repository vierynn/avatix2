@extends('template')

@section('title', 'Home')

@section('content')

<x-navbar/>
<body>
    <div class="content-book">
        <div class="content d-flex">
            <div class="name-booked position-relative">
                <h3>BLACKPINK:BORN-PINK</h3>
                <p style="color: grey"><b>JAKARTA PUSAT, INDONESIA</b></p>
                <p style="color: red"><b>Non-Refunable</b></p>
                <form action="btn-book">
                    <a href=""><button type="button" class="btn btn-light btn-booked2">Book</button></a>
                </form>
            </div>
            <div class="description-concert position absolute">
                <hr style="width: 700px">
                <h5 class="mb-3"><b>Description</b></h5>
                <p>Grup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK]. Grup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari!</p>
            </div>
            <div class="poster position-absolute" style="margin-left: 730px;">
                <img src="{{asset('img/blackpink.png')}}" alt="">
            </div>
        </div>
        <hr style="margin-top: 30px; width: 1400px">
        <div class="information">
            <h5 style="margin-bottom: 15px">Information</h5>
            <div class="information-content d-flex">
                <div class="date-concert">
                    <p style="margin-bottom: 0px;"><b>DATE</b></p>
                    <p>SATURDAY, 11 March 2023 19:00 WIB <br>SUNDAY, 12 March 2023 18:30 WIB</p>
                </div>
                <div class="location-concert">
                    <p style="margin-bottom: 0px;"><b>LOCATION</b></p>
                    <p>Gelora Bung Karno Main Stadium</p>
                </div>
                <div class="duration-concert">
                    <p style="margin-bottom: 0px;"><b>DURATION</b></p>
                    <p>2 Hours</p>
                </div>
            </div>
        </div>

    </div>
</body>
<x-footer/>
@endsection()
