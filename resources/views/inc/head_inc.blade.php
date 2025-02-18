@section('head')
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Информация
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item  text-white" href="#">Доставка и оплата</a></li>
                                <li><a class="dropdown-item  text-white" href="#">Контактная информация</a></li>
                                <li><a class="dropdown-item  text-white" href="#">Про нас</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="{{ route('cart') }}">Корзина</a>
                        </li>
                        @auth("web")
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="{{ route('logout') }}">Выйти</a>
                            </li>
                        @endauth
                        @guest("web")
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="{{ route('login') }}">Войти</a>
                            </li>
                        @endguest
                        
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Мой профиль
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item  text-white" href="{{ route('cart') }}">Корзина</a></li>
                                <li><a class="dropdown-item  text-white" href="{{ route('profile') }}">Личный кабинет</a>
                                </li>
                                <li><a class="dropdown-item  text-white" href="{{route ('admin.login')}}">Админ панель</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item  text-white" href="#">Выйти</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="{{ route('catalog') }}" method="get" class="d-flex" role="search">
                        <input id="searchInput" class="form-control me-2" name="name" type="search" placeholder="Поиск" aria-label="Search" value="">
                        <button class="btn btn-outline-success text-white" type="submit">Поиск</button>
                        <input type="hidden" name="category" value="{{ request()->input('category') }}">
                    </form>
                    {{-- <select id="searchResults" size="5" class="form-select mt-2" data-search-route="{{ route('catalog') }}"></select> --}}
                </div>
            </div>
        </nav>