@extends('template')

@section('title', 'Home')

@section('content')

<x-navbar/>

<body>

<div class="container d-flex flex-column mt-4 mb-5">
    <h2 class="pb-3">Notification</h2>

    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ ('img/blackpink.png') }}" class="image rounded img-fluid p-3" style="object-fit: cover;width: 9.5vw;height:9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1">Complete Your Purchase in 3 minutes!</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            BLACKPINK: BORN PINK
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            21/03/23 13:21
        </p>
    </div>
    </div>

    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ ('img/blackpink.png') }}" class="image rounded img-fluid p-3" style="object-fit: cover;width: 9.5vw;height:9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1 text-danger">Sorry, Payment Failed!</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            BLACKPINK: BORN PINK
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            21/03/23 13:15
        </p>
    </div>
    </div>

    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ ('img/treasure.jpg') }}" class="image rounded img-fluid p-3" style="object-fit: cover;width: 9.5vw;height:9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1">Check This Out, TREASURE: HELLO in Jakarta!</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            TREASURE: HELLO
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            18/03/23 07:45
        </p>
    </div>
    </div>

    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ ('img/tickets.png') }}" class="image rounded img-fluid p-4" style="object-fit: cover;width: 9.5vw;height:9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1">Buy 2 Tickets, Get 20% Off!</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            Promo code available only for new users of avatix. Enter AVATIX23 in the voucher s...
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            15/03/23 09:13
        </p>
    </div>
    </div>

    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ ('img/stage.png') }}" class="image rounded img-fluid p-4" style="object-fit: cover;width: 9.5vw;height: 9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1">New Concerts in March!</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            Look out for the artists who are having a show soon!
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            01/03/23 12:00
        </p>
    </div>
    </div>

</div>

</body>

<x-footer/>
@endsection()
