<div class="contain-to-grid">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">Something</a></h1>
            </li>

            <li class="toggle-topbar menu-icon">
                <a href="#"><span>Menu</span></a>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->

            <ul class="right">
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>

            <ul class="left">
                <li><a href="{{ route('schools.index') }}">Schools</a></li>
                <li><a href="{{ route('my-tickets') }}">My Tickets</a></li>
                <li><a href="#">My Account</a></li>
            </ul>

        </section>
    </nav>
</div>
