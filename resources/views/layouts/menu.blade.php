<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tests.index') }}" class="nav-link {{ Request::is('tests*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tests</p>
    </a>
</li>
