<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://kit.fontawesome.com/5031f391b2.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <title>Bubu's Fittings</title>
</head>
<body>
    @guest
    <div class = "profile-head">
        <div class = "header">
            <div id="logo-img">
                    <a href="{{route('home')}}">
                        <img src="img/29.jpg" alt="Bubu's Fit Logo">
                    </a>
                </div>
                <div id="menu-icon">
                    <img src="logo/8666802_menu_navigation_icon.png">
                </div>
        </div>
        <div class = "auth">
            <ul>
                <a href = "{{route('signup')}}">
                    <li id = "signup">Signup</li>
                </a>

                <a href = "{{route('login')}}">
                    <li id = "signin">Login</li>
                </a>
            </ul>
        </div>
    </div>
    @else
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('blog')}}">Blog</a>
            </li>
            <li>
                <a href="{{route('shop')}}">Shop</a>
            </li>
            <li>
                <a href="#">Cart</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="{{route('home')}}">
                <img src="img/29.jpg" alt="Bubu's Fit Logo">
            </a>
        </div>
        <div id="menu-icon">
            <img src="logo/8666802_menu_navigation_icon.png">
        </div>
        <ul>
            <li>
                <a  class="active" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('blog')}}">Blog</a>
            </li>
            <li>
                <a href="{{route('shop')}}">Shop</a>
            </li>
            <li>
                <a href="#">Cart</a>
            </li>
            <li>
                <div id="search-icon">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href = "{{route('logout')}}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <img src = "{{asset('logo/signout.svg')}}" alt = "logout" />
                    </a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <img src = "{{asset('logo/signout.svg')}}" alt = "logout" />
    </div>
    @endguest
    <main>
        @yield('content')
    </main>

    <footer>
            <div id="left-footer">
                <h3>Quick links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}">Shop</a>
                        </li>
                        <li>
                            <a href="#">Cart</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="logo/5296499_fb_facebook_facebook logo_icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               <img src = "logo/4375133_logo_youtube_icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="logo/3225191_app_instagram_logo_media_popular_icon.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This Website is developed by Bubu.</p>
            </div>
        </footer>
    </main>
    <!-- <script src="main.js"></script> -->
</body>
</html>