<nav class="navbar navbar-expand-lg navbar-dark bg-dark header-container">
    <div class="container-fluid p-2">
        <div class="logo-img">
            <img src="{{asset('img/avatix.png')}}" alt="">
        </div>
        <form class="d-flex" action="{{ route('login') }}">
            <button class="btn-primary btn-login" type="submit">Login</button>
        </form>
    </div>
</nav>