<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<nav class="nav_menu">
    <x-application-mark class="logo"/>
    <ul>
        <li class="nav_menu_li"><i class="fa-solid fa-house-chimney icon_nav_li"></i><a href="/" class="nav_a">Home</a></li>
        <li class="nav_menu_li"><i class="fa-solid fa-laptop-code icon_nav_li"></i><a href="/courses" class="nav_a">Courses</a></li>
        <li class="nav_menu_li login-regis">
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Register</a>
                        @endif
                    @endauth
            @endif
        </li>  
    </ul>
</nav> 