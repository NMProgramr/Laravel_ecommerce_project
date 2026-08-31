<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>  Lugx</title>

    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    @yield("css")
    @vite(['resources/css/app.css'])




</head>

<body>



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route("home")}}" class="logo">
                        <img src="{{asset("assets/images/logo.png")}}" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">

                        @foreach($NAV as $key => $value)
                            <li>
                                <a href="{{ route($key) }}" class="active">{{ $value }}</a>
                            </li>
                        @endforeach

                    </ul>
                    <a class='menu-trigger'>
                        <span>منو</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

{{--main --}}


@yield("main-banner")
@yield("features")
@yield("trending")
@yield("most-played")
@yield("cta")




{{--end main --}}
<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>کلیه حقوق محفوظ است. &nbsp;&nbsp;</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
@yield("script")


</body>
</html>
