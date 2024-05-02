@extends('layouts.main')

@section('body')

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ route('login') }}"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Реєстрація</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Реєстрація</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="input__item">
                                <input type="text" name="email" value="{{old('email')}}" placeholder="Електронна пошта">
                                <span class="icon_mail"></span>
                                @error('email')
                                <div class="badge-danger"> {{ $message }}</div> @enderror
                            </div>
                            <div class="input__item">
                                <input type="text" name="name" placeholder="Нікнейм">
                                <span class="icon_profile"></span>
                                @error('name')
                                <div class="badge-danger"> {{ $message }}</div> @enderror
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Пароль">
                                <span class="icon_lock"></span>
                                @error('password')
                                <div class="badge-danger"> {{ $message }}</div> @enderror
                            </div>
                            <div class="input__item">
                                <input type="password" name="password_confirmation" placeholder="Повтор паролю">
                                <span class="icon_lock"></span>
                                @error('password_confirmation')
                                <div class="badge-danger"> {{ $message }}</div> @enderror
                            </div>
                            <button type="submit" class="site-btn">Зареєструватись</button>
                        </form>
                        <h5>Вже зареєстровані? <a href="{{ route('login') }}">Увійти!</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Login With:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

@endsection
