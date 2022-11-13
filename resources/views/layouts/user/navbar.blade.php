<nav class="navbar navbar-expand-lg navbar-light fixed-top  navbar-fixed-top bg-navbar ">
    <div class="container-fluid d-flex justify-content-between">
        <a href="/homepage" class="navbar-brand ms-5 my-2" style="font-size: 12px; color: white; font-weight: 600"><img
                src="image/logo.svg" alt="logo" style="width: 21px;"> PT. Maju Bersama</a>

        <div class="nav ms-n5">
            <a href="/homepage" class="nav-item mx-4 nav-active">Halaman Utama</a>
            <a href="/listmisi" class="nav-item mx-4">Misi</a>
            <a href="#" class="nav-item mx-4">Finansial</a>

        </div>

        <div class="nav">
            <!-- <div class="link account">
                <a href="{{ route('profile') }}"><span class="iconify me-3" data-icon="clarity:avatar-line"
                        data-width="30" data-height="30" style="color: #1b2223;"></span></a>
            </div>
            <div class="link logout me-5">
                <a href="{{ route('logout') }}"><span class="iconify" data-icon="ion:log-out-outline" data-width="30"
                        data-height="30" style="color: #d60000;"></span></a>
            </div> -->

            <li class="nav-item dropdown pe-5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="iconify" data-icon="clarity:avatar-line" data-width="30" data-height="30"
                        style="color: #1b2223;"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item link account" href="{{ route('profile') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
                <!-- <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li> -->
            </li>
        </div>
    </div>
</nav>
