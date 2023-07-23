<nav class="navbar px-5 navbar-expand-lg main-color">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#"><img src="/assets/img/LOGOijo.jpg" style="width:50%" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active text-light" aria-current="page" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/admin/travel">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/admin/destinasi">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/admin/homestay">Homestay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/admin/kuliner">Culinary</a>
                </li>
            </ul>
        </div>

        <div class="nav-item dropdown text-light">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/order">Orders</a></li>
                <hr>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item" href="#">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
