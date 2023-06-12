@extends('template')

@section('title', 'Book Page')

@section('content')

<x-navbar/>
<body>
    <div class="content-book">
        <div class="content d-flex">
            <div class="name-booked position-relative">
                <h3>{{$concert->artist}}{{$concert->name}}</h3>
                <p style="color: grey"><b>{{$concert->city}}</b></p>
                <p style="color: red"><b>Non-Refundable</b></p>
                <form action="btn-book">
                    <a href="/bookdetail"><button type="button" class="btn btn-light btn-booked2">Book</button></a>
                </form>
            </div>
            <div class="description-concert position absolute">
                <hr style="width: 700px">
                <h5 class="mb-3">Description</h5>
                <p>{{$concert->description}}</p>
            </div>
            <div class="poster position-absolute" style="margin-left: 730px;">
                <img src="{{$concert->image_path}}" alt="">
            </div>
        </div>
        <hr style="margin-top: 30px; width: 1400px">
        <div class="information">
            <h5 style="margin-bottom: 15px">Information</h5>
            <div class="information-content d-flex">
                <div class="date-concert">
                    <p style="margin-bottom: 0px;"><b>DATE</b></p>
                    <p>{{$concert->day}}, {{$concert->date}} {{$concert->month}} {{$concert->year}} {{$concert->start_time}} </p>
                </div>
                <div class="location-concert">
                    <p style="margin-bottom: 0px;"><b>LOCATION</b></p>
                    <p>{{$concert->place}}</p>
                </div>
                <div class="duration-concert">
                    <p style="margin-bottom: 0px;"><b>DURATION</b></p>
                    <p>{{$concert->duration}}</p>
                </div>
            </div>
        </div>
        <hr style="margin-top: 30px; width: 1400px">
        <div class="price-list-content">
            <div class="price-list-text">
                <h5 style="margin-bottom: 15px;">PRICELIST</h5>
                <P>VIP  : IDR 3.800.000
                    PLATINUM: IDR 3.400.000
                    CAT 1 : IDR 2.900.000
                    CAT 2: IDR 2.600.000
                    CAT 3: IDR 2.100.000
                    CAT 4: IDR 1.350.000</P>
            </div>
            <div class="seatplan-img">
                <img src="{{$concert->seatplan_path}}" alt="">
            </div>
        </div>

    </div>
</body>
<x-footer/>
@endsection()
