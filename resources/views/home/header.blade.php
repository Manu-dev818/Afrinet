<header id="header" class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="/images/logo.jpg" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#comments">Comments</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" title="Contact Us">
                           <i class="fas fa-phone-alt me-1"></i> <!-- Email icon -->
                           <span class="d-none d-sm-inline"></span> <!-- Hidden on mobile -->
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{url('show_cart')}}">
                           <i class="fas fa-shopping-cart"></i> <!-- Font Awesome icon -->
                           <span id="cartCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                 {{ Auth::check() ? App\Models\Cart::where('user_id', Auth::id())->sum('quantity') : 0 }}
                           </span>
                        </a>
                     </li>

                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{url('show_order')}}">
                           <i class="fas fa-clipboard-list fs-5"></i>
                           <span id="orderCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65em">
                                 {{ Auth::check() ? App\Models\Order::where('user_id', Auth::id())->count() : 0 }}
                           </span><br>
                        </a>
                     </li>

                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <x-app-layout></x-app-layout>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

