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
            <div class="">
                <div class="col-sm-8 col-md-5 py-1">
                        <h4 class="text-info">
                            @section('page')
                                Home
                            @show
                        </h4>
                </div>
                <div class="col-sm-5 py-1">
                    <ul class="list-group-horizontal-md ps-0 mb-1" style="display: flex;list-style: none">
                        <li class="nav-item" style="margin-right: 10px;">
                            <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3 " >
                                <a href="{{route('home')}}" class="nav-link link-light">Home</a>
                            </button>
                        </li>
                        @if(\Illuminate\Support\Facades\Cookie::get('name'))
                            <li class="nav-item" style="margin-right: 10px;">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="/user" class="nav-link link-light">{{\Illuminate\Support\Facades\Cookie::get('name')}}</a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="{{route('car.create')}}" class="nav-link link-light">Додати авто</a>
                                </button>
                            </li>
                        @else
                            <li class="nav-item" style="margin-right: 10px;">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="/user/login" class="nav-link link-light">Login</a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="bg-transparent border-1 border-light border-opacity-50 rounded-3" >
                                    <a href="/user/singup" class="nav-link link-light">Sing Up</a>
                                </button>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
