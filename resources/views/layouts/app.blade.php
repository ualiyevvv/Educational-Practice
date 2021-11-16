<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<?php
    $class = "";
    if($_SERVER['REQUEST_URI']=='/')
        $class = "index-img";
?>
<body class="<?=$class?>">
<div class="beautiful">
    <main>
        <header>
            <div class="container">
                <nav class="menu">
                    <a class="menu__li" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="111" height="24" viewBox="0 0 111 24"><path d="M13.93 8.17c5-1.67 5.34-7.88.45-7.88a5.06 5.06 0 0 0-4.06 2.88l-6.6 11.42A9.54 9.54 0 0 1 2.77 16 5.24 5.24 0 0 1 4 8.62L3 7.37c-5.14 3.28-3.63 12.75 5 12.75 7.26 0 10.66-8.81 5.93-11.95zM7.87 18.23a7.06 7.06 0 0 1-3.54-.85 12.72 12.72 0 0 0 1.23-1.75l4.13-7.15.66.07c5.76 1.21 3.47 9.68-2.48 9.68zM10.51 7l2-3.4c1.79-3.09 4.08-1.27 2.85 1C14.41 6.45 13 7 10.51 7z" fill="#fff"/><path d="M110.08 13.37l-.17.19a11.55 11.55 0 0 1-4.49 3.44c.4-.64.71-1.32 1-1.84l2.71-4.65c2.29-3.89-1.42-5.19-3.92-2.95l.5-.85h-2.46l-3.84 6.66-.17.19a5.29 5.29 0 0 1-3.71 1.82l2.32-4c1.49-2.57.12-5-2.2-5-1.89 0-3.35.76-4.77 3.21l-1.2 2.1-1 1.72-.13.15c-1.77 2.05-3.49 3.68-4.58 3.68-.54 0-.85-.38-.28-1.34l3.54-6.21c1.06-1.87 0-3.21-1.32-3.21a5 5 0 0 0-3.42 1.87l3.92-6.82H84L77.13 13.4l-.14.16A15.28 15.28 0 0 1 74 16.22c.78-2.34.62-5.92 2.13-9.07l-1.85-1c-1 1.39-3.23 4.6-5.45 7.2l-.17.19c-1.77 2.05-3.49 3.68-4.58 3.68-.54 0-.85-.38-.28-1.34l2.46-4.3a2.51 2.51 0 0 0-.35-3.33l-1.34-1.63a1 1 0 0 1 .14-1.42l-1.27-1.39C62 5.06 61.92 6.45 62.8 7.59l.21.28c-1.09 1.53-2.55 3.61-4.15 5.5l-.17.19c-1.77 2.05-4 3.68-5.76 3.68-1.51 0-2.41-.94-1.28-2.93l.24-.42c1.58.66 4.56.35 6.4-2.83l.35-.61c1.32-2.27 0-4-2-4a5.19 5.19 0 0 0-4.6 2.83l-2.34 4.11-.15.17a5.24 5.24 0 0 1-3.71 1.82l2.31-4a6 6 0 0 0 .92-2.81 2.1 2.1 0 0 0-2.22-2.2 2.86 2.86 0 0 0-1.6.54l3.12-5.41h-2.5L39 13.41l-.13.15c-1.77 2.05-3.49 3.68-4.58 3.68-.54 0-.85-.38-.28-1.34l2.45-4.3a2.51 2.51 0 0 0-.35-3.33l-1.38-1.65a1 1 0 0 1 .14-1.42L33.6 3.81c-1.39 1.25-1.51 2.64-.6 3.78l.21.28c-1.09 1.53-2.55 3.61-4.15 5.5l-.17.19c-1.77 2.05-3.49 3.68-4.58 3.68-.54 0-.85-.38-.28-1.34L28 9h-1.43A2.55 2.55 0 0 0 24 6.48a5.45 5.45 0 0 0-4.2 2.83l-3.44 5.95c-1 1.82-.31 3.49 1.68 3.49a6 6 0 0 0 3.4-1.6 1.9 1.9 0 0 0 2.13 1.6c2 0 4.36-2.17 6.4-4.53C31.13 12.85 32 11.62 34 9l.32.4a1.21 1.21 0 0 1 .14 1.39l-2.6 4.51c-1 1.82-.31 3.49 1.68 3.49 1.43 0 3-1.07 4.51-2.52a2.58 2.58 0 0 0 2.83 2.62 5.43 5.43 0 0 0 4.18-2.29 4.16 4.16 0 0 0 .54 0 7.2 7.2 0 0 0 3.26-1c-.13 1.77 1.16 3.12 3.33 3.12 2.79 0 5.55-2.17 7.58-4.53 1.18-1.37 2.1-2.6 4.06-5.26l.33.4a1.21 1.21 0 0 1 .14 1.39l-2.6 4.51c-1 1.82-.31 3.49 1.68 3.49s4.36-2.17 6.4-4.53c1.39-1.6 2.62-3.33 3.49-4.48-1 2.55-.45 7.13-2.78 7.13a1.37 1.37 0 0 1-1.16-.9l-1.53.8a2.67 2.67 0 0 0 2.68 2 6.65 6.65 0 0 0 .68 0h.07A8.61 8.61 0 0 0 75 17.06l-.84 1.47h2.48L80.38 12c3.78-4.74 5.46-4.13 4.39-2.31l-3.19 5.55c-1 1.81-.3 3.49 1.68 3.49 1.43 0 3-1.07 4.52-2.53 0 3.13 4.34 3.74 7 .38h.54A6.77 6.77 0 0 0 98 16l-4.47 7.75H96l7.34-12.77c2.74-3.73 4.46-2.36 3.82-1.25l-3.71 6.42a1 1 0 0 1-1.77 0l-1.39.66a2.67 2.67 0 0 0 2.69 2h.14c3.56-.07 5.9-2.2 7.91-4.53a1.54 1.54 0 0 0-.95-.91zm-55.9-3.45c1.42-2.43 3.92-2 2.45.52l-.35.61c-1.18 2-2.76 2-3.68 1.63zm-31.46 3.87c-1.49 2.34-3 3.45-4 3.45-.54 0-.85-.38-.28-1.34l3.42-6c1.32-2.29 3.94-1.7 2.74.52zm18.48 3.35a.92.92 0 0 1-1-.94 2.76 2.76 0 0 1 .43-1.27l.87-1.51A3.61 3.61 0 0 0 43.06 16a2.3 2.3 0 0 1-1.86 1.14zm2.57-2.38a2.65 2.65 0 0 1-1-2.22c0-1.75 1.7-4.6 3.09-4.6A.94.94 0 0 1 46.75 9a3 3 0 0 1-.47 1.46zm50.42-1.23h-.12A1.45 1.45 0 0 0 92.63 15a1.62 1.62 0 0 0 .24.83c-1.16 2-4 1.6-2.5-.94l1.87-3.23 1.18-2c1.72-2.93 4.08-1.77 2.6.78z" fill="#fff"/></svg>
                    </a>
                    <!-- <a class="menu__li" href="">Информация</a> -->
                    <a class="menu__li" href="">новости </a>
                    <a class="menu__li" href="">прайс-лист</a>
                    <a class="menu__li menu__li-active" href="">магазин</a>
                    <a class="menu__li" href="">контакты</a>
                </nav>
                <ul class="header__login">
                    @guest
                    <a class="nav-link" href="{{ route('login') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M7.31 9.06l-.08.07-1.43 1.46a1.24 1.24 0 0 0-.23.32 1.17 1.17 0 0 0 .19 1.33 1.15 1.15 0 0 0 .95.37 1.18 1.18 0 0 0 .79-.37l1.85-1.86 1.72-1.72a1.15 1.15 0 0 0 .19-.27 1.11 1.11 0 0 0 .12-.6 1 1 0 0 0-.21-.58c-.14-.17-.29-.32-.44-.48L7.34 3.34a1.1 1.1 0 0 0-1-.28 1.12 1.12 0 0 0-.7.41 1.14 1.14 0 0 0-.27.67 1.19 1.19 0 0 0 .39 1l1.5 1.5.08.08H2.1a1.21 1.21 0 0 0-.72.42 1.15 1.15 0 0 0-.24 1 1.12 1.12 0 0 0 .39.62 1.14 1.14 0 0 0 .78.29h5zM12.51 8v3.93a.59.59 0 0 1-.26.5.67.67 0 0 1-.41.11h-1.27a1.18 1.18 0 0 0-.66.42 1.17 1.17 0 0 0 .21 1.67 1.1 1.1 0 0 0 .69.24h1a6 6 0 0 0 .64 0 2.32 2.32 0 0 0 .73-.24 3 3 0 0 0 .62-.42 3.14 3.14 0 0 0 .71-.86 2.88 2.88 0 0 0 .35-1.42v-8.2a2.51 2.51 0 0 0-.26-.9 3.05 3.05 0 0 0-.88-1.07 2.88 2.88 0 0 0-1.78-.62h-1.32a1.15 1.15 0 0 0-.65.37 1.12 1.12 0 0 0-.31.73 1.1 1.1 0 0 0 .18.67 1.13 1.13 0 0 0 1 .56h1.18a.62.62 0 0 1 .55.56v3.94z" fill="#fff"/><path d="M7.31 9.06h-5a1.14 1.14 0 0 1-.78-.29 1.12 1.12 0 0 1-.39-.62 1.15 1.15 0 0 1 .24-1 1.21 1.21 0 0 1 .72-.45h5.24l-.08-.08-1.5-1.5a1.19 1.19 0 0 1-.39-1 1.14 1.14 0 0 1 .27-.67 1.12 1.12 0 0 1 .7-.41 1.1 1.1 0 0 1 1 .28l3.39 3.38c.15.15.3.31.44.48a1 1 0 0 1 .21.58 1.11 1.11 0 0 1-.12.6 1.15 1.15 0 0 1-.19.27l-1.72 1.75-1.84 1.86a1.18 1.18 0 0 1-.79.37 1.15 1.15 0 0 1-.95-.37 1.17 1.17 0 0 1-.19-1.33 1.24 1.24 0 0 1 .23-.32l1.43-1.44.08-.07z" fill="#fff"/><path d="M12.51 8V4.06a.62.62 0 0 0-.51-.57h-1.18a1.13 1.13 0 0 1-1-.56 1.1 1.1 0 0 1-.18-.67 1.12 1.12 0 0 1 .36-.75 1.15 1.15 0 0 1 .65-.37h1.32a2.88 2.88 0 0 1 1.78.62 3.05 3.05 0 0 1 .85 1.04 2.51 2.51 0 0 1 .26.9v8.2a2.88 2.88 0 0 1-.35 1.42 3.14 3.14 0 0 1-.71.86 3 3 0 0 1-.62.42 2.32 2.32 0 0 1-.73.24 5.94 5.94 0 0 1-.64 0h-1a1.1 1.1 0 0 1-.69-.24 1.17 1.17 0 0 1-.21-1.6 1.18 1.18 0 0 1 .66-.42h1.27a.67.67 0 0 0 .41-.11.59.59 0 0 0 .26-.5V8.04z" fill="#fff"/></svg>
                        {{ __('Login') }}
                    </a>
                    @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">
                                    {{ __('cabinet') }}
                                </a>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </header>
        @include('layouts.errors')

        @yield('content')
    </main>
    @include('layouts.footer')
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>