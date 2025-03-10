<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/svg/logo.svg') }}" alt="logo">
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <img src="{{ asset('assets/svg/log-out-svgrepo-com.svg') }}">
                    </a>
                </li>
            </ul>
        </form>
    </nav>
</header>
