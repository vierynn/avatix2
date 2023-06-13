@extends('template')

@section('title', 'Payment')

@section('content')

<x-navbar/>

<body>
    <div>
        <h4 style="margin-top: 50px; margin-left: 92px;">{{$ticket->concerts->artist}}{{$ticket->concerts->name}}</h4>
    </div>
    <div>
        <h6 style="margin-left: 92px; color: #606060; display: inline-block; line-height: 60%;">{{$ticket->concerts->city}}</h6>
        <p style="display: inline-block; margin-left: 617px; line-height: 60%;"><small>{{$ticket->concerts->day}}, {{$ticket->concerts->date}} {{$ticket->concerts->month}} {{$ticket->concerts->year}} {{$ticket->concerts->start_time}}</small></p>
    </div>
    <div>
        <h6 style="margin-left: 92px; color: red; display: inline-block; line-height: 60%;"><b>Non-Refundable</b></h6>
        <p style="display: inline-block; margin-left: 715.5px; line-height: 60%;"></p>
    </div>

    <div class="purchase-line-1"></div>

    <div class="container p-5 my-5" style="background-color: white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="width: 50%; margin-left: 25px; margin-top: -40px;">
                    <div class="bornpink-img">
                        <img src="{{asset('img/bornpink.png')}}" alt="">
                    </div>
                    <br>
                    <div>
                        <b><p style="display: inline-block; margin-left: 10px">Payment Details</p></b>
                        <img src="{{asset('img/dropdown-arrow.png')}}" alt="" class="dropdown-arrow-purchase">
                    </div>
                    <div class="payment-details-line"></div>
                    <form action="post" style="margin-left: 10px">
                        <div class="form-group">
                            <label for="paymentmethod" style="font-size: 14px; margin-bottom: 5px;">Select Payment Method</label>
                            <select class="form-select" aria-label="Default select example" name="paymentmethod" id="form-purchase" required>
                                <option selected></option>
                                <option value="mastercard" style="position: relative;"><img src="{{asset('img/mastercard.png')}}" alt="" class="payment-method-logo">Mastercard Visa</option>
                                <option value="ovo"><img src="{{asset('img/ovo.png')}}" alt="" class="payment-method-logo">Ovo</option>
                                <option value="gopay"><img src="{{asset('img/gopay.png')}}" alt="" class="payment-method-logo">Gopay</option>
                                <option value="dana"><img src="{{asset('img/dana.png')}}" alt="" class="payment-method-logo">Dana</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carddetail" style="font-size: 14px; margin-bottom: 5px;">Card Detail</label>
                            <input class="form-control" type="text" name="carddetail" id="form-purchase">
                        </div>
                        <div class="form-group">
                            <label for="cardholder" style="font-size: 14px; margin-bottom: 5px;">Card Holder</label>
                            <input class="form-control" type="text" name="cardholder" id="form-purchase">
                        </div>
                        <div class="form-group">
                            <label for="promocode" style="font-size: 14px; margin-bottom: 5px;">Enter Promo Code</label>
                            <input class="form-control" type="text" name="promocode" id="form-purchase">
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 border" style="width: 41%; height: 380px; margin-left: 30px; margin-top: -40px; border-radius: 5px">
                    <form action="post" style="margin-left: 25px; margin-top: 25px;">
                        <div class="form-group">
                            <label for="seat" style="font-size: 14px; margin-bottom: 5px;">Select Seat</label>
                            <p>{{$ticket->category}}</p>
                        </div>
                        <div class="form-group">
                            <label for="people" style="font-size: 14px; margin-bottom: 5px;">Number of People</label>
                            <input onchange="purchase()" class="form-control" type="number" name="people" id="people" style="width: 60px;" min="1" max="4" style="border-color: black; border-width: 1px; width: 40%; margin-bottom: 5px;">
                        </div>
                        <br>
                        <div style="line-height: 8px">
                            <p style="font-size: 14px; display: inline-block;">Ticket Price</p>
                            <input type="hidden" id="price" value="{{$ticket->price}}">
                            <input type="text" id="result">
                        </div>
                        <div style="line-height: 8px">
                            <p style="font-size: 12px; display: inline-block;">Admin</p>
                            <input type="text" id="admin" value="{{$ticket->price}}">
                        </div>
                        <div class="purchase-line-2"></div>
                        <div style="line-height: 8px">
                            <p style="font-size: 16px; display: inline-block;"><b>Total Price</b></p>
                            <input type="text" id="total">
                        </div>
                            <a href="/history"><button type="submit" class="purchase-btn">PURCHASE NOW</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<x-footer/>

@endsection()
