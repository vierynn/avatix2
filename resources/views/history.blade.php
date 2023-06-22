@extends('template')

@section('title', 'History')

@section('content')

<x-navbar/>

<body>
<div class="container d-flex flex-column mt-4 mb-5">
    <div class="d-flex flex-row mb-4">
        <h4 clas="my-auto">October</h4>
        <p class="mx-2 my-auto" style="font-size:1vw;">2022</p>
    </div>

    <p class="text-muted mb-0 pb-0 px-3" style="font-size:1vw;">11/03/2023</p>
    <div class="container d-flex flex-row align-items-center mx-auto" style="width: 100%;">
        <img src="{{ ('img/blackpink.png') }}" class="image rounded img-fluid px-2 pb-2" style="object-fit: cover;width: 16vw;height:9.5vw;"alt="...">
        <div class="card-body mx-auto p-3">
            <p class="card-text mb-1" style="font-size: 0.8vw;">
                Non-Refundable
            </p>
            <p class="card-title my-1">BLANKPINK: BORN PINK</p>
            <p class="card-text mb-1" style="font-size: 1vw;">
                VIP
            </p>
            <button type="button" class="btn btn-outline-success my-1" style="font-size:0.8vw;width:15%">
                Booked
            </button>
        </div>
        <div class="d-flex flex-row">
        <img src="{{ ('img/barcode.png') }}" class="image rounded img-thumbnail img-fluid p-2" style="object-fit: cover;width: 70px;height:70px;"alt="...">
        </div>
    </div>
    <hr>

    <p class="text-muted mb-0 pb-0 px-3" style="font-size:1vw;">11/03/2023</p>
    <div class="container d-flex flex-row align-items-center mx-auto" style="width: 100%;">
        <img src="{{ ('img/seventeen.png') }}" class="image rounded img-fluid px-2 pb-2" style="object-fit: cover;width: 16vw;height:9.5vw;"alt="...">
        <div class="card-body mx-auto p-3">
            <p class="card-text mb-1" style="font-size: 0.8vw;">
                Non-Refundable
            </p>
            <p class="card-title my-1">BLANKPINK: BORN PINK</p>
            <p class="card-text mb-1" style="font-size: 1vw;">
                VIP
            </p>
            <button type="button" class="btn btn-outline-success my-1" style="font-size:0.8vw;width:15%">
                Booked
            </button>
        </div>
        <div class="d-flex flex-row">
        <img src="{{ ('img/barcode.png') }}" class="image rounded img-thumbnail img-fluid p-2" style="object-fit: cover;width: 70px;height:70px;"alt="...">
        </div>
    </div>
    <hr>
</div>
</body>

<x-footer/>
@endsection()
