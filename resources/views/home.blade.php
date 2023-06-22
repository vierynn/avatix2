@extends('template')

@section('title', 'Home')

@section('content')

<x-navbar/>
<body>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/blackpink.png')}}" class="d-block w-100 custom-size-carousel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/gopay.png')}}" class="d-block w-100 custom-size-carousel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/seventeen.png')}}" class="d-block w-100 custom-size-carousel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/coldplay.png')}}" class="d-block w-100 custom-size-carousel" alt="...">
          </div>
        </div>
      </div>
      <div class="category-bar category-box">
        <ul class="nav nav-pills category-sentence">
            <li class="nav-item">
              <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active custom-color-active' : 'nav-link'}}" aria-current="page" href="/home">All</a>
            </li>
            <li class="nav-item">
              <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'kpop' ? 'nav-link active custom-color-active' : 'nav-link'}}" href="/category/kpop">Kpop</a>
            </li>
            <li class="nav-item">
              <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'festMusic' ? 'nav-link active custom-color-active' : 'nav-link'}}" href="/category/festivalmusic">Festival Music</a>
            </li>
            <li class="nav-item">
              <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'solo' ? 'nav-link active custom-color-active' : 'nav-link'}}" href="/category/solo">Solo</a>
            </li>
            <li class="nav-item">
                <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'meet' ? 'nav-link active custom-color-active' : 'nav-link'}}" href="/category/meetandgreet">Meet&Greet</a>
              </li>
            <li class="nav-item">
                <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'pop' ? 'nav-link active custom-color-active' : 'nav-link'}}" href="/category/pop">Pop</a>
            </li>
          </ul>
      </div>
      <div class="container">
        <div class="row row-cols-4">
          <div class="col custom-col1">
            <div class="calendar">
                <div class="month"><a href="#" class="nav"><i class="fas fa-angle-left"></i></a><div>March <span class="year">2023</span></div><a href="#" class="nav"><i class="fas fa-angle-right"></i></a></div>
                <div class="days">
                  <span>Mon</span>
                  <span>Tue</span>
                  <span>Wed</span>
                  <span>Thu</span>
                  <span>Fri</span>
                  <span>Sat</span>
                  <span>Sun</span>
                </div>
                <div class="dates">
                    <button>
                      <time>1</time>
                    </button>
                    <button>
                      <time>2</time>
                    </button>
                    <button>
                      <time>3</time>
                    </button>
                    <button>
                      <time>4</time>
                    </button>
                    <button>
                      <time>5</time>
                    </button>
                    <button>
                      <time>6</time>
                    </button>
                    <button>
                      <time>7</time>
                    </button>
                    <button>
                      <time>8</time>
                    </button>
                    <button>
                      <time>9</time>
                    </button>
                    <button>
                      <time>10</time>
                    </button>
                    <button>
                      <time>11</time>
                    </button>
                    <button>
                      <time>12</time>
                    </button>
                    <button>
                      <time>13</time>
                    </button>
                    <button>
                      <time>14</time>
                    </button>
                    <button>
                      <time>15</time>
                    </button>
                    <button>
                      <time>16</time>
                    </button>
                    <button>
                      <time>17</time>
                    </button>
                    <button class="today">
                      <time>18</time>
                    </button>
                    <button>
                      <time>19</time>
                    </button>
                    <button>
                      <time>20</time>
                    </button>
                    <button>
                      <time>21</time>
                    </button>
                    <button>
                      <time>22</time>
                    </button>
                    <button>
                      <time>23</time>
                    </button>
                    <button>
                      <time>24</time>
                    </button>
                    <button>
                      <time>25</time>
                    </button>
                    <button>
                      <time>26</time>
                    </button>
                    <button>
                      <time>27</time>
                    </button>
                    <button>
                      <time>28</time>
                    </button>
                    <button>
                      <time>29</time>
                    </button>
                    <button>
                      <time>30</time>
                    </button>
                    <button>
                      <time>31</time>
                    </button>
                </div>
            </div>
            <div class="filter-box">
                <div class="filter-content">
                    <h3>Filter</h3>
                    <div class="price-range">
                        <h5>Price Range</h5>
                        <label for="customRange3" class="form-label">MIN</label>
                        <input type="range" class="form-range custom-color" min="0" max="5" step="0.5" id="customRange3 custom-color">
                    </div>
                    <div class="location-filter">
                        <h5>Location</h5>
                        <form action="">
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Jakarta
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Bali
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Yogyakarta
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Bandung
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Tangerang
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="type-filter">
                        <h5>Type</h5>
                        <form action="">
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  International
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Korean
                                </label>
                            </div>
                            <div class="form-check radio-btn-custom">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Indonesia
                                </label>
                            </div>
                        </form>
                    </div>
                    <form class="d-flex">
                        <button class="btn btn-light btn-custom" type="submit">Filter</button>
                    </form>
                </div>
            </div>
          </div>
          <div class="col custom-col2">
            <div class="search-bar">
                <div class="search-logo">
                    <img src="{{asset('img/icon-search.png')}}" alt="">
                </div>
                <div class="btn-search">
                    <button type="submit" class="btn btn-light" style="background-color: #FF45B5 !important; color: white">Search</button>
                </div>
                <div class="main">
                    <div class="form-group has-search">
                      <span class="fa fa-search form-control-feedback"></span>
                      <form action="{{route('search')}}" method="GET">
                        <input type="text" class="form-control" name="query" placeholder="Search">

                      </form>
                    </div>
                </div>
                @isset($results)
                <div class="cards-container-search">
                    @if($results->isEmpty())
                        <p>No Concert Found.</p>
                    @else
                        @foreach ($results as $result)
                        <div class="cards-container">
                            <div class="card mb-3 cards position-relative">
                                <div class="row g-0 card-content">
                                    <div class="col-md-4 image-cards">
                                        <img src="{{asset($result->image_path)}}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body cards-content">
                                            <h6 class="card-title">{{$result->artist}}{{$result->name}}</h6>
                                            <p class="card-text">{{$result->description}}</p>
                                        </div>
                                    </div>
                                    <div class="information-concert position-absolute">
                                        <div class="info-content">
                                            <h2>{{$result->date}}</h2>
                                            <p>{{$result->month}}<br>{{$result->year}}</p>
                                        </div>
                                        <div class="location">
                                            <p>{{$result->place}}</p>
                                        </div>
                                    </div>
                                    <div class="position-absolute">
                                        <form action="{{ route('bookedpage', ['id' => $result->id]) }}">
                                            <a href="{{ route('bookedpage', ['id' => $result->id]) }}"><button type="button" class="btn btn-light btn-booked">Book</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                @endisset
            </div>
            @yield('concert')
        </div>
    </div>
    <div class="terms-content">
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
            <div class="accordion-item "style="margin-bottom: 50px">
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
    </div>
</body>
<x-footer/>
@endsection()
