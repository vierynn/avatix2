@extends('template')

@section('title', 'Book Page Detail')

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
                    <a href="/bookdetail"><button type="button" class="btn btn-light btn-booked2">Book</button></a>
                </form>
            </div>
            <div class="date-concert" style="margin-left: 870px; margin-top: 108px">
                <p style="color: grey; text-align: right"><b>SATURDAY, 11 March 2023 <br>SUNDAY, 12 March 2023</b></p>
            </div>
        </div>
        <hr style="margin-top: 20px; width: 1400px">
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
                <img src="{{asset('img/seatplan_blackpink.jpg')}}" alt="">
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample" style="width: 1380px; margin-top: 20px">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <b>Terms & Conditions</b>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ol class="terms">
                        <li>By the regulations listed on the Circular (SE) Task Force for Handling Covid-19 20/2022, all spectators must have received complete vaccination, especially spectators aged 18 years and over who must have received a booster vaccine.</li>
                        <li>The promoter will impose additional provisions in the future related to the health protocol by the requirements set by the Government of the Republic of Indonesia.</li>
                        <li>If you purchase tickets for this event, it is considered to have read, understood, and approve all the terms & conditions of the event.</li>
                        <li>Official Avatix Transactions are only done through the Avatix website and application. We are not responsible for transactions outside the website and the Avatix application.</li>
                        <li>Avatix only acts as a ticket seller agent in this case. Hence, things that arise in connection with the event, including but not limited to the use of tickets, are entirely the responsibility between buyers and event promoters.</li>
                        <li>Prices include taxes.</li>
                        <li>Tickets purchased cannot be returned and are non-refundable.</li>
                        <li>Tickets that have been purchased cannot be replaced.</li>
                        <li>Buyers are required to fill in personal data when ordering.</li>
                        <li>Ticket sales can be stopped at any time or started by Avatix by the policies of the promoter or Avatix.</li>
                        <li>Visitors must have been vaccinated and have applications for protection.</li>
                        <li>Visitors must wear a mask during the event. 13. Visitors are required to maintain the prevailing health protocol.</li>
                        <li>Adults must accompany children under the age of 12 years. One adult can accompany a maximum of 2 children under the age of 12 years.</li>
                    </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <b>How to Exchange BLACKPINK 'BORN PINK' Concert Tickets  in Jakarta</b>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ol class="terms">
                        <li>Ticket Redemption Locations will be announced as the concert date approaches. Show the e-ticket received via email or on the "History->Active" page on the Avatix application to the field officer to scan the QR Code.</li>
                        <li>Adjust the brightness level of the cellphone screen before showing the QR Code.</li>
                        <li>Must show a valid identity card. For customers who are under 17 years old and do not have an identity card, a student card can be replaced.</li>
                        <li>If the ticket exchange will be represented, then it is mandatory to bring a power of attorney on behalf of the buyer (name must match what is written on the e-ticket) as well as photocopies of the identity cards of the giver and attorney.</li>
                        <li>Customers must wear masks, bring personal hand sanitizers, and comply with all health protocols during the event.</li>
                    </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <b>How to Cancel Booking Your Tickets</b>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p style="color: grey">If there are special conditions, such as the event being canceled by the promoter or the attraction not operating, you will get a notification from tiket.com to request a refund. Refund funds will be returned as Ovo balance unless you pay for the order with a credit card or Pay later ticket.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
<x-footer/>
@endsection()