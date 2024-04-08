<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profil/{{ auth()->user()->id }}">
        <i class="bi bi-people"></i>
        <span>Profile</span>
    </a>
</li><!-- End Dashboard Nav -->

{{-- Start Archive Section --}}
{{-- #---------------------# --}}
<li class="nav-heading py-2 text-secondary">ARCHIVE</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('speaking') ? 'active' : '' }}" href="/speaking">
        <i class="bi bi-person"></i>
        <span>Speaking</span>
    </a>
</li><!-- End Speaking Page Nav -->

<li class="nav-item">
    <a class="nav-link {{ Request::is('listening') ? 'active' : '' }}" href="/listening">
        <i class="bi bi-headphones"></i>
        <span>Listening</span>
    </a>
</li><!-- End Listening Page Nav -->

<li class="nav-item">
    <a class="nav-link {{ Request::is('reading') ? 'active' : '' }}" href="/reading">
        <i class="bi bi-book"></i>
        <span>Reading</span>
    </a>
</li><!-- End Reading Page Nav -->

<li class="nav-item">
    <a class="nav-link {{ Request::is('translation') ? 'active' : '' }}" href="/translation">
        <i class="bi bi-translate"></i>
        <span>Translation</span>
    </a>
</li><!-- End Translation Page Nav -->
{{-- #-------------------# --}}
{{-- End Archive Section --}}


{{-- Start Master Section --}}
{{-- #---------------------# --}}
<li class="nav-heading py-2 text-secondary">MASTER</li>

@if (Route::has('login') && Route::has('logout'))
    @auth
        @can('admin')  
        <li class="nav-item">
            <a class="nav-link {{ Request::is('data-alumni') ? 'active' : '' }}" href="/data-alumni">
                <i class="bi bi-translate"></i>
                <span>Data Alumni</span>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="nav-link button {{ Request::is('login') ? 'active' : '' }}">
                    <i class="bi bi-box-arrow-in-right"></i>Logout</button>
            </form>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li>
    @endauth
@endif

{{-- Start Master Section --}}
{{-- #---------------------# --}}
