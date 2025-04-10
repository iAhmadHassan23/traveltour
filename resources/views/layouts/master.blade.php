<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="@yield('meta_description')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    {{-- <meta property="article:publisher" content="facebook link"/> --}}
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    @if (View::hasSection('ogimage'))
    <meta property="og:image" content="@yield('ogimage')" />
    @else
    {{-- <meta property="og:image" content="#"/> --}}
    @endif
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('meta_description')" />

    @yield('indexing')
    {!! $seo['meta'] ?? '' !!}
    <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/assets/css/slick.css" media="all">
    <link rel="stylesheet" href="/assets/css/slick-theme.css" media="all">
    <link rel="stylesheet" href="/assets/css/style.css?jjgg" media="all">
    <link rel="stylesheet" href="/assets/css/cwl-responsive.css?kjj" media="all">
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="MyWebSite">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <title>
        Traventure Club
    </title>
    <script type="module" crossorigin="" src="{{ asset('assets/index-BJmCRyBh.js') }}">
    </script>
    <link rel="stylesheet" crossorigin="" href="{{ asset('assets/index-l9KhwKPm.css') }}">
    <meta name="description" content="Embark on a virtual voyage with EnjoyKarado.com as we unveil hidden treasures, tantalize your taste buds, and inspire you to embrace the world with an open heart and an adventurous spirit. Together, let's create memories that last a lifetime. Welcome to the adventure—welcome to EnjoyKarado.com!"
        data-rh="true">
    <meta name="keywords" content="Travel Packages India, Group Trips India, Honeymoon Packages, Customized Travel, Luxury Travel, Adventure Tours India, Trekking Tours, Religious Travel India, Family Travel Packages, Kerala Tours, Himachal Pradesh Packages, Rajasthan Travel, Bhutan Tours, Bali Holidays, Dubai Packages, Thailand Tours, Nepal Travel, Andaman Islands Tours, Luxury Tours India"
        data-rh="true">
    <link rel="preload" href="https://cdn.enjoykarado.com/slider/67b4c293966d5.webp"
        as="image" type="image/webp" data-rh="true">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('style')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {!! $seo['head_scripts'] ?? '' !!}
</head>

<body>
    <script>
        // Load non-critical CSS files asynchronously
        function loadCSS(filename) {
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = filename;
            document.head.appendChild(link);
        }

        // Load non-critical CSS files after page load
        window.addEventListener("load", function() {
            loadCSS(
                "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
            loadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");

        });
    </script>
    <div class="srp-wrapper" id="srp-page-wrapper">
        <div id="roots">

            @include('layouts.header')

            @yield('mainContent')

            @include('layouts.footer')
        </div>

    </div>
    <script src="/assets/js/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script>
        $(document).ready(function() {
            const header = document.querySelector(".srp-page-header");
            const toggleClass = "is-sticky";

            window.addEventListener("scroll", () => {
                const currentScroll = window.pageYOffset;
                if (currentScroll > 50) {
                    header.classList.add(toggleClass);
                } else {
                    header.classList.remove(toggleClass);
                }
            });
        })
    </script>

    @yield('js')
    {!! $seo['footer_scripts'] ?? '' !!}
</body>

</html>