<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <i class="ni ni-tv-2 {{ Request::routeIs('dashboard') ? 'text-primary' : '' }}"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('profile.edit') ? 'active' : '' }} " href="#navbar-examples"
                        data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fas fa-users-cog"></i>
                        <span class="nav-link-text">{{ __('Profile Management') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('User profile') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    {{ __('User Management') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeis('slider') ? 'active' : '' }} " href="#navbar-examples"
                        data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fas fa-screwdriver"></i>
                        <span class="nav-link-text">{{ __('Website Settings') }}</span>
                    </a>

                    <div class="collapse {{ Request::routeis('slider') ? 'show' : '' }}" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.Homeslider.slider') }}">
                                    {{ __('Home Slider') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.Contact.contact') }}">
                                    {{ __('Contact') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.About.about') }}">
                                    {{ __('About') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.OurTeam.teams') }}">
                                    {{ __('Our Team') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.EditorPic.editorpic') }}">
                                    {{ __('Editors Pic') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.Features.feature') }}">
                                    {{ __('Features') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('web-settings.Menu.menu') }}">
                                    {{ __('Menu Items') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('stock') ? 'active' : '' }} " href="#navbar-examples"
                        data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fab fa-opencart"></i>
                        <span class="nav-link-text">{{ __('Stock Management') }}</span>
                    </a>

                    <div class="collapse " id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('create/stock') }}">
                                    {{ __('Manage Stock') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stock-settings.delivery.delivery') }}">
                                    {{ __('Delivery Places') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stock-settings.categories.category') }}">
                                    {{ __('Categories') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stock-settings.type.type') }}">
                                    {{ __('Types') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                {{-- <li class="nav-item mb-5" style="position: absolute; bottom: 0;">
                    <a class="nav-link" href="https://argon-dashboard-pro-laravel.creative-tim.com/docs/foundation/icons.html"
                        target="_blank">
                        <i class="ni ni-watch-time"></i>Visit Website
                    </a>
                </li> --}}
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted ">Quick Access</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">

                <li class="nav-item {{ Route::is('web-settings.offerbox.offer') ? 'active' : '' }} ">
                    <a class="nav-link"
                href="{{route('web-settings.offerbox.offer')}}">
                        <i class="ni ni-paper-diploma {{ Route::is('web-settings.offerbox.offer') ? 'text-primary' : '' }} "></i> OfferBox
                    </a>
                </li>

                <li class="nav-item {{ Route::is('web-settings.Hometimer.hometimer') ? 'active' : '' }}">
                        <a class="nav-link"
                    href="{{route('web-settings.Hometimer.hometimer')}}">
                            <i class="ni ni-time-alarm {{ Route::is('web-settings.Hometimer.hometimer') ? 'text-primary' : '' }}"></i> Make a offer Timer
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('web-settings.Review.reviews') ? 'active' : '' }}">
                            <a class="nav-link"
                        href="{{route('web-settings.Review.reviews')}}">
                                <i class="ni ni-satisfied {{ Route::is('web-settings.Review.reviews') ? 'text-primary' : '' }}"></i> Manage Reviews
                            </a>
                        </li>
                        <li class="nav-item {{ Route::is('web-settings.Testimonials.testimonials') ? 'active' : '' }}">
                                <a class="nav-link"
                            href="{{route('web-settings.Testimonials.testimonials')}}">
                                    <i class="ni ni-trophy {{ Route::is('web-settings.Testimonials.testimonials') ? 'text-primary' : '' }}"></i> Manage Testimonials
                                </a>
                            </li>

            </ul>
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted ">Order Details & Settings</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">

                <li class="nav-item {{ Route::is('orders.orders') ? 'active' : '' }} ">
                    <a class="nav-link"
                href="{{url('manage/orders')}}">
                <i class="fas fa-luggage-cart {{ Route::is('orders.orders') ? 'text-primary' : '' }}"></i> Orders
                    </a>
                </li>
                
                <li class="nav-item {{ Route::is('settings.settings') ? 'active' : '' }} ">
                        <a class="nav-link"
                    href="{{url('settings')}}">
                    <i class="fas fa-cogs {{ Route::is('settings.settings') ? 'text-primary' : '' }}"></i> Settings
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</nav>
