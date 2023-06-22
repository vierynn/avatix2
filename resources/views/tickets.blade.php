@extends('template')

@section('title', 'Tickets')

@section('content')

<x-navbar/>
<body class="ticket-page">
    <div class="ticket-container" style="padding: 40px; margin-left: 30px">
        <h3>BLACKPINK: BORN-PINK</h3>
            <div class="download-text d-flex" style="color: #4C9CE5; margin-top:10px">
                <div class="download-email d-flex">
                    <div class="image-download" style=" margin-top: 2px;">
                        <img src="{{asset('img/download-img.png')}}" alt="">
                    </div>
                    <p style="margin-left: 5px"><b><u> Download receive to e-mail</u></b></p>
                </div>
                <div class="download-pdf d-flex" style="margin-left: 30px">
                    <div class="image-download" style=" margin-top: 2px;">
                        <img src="{{asset('img/download-img.png')}}" alt="">
                    </div>
                    <p style="margin-left: 5px"><b><u> Download Pdf</u></b></p>
                </div>
            </div>
        <div class="d-flex">
            <div class="ticket-cards" style="margin-left: 30px; margin-top: 15px">
                <div class="card" style="width: 400px;">
                    <img src="{{asset('img/blackpink.png')}}" class="card-img-top" alt="...">
                    <div class="card-body" style="padding-left: 30px; padding-right:30px; padding-top:30px;">
                        <h5 style="color: rgb(95, 95, 95); font-size: 18px">Location</h5>
                        <p class="card-text" style="font-size: 14px">Gelora Bung Karno Main Stadium</p>
                        <div class="information-ticket-page d-flex" style="margin-top: 20px">
                            <div class="class-ticket">
                                <h5 style="color: rgb(95, 95, 95); font-size: 18px">Class</h5>
                                <p style="font-size: 14px">VIP</p>
                            </div>
                            <div class="date-ticket" style="margin-left: 180px">
                                <h5 style="color: rgb(95, 95, 95); font-size: 18px">Date</h5>
                                <p style="font-size: 14px">11/03/2023</p>
                            </div>
                        </div>
                    </div>
                    <hr style="outline:dashed; width: 375px; outline-width: thin; margin-left:10px">
                    <div class="card-body" style="padding-left: 30px; padding-right: 30px;">
                        <h5 style="color: rgb(95, 95, 95); font-size: 18px">Booking Code</h5>
                        <p class="card-text" style="font-size: 14px">93840387513</p>
                        <div class="information-ticket-page d-flex" style="margin-top: 20px">
                            <div class="class-ticket">
                                <h5 style="color: rgb(95, 95, 95); font-size: 18px">Seat</h5>
                                <p style="font-size: 14px">13D,14D</p>
                            </div>
                            <div class="date-ticket" style="margin-left: 180px">
                                <h5 style="color: rgb(95, 95, 95); font-size: 18px">Gate</h5>
                                <p style="font-size: 14px">5</p>
                            </div>
                        </div>
                        <div class="barcode-img" style="margin-left: 17px; margin-top:15px; margin-bottom: 20px">
                            <img src="{{asset('img/barcode_bp.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<x-footer/>
