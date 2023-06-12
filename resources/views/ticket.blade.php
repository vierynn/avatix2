@extends('template')

@section('title', 'Ticket')

@section('content')

<x-navbar/>
<body>
    <div class="ticket-container" style="padding: 40px; margin-left: 30px">
        <h3>BLACKPINK: BORN-PINK</h3>
        <div class="download-text d-flex" style="color: #4C9CE5;">
            <div class="image-download" style=" margin-top: 2px;">
                <img src="{{asset('img/download-img.png')}}" alt="">
            </div>
            <p style="margin-left: 5px"><b><u> Download receive to e-mail</u></b></p>
        </div>
    </div>
</body>
<x-footer/>
