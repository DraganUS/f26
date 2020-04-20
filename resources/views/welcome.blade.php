<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            a{
                font-family: 'Inconsolata', monospace;
                font-weight: 400;
                font-size: 16px;
            }
            nav{

            }
            #register a{
                padding: 14px 16px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 9.5rem;
                margin: 0;
                background: #FFF;
                border: 1px solid #DADDEC;
                box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0,.02);
                border-radius: .25rem;
                line-height: 1;
                color: #2B6CDE;
                font-family: 'Inconsolata', monospace;
                font-weight: 400;
                font-size: 16px;
                text-align: center;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-decoration: none;
            }
            #register a:hover{
                background: #2b6bde;
                color: #fff
            }
            footer{
                background: #f5f6fa;
                padding: 20px 0 0;
                height: 56px;
                display: flex;
                justify-content: space-around;
            }
            footer a{
                color: #4a5872;
            }
            footer a:hover{
                color: #2B6CDE;
                text-decoration: none;
            }
            svg{
                height: 48px;
                overflow: visible;
            }
            svg:not(:root) {
                overflow: visible;
            }
            @media only screen and (max-width: 425px) {
                svg{
                    height: 26px;
                }
            }   @media only screen and (max-width: 325px) {
                svg{
                    width: 80%;
                    height: 12px;
                }
            }
        </style>
    </head>
    <body>
    <div id="app">
        <nav style="height: 80px;z-index: 1200; padding: 0 16px; border-bottom: 1px solid #DADDEC; position: sticky; top: 0; letter-spacing: 2px;" class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container">

                    <svg  viewBox="0 0 253 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title> {{ config('app.name', 'Laravel') }}</title>
                        <desc>Created by DraganUS</desc>
                        <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Desktop" transform="translate(-238.000000, -318.000000)">
                                <g id="Group-3" transform="translate(238.000000, 312.000000)">
                                    <polyline id="Path" stroke="#2B6BDE" stroke-width="5" points="20.340671 62 20.340671 13 -2.25826813e-15 13 41 13"></polyline>
                                    <path d="M84,61 C84,53.2050338 77.6183694,36.8717004 64.8551083,12 C52.2850361,36.9117722 46,53.2451055 46,61" id="Path-2" stroke="#2B6BDE" stroke-width="5"></path>
                                    <g id="Group-2" transform="translate(97.000000, 11.000000)" stroke="#2B6BDE" stroke-width="5">
                                        <polyline id="Path-4" points="3.77777778 23.3118613 31.8559515 23.3118613 34 23.3118613 34 0.624739679 34 50.5622397"></polyline>
                                        <polygon id="Path-4" points="1.25925926 23.3118613 1.25925926 0.624739679 1.25925926 50.5622397"></polygon>
                                    </g>
                                    <g id="Group" transform="translate(140.000000, 12.000000)" stroke="#2B6BDE" stroke-width="4">
                                        <polyline id="Path-5" points="0 0.533333333 14.0029616 0.533333333 28.2525532 0.533333333"></polyline>
                                        <polyline id="Path-6" points="14.1262766 1.06666667 14.1262766 47.4510256 28.2525532 47.4510256 0 47.4510256"></polyline>
                                    </g>
                                    <text id="26" font-family="BanglaSangamMN, Bangla Sangam MN" font-size="72" font-weight="normal" fill="#172745">
                                        <tspan x="178.84375" y="59">26</tspan>
                                    </text>
                                </g>
                            </g>
                        </g>
                    </svg>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="z-index:2300">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item mr-3">
{{--                                <a class="nav-link" href="{{ route('/admin/login') }}">Login</a>--}}
                                <a class="nav-link" href="/admin/login">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" id="register">
                                    <a  class="nav-link" href="/user/register">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin">
                                        Dashboard
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
            </div>
        </nav>
        <div class="mx-3 "style="z-index: 1">
            <home-main-component></home-main-component>
            <home-2-component></home-2-component>
            <home-3-component></home-3-component>
            <how-it-works-component></how-it-works-component>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div style="height: 200px"></div>
        <footer>
            <a href="">AGB</a>
            <a href="">Impressum</a>
            <a href="">Data Protection</a>
        </footer>
    </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
