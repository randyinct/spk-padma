    
    {{-- SIDEBAR DI DASHBOARD --}}
    
<nav
    id="sidebarMenu"
    class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is('dashboard') ? 'test' : ''}}"
                    aria-current="page"
                    href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::RouteIs('kriterias*') ? 'test' : '' }}"
                    href="{{ route('kriterias.index') }}">
                    <i class="bi bi-bank"></i>
                    Data Kriteria
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::RouteIs('alternatif*') ? 'test' : ''  }}"
                    aria-current="page"
                    href="{{ route('alternatif.index') }}">
                    <i class="bi bi-bank2"></i>
                    Data Calon Pegawai
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::RouteIs('hitung') ? 'test' : ''  }}"
                    aria-current="page"
                    href="{{ route('hitung') }}">
                    <i class="bi bi-file-earmark-diff"></i>
                    Perhitungan
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link  {{ Request::RouteIs('ranking') ? 'test' : ''  }}"
                    aria-current="page"
                    href="{{ route('ranking') }}">
                    <i class="bi bi-bar-chart-fill"></i>
                    Perangkingan
                </a>
            </li>
        </ul>
        <hr>
            <div class="dropdown mt-4">
                <a
                    href="#"
                    class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img
                        src="{{ asset('/img/user.png') }}"
                        alt=""
                        width="32"
                        height="32"
                        class="rounded-circle me-2">
                        <strong >Hi,
                            {{ Auth()->user()->name }}</strong>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-dark text-small shadow"
                        aria-labelledby="dropdownUser1">
                        <li>
                            <a
                                class="dropdown-item {{ Request::RouteIs('editProfile*') ? 'active' : '' }}"
                                href="{{ route('editProfile') }}">
                                <i class="bi bi-person-circle"></i>
                                Profile</a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item {{ Request::RouteIs('editPassword*') ? 'active' : '' }}"
                                href="{{ route('editPassword')}}">
                                <i class="bi bi-key"></i>
                                Change Password</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        class="dropdown-item"
                                        type="submit"
                                        onclick="return confirm('Are you sure you want to Logout?')">
                                        <i class="bi bi-box-arrow-left"></i>
                                        Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>