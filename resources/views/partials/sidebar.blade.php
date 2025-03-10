<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        @can('Dashboard')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : 'collapsed' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endcan

        @can('KPI')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kpi' ? 'active' : 'collapsed' }}"
                    href="{{ route('kpi') }}">
                    <i class="bi bi-file-bar-graph"></i>
                    <span>KPI Ahli</span>
                </a>
            </li>
        @endcan

        @can('FIK')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'daftarKasus' ? 'active' : 'collapsed' }}"
                    href="{{ route('daftarKasus') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Form Input Kasus</span>
                </a>
            </li>
        @endcan

        @can('DFK')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'indexDaftar' ? 'active' : 'collapsed' }}"
                    href="{{ route('indexDaftar') }}">
                    <i class="bi bi-menu-button-wide-fill"></i>
                    <span>Daftar Form Kasus</span>
                </a>
            </li>
        @endcan

        @can('Input-Persuratan')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('components*') || request()->routeIs('SPOps', 'SPTug', 'spAhli', 'nodis') ? '' : 'collapsed' }}"
                    data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Persuratan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav"
                    class="nav-content collapse {{ request()->is('components*') || request()->routeIs('SPOps', 'SPTug', 'spAhli', 'nodis') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('SPOps') }}" class="{{ request()->routeIs('SPOps') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>SP OPS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('SPTug') }}" class="{{ request()->routeIs('SPTug') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>SP TUG</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('spAhli') }}" class="{{ request()->routeIs('spAhli') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>SP AHLI</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('nodis') }}" class="{{ request()->routeIs('nodis') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>NODIS</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
        @endcan

        @can('Daftar-Persuratan')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('components1*') || request()->routeIs('printOps', 'printTug', 'printNodis', 'printAhli') ? '' : 'collapsed' }}"
                    data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Daftar Persuratan</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav"
                    class="nav-content collapse {{ request()->is('components1*') || request()->routeIs('printOps', 'printTug', 'printNodis', 'printAhli') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('printOps') }}" class="{{ request()->routeIs('printOps') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Daftar SP OPS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('printTug') }}" class="{{ request()->routeIs('printTug') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Daftar SP TUG</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('printAhli') }}" class="{{ request()->routeIs('printAhli') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Daftar SP AHLI</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('printNodis') }}"
                            class="{{ request()->routeIs('printNodis') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Daftar NODIS</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
        @endcan

        @can('Data-master')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('components2*') || request()->routeIs('dataPejabat', 'dataPetugas') ? '' : 'collapsed' }}"
                    data-bs-target="#forms-master" data-bs-toggle="collapse" href="#">
                    <i class="ri-database-2-line"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-master"
                    class="nav-content collapse {{ request()->is('components2*') || request()->routeIs('dataPejabat', 'dataPetugas', 'masterAdmin') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('dataPejabat') }}"
                            class="{{ request()->routeIs('dataPejabat') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Pejabat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dataPetugas') }}"
                            class="{{ request()->routeIs('dataPetugas') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Ahli</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('masterAdmin') }}"
                            class="{{ request()->routeIs('masterAdmin') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Admin</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
        <!-- End Forms Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('cetak') ? 'active' : 'collapsed' }}" href="{{ route('cetak') }}">
                <i class="ri-database-2-line"></i>
                <span>Hasil Cetakan</span>
            </a>
        </li> --}}

    </ul>
</aside><!-- End Sidebar-->
