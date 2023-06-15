<nav class="navbar navbar-expand-lg navbar-dark bg-dark header-container">
    <div class="container-fluid p-2">
        <div class="logo-img">
            <img src="{{asset('img/avatix.png')}}" alt="">
        </div>
    {{-- @auth --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'history' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="/history">History</a>
            </li>
            <li class="nav-item">
                <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'purchases' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="/purchase">Purchases</a>
            </li>
        </ul>
        <a href="/notification" class="link-navbar">
            <div class="notification-logo">
                <img src="{{asset('img/notification.png')}}" alt="">
            </div>
        </a>
        <a href="/profile" class="link-navbar">
            <div class="profile-logo-header">
                <div class="image-profile">
                    <img src="{{asset('img/icon-profile.png')}}" alt="">
                </div>
                <div class="user-name">
                    <p>{{Auth::user()['firstName']}}</p>
                </div>
            </div>
        </a>
        {{-- @else
        <form class="d-flex">
            <button class="btn-primary btn-login" type="submit">Login</button>
        </form>
        </div>
    @endauth --}}
    </div>
    </nav>
