<header class="pt-2 pb-2 bg-dark position-fixed w-100 z-2">
    <div class="navbar navbar-dark shadow-sm">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <img src="https://auto.ria.com/images/autoria-seo.png" style="height: 40px;border-bottom-left-radius: 10px;"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
                <div class="col-sm-5 py-3" style="width: 100%">
                    <ul class="list-group-horizontal-md ps-0 mb-1" style="display: flex;list-style: none">
                        <li class="nav-item" style="margin-right: 10px;">
                            <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3 " >
                                <a href="{{route('home')}}" class="nav-link link-light">Auto.RIA</a>
                            </button>
                        </li>
                        @auth
                            <li class="nav-item" style="margin-right: 10px;">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="{{route('user')}}" class="nav-link link-light">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                                </button>
                            </li>
                            <li class="nav-item" style="margin-right: auto">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="{{route('car.create')}}" class="nav-link link-light">Додати авто</a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="{{route('logout')}}" class="nav-link link-light">Вийти</a>
                                </button>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item" style="margin-right: 10px;">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="/user/login" class="nav-link link-light">Увійти</a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="/user/singup" class="nav-link link-light">Зареєструватися</a>
                                </button>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
