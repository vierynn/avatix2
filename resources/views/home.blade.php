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
              <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active custom-color-active' : 'nav-link'}}" aria-current="page" href="/">All</a>
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
          </div>
          <div class="col">
            CARDS
            @yield('concert')
          </div>
          <div class="col-6">KOSONG</div>
          <div class="col">ISI FILTER</div>
        </div>
      </div>
</body>
<x-footer/>
@endsection()
