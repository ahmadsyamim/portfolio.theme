<header class="l-header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div>
                <a href="#" class="nav__logo">Nihory</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"> <a href="#home" class="nav__link active"> Home </a></li>
                    <li class="nav__item"> <a href="#about" class="nav__link"> About </a></li>
                    <li class="nav__item"> <a href="#skills" class="nav__link"> Skills </a></li>
                    <li class="nav__item"> <a href="#services" class="nav__link"> Services </a></li>
                    <li class="nav__item"> <a href="#works" class="nav__link"> Works </a></li>
                    <li class="nav__item"> <a href="#contact" class="nav__link"> Contact </a></li>
                </ul>
            </div>
        </nav>
    </header>

{{-- <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu" data-dropdown-menu>
        {{ menu('primary', 'portfolio.partials.menu-left') }}
    </ul>

    <hr>

    <ul class="vertical menu">
        @include('portfolio.partials.menu-right')
    </ul>

    <hr>

    <ul class="menu social-icons align-center">
        {{ menu('social', 'portfolio.partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('portfolio.partials.search-box')
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                <i class="fas fa-bars"></i> <span>Menu</span>
            </a>

            <a href="#" class="search-icon-mobile float-right hide-for-medium" data-toggle-search-trigger>
                <i class="fas fa-search"></i>
            </a>

            <div class="header-logo float-left">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/') }}/images/logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
                </a>
            </div>

            <ul class="dropdown menu show-for-medium" data-dropdown-menu>
                {{ menu('primary', 'portfolio.partials.menu-left') }}
            </ul> <!-- /.menu -->
        </div>

        <div class="top-bar-right show-for-medium">
            <ul class="dropdown menu" data-dropdown-menu>
                @include('portfolio.partials.menu-right')
            </ul>
        </div>
    </div> --}}
