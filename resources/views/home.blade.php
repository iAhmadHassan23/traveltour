@extends('layouts.master')
@section('title', 'Travel Tour')
@section('style')
@endsection
@section('ogimage', 'https://ozcleaningperth.com.au/assets/images/home-banner.jpg')
@section('mainContent')

<div class="container mx-auto max-w-screen-xl px-2">
    <div class="main-slider w-full aspect-[1] sm:aspect-auto mt-4 mb-2">
        <div class="relative">
            <div class="absolute left-0 z-30 h-full hidden md:flex md:items-center px-2">
                <button class="mainslider-button-prev flex items-center justify-center h-8 w-8 transition duration-200 bg-white/60 hover:bg-white shadow-md rounded-full"
                    aria-label="Previous">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="absolute right-0 z-30 h-full hidden md:flex md:items-center px-2">
                <button class="mainslider-button-next flex items-center justify-center h-8 w-8 transition duration-200 bg-white/60 hover:bg-white shadow-md rounded-full"
                    aria-label="Previous">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="swiper swiper1 swiper-initialized swiper-horizontal rounded-3xl swiper-backface-hidden">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-8918px, 0px, 0px); transition-delay: 0ms;">
                    <div class="swiper-slide swiper-slide-next" style="width: 1264px; margin-right: 10px;"
                        data-swiper-slide-index="0">
                        <a class="block" href="https://www.enjoykarado.com/adventure-trips/sikkim-symphony-8-day-himalayan-expedition">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b4c2949177d.jpeg"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b4c293966d5.webp" alt="Slide 40"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide" style="width: 1264px; margin-right: 10px;" data-swiper-slide-index="1">
                        <a class="block" href="https://www.enjoykarado.com/family-trips/kashmir-winter-tour-package-6-days-5-nights">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b2041d99f03.PNG"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b2041d6e3ac.webp" alt="Slide 39"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide" style="width: 1264px; margin-right: 10px;" data-swiper-slide-index="2">
                        <a class="block" href="https://www.enjoykarado.com/leisure-luxury-trips/tirthan-valley-and-jibhi-tour-package">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b203f97414d.PNG"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b203f94c479.webp" alt="Slide 38"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide" style="width: 1264px; margin-right: 10px;" data-swiper-slide-index="3">
                        <a class="block" href="https://www.enjoykarado.com/adventure-trips/7-days-6-nights-bali-tour-package">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b203d2f3575.PNG"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b203d28349a.webp" alt="Slide 37"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide" style="width: 1264px; margin-right: 10px;" data-swiper-slide-index="4">
                        <a class="block" href="https://www.enjoykarado.com/adventure-trips/andaman-adventure-port-blair-to-havelock">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b203b566072.PNG"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b203b4ecba6.webp" alt="Slide 36"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide" style="width: 1264px; margin-right: 10px;" data-swiper-slide-index="5">
                        <a class="block" href="https://www.enjoykarado.com/domestic-trips/assam-meghalaya-arunachal-pradesh-tour-package">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67b20393cf4f9.PNG"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67b2039333621.webp" alt="Slide 35"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" style="width: 1264px; margin-right: 10px;"
                        data-swiper-slide-index="6">
                        <a class="block" href="https://www.enjoykarado.com/international-trips/5-day-dubai-and-abu-dhabi-tour-marina-cruise-burj-khalifa-desert-safari-city-tours">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67a38d2633e76.png"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67a38d26006fc.webp" alt="Slide 34"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="7"
                        style="width: 1264px; margin-right: 10px;">
                        <a class="block" href="https://www.enjoykarado.com/customize">
                            <picture>
                                <source srcset="https://cdn.enjoykarado.com/slider/67a389832793f.png"
                                    media="(max-width: 640px)">
                                <img src="https://cdn.enjoykarado.com/slider/67a3898208333.webp" alt="Slide 32"
                                    class="w-full h-auto rounded-3xl transition-opacity duration-200 shadow ease-in-out opacity-100">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet">
                    </span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="block sm:hidden" id="categories">
        <div class="mt-2 mb-6 transition duration-150 sticky top-0 z-20 bg-white/90 backdrop-blur backdrop-contrast-200">
            <div class="swiper1 swiper1-initialized swiper1-horizontal swiper1-backface-hidden">
                <div class="swiper-wrapper customSwipper" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper1-slide swiper1-slide-active w-auto" style="margin-right: 16px;">
                        <button data-category="Honeymoon Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-b-yellow-400 opacity-100">
                            <img src="https://cdn.enjoykarado.com/categories/icons/67800831f1047.webp"
                                alt="Image of Honeymoon Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                Honeymoon Trips
                            </div>
                        </button>
                    </div>
                    <div class="swiper1-slide swiper1-slide-next w-auto" style="margin-right: 16px;">
                        <button data-category="International Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-transparent opacity-60">
                            <img src="https://cdn.enjoykarado.com/categories/icons/67800724ca356.webp"
                                alt="Image of International Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                International Trips
                            </div>
                        </button>
                    </div>
                    <div class="swiper1-slide w-auto" style="margin-right: 16px;">
                        <button data-category="Domestic Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-transparent opacity-60">
                            <img src="https://cdn.enjoykarado.com/categories/icons/6778f12495366.webp"
                                alt="Image of Domestic Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                Domestic Trips
                            </div>
                        </button>
                    </div>
                    <div class="swiper1-slide w-auto" style="margin-right: 16px;">
                        <button data-category="Leisure Luxury Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-transparent opacity-60">
                            <img src="https://cdn.enjoykarado.com/categories/icons/67800776c2c59.webp"
                                alt="Image of Leisure Luxury Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                Leisure Luxury Trips
                            </div>
                        </button>
                    </div>
                    <div class="swiper1-slide w-auto" style="margin-right: 16px;">
                        <button data-category="Family Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-transparent opacity-60">
                            <img src="https://cdn.enjoykarado.com/categories/icons/6778f2cad5001.webp"
                                alt="Image of Family Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                Family Trips
                            </div>
                        </button>
                    </div>
                    <div class="swiper1-slide w-auto" style="margin-right: 16px;">
                        <button data-category="Adventure Trips" class="min-w-28 px-1 py-2 text-center border-b-4 text-black transition duration-150 hover:opacity-100 hover:border-b-yellow-400  border-transparent opacity-60">
                            <img src="https://cdn.enjoykarado.com/categories/icons/6787eab49cabf.webp"
                                alt="Image of Adventure Trips" class="h-7 w-7 mx-auto mb-2">
                            <div class="text-sm font-medium">
                                Adventure Trips
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tour-cards-wrapper" class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 gap-y-12 mt-4">
            @foreach ([
            'Honeymoon Trips' => $honeymoon_tours,
            'International Trips' => $international_tours,
            'Domestic Trips' => $domestic_tours,
            'Leisure Luxury Trips' => $leisure_luxury_tours,
            'Family Trips' => $family_tours,
            'Adventure Trips' => $adventure_tours
            ] as $category => $tours)
            @foreach ($tours as $tour)
            <div class="tour-card" data-category="{{ $category }}">
                <x-tour-card :tour="$tour" />
            </div>
            @endforeach
            @endforeach

        </div>
    </div>
    <div class="my-16">
        <div class="mb-4 text-center">
            <h2 class="text-2xl font-bold underline underline-offset-4 decoration-yellow-400 decoration-2">
                Best Offers
            </h2>
        </div>
        <div class="flex flex-wrap gap-4 gap-y-8 my-6 justify-center">
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/family-trips/kerala-adventure-munnar-thekkady-vagamon-tour/"
                    data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/65f7e0c15284d.webp" alt="Kerala Adventure: Munnar, Thekkady &amp; Vagamon Tour"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            5 Days / 4 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 2,000
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Kerala
                        </span>
                        - India
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            Kerala Adventure: Munnar, Thekkady &amp; Vagamon Tour
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z">
                            </path>
                        </svg>
                        New
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 20,250
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 18,250
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/adventure-trips/bali-island-honeymoon-7-days-package/" data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/659f7fc2c31f7.webp" alt="Bali Island Honeymoon 7 Days Package"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            6 Days / 5 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 9,000
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Bali
                        </span>
                        - Indonesia
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            Bali Island Honeymoon 7 Days Package
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z">
                            </path>
                        </svg>
                        New
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 42,999
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 33,999
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/adventure-trips/sikkim-symphony/" data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/65a3bde8d0534.webp" alt="Sikkim Symphony"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            6 Days / 5 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 2,001
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Sikkim
                        </span>
                        - India
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            Sikkim Symphony
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z">
                            </path>
                        </svg>
                        New
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 26,000
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 23,999
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-16">
        <div class="mb-4 text-center">
            <h2 class="text-2xl font-bold underline underline-offset-4 decoration-yellow-400 decoration-2">
                Trending
            </h2>
        </div>
        <div class="flex flex-wrap gap-4 gap-y-8 my-6 justify-center">
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/family-trips/northeast-nirvana/" data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/6616540719e4f.webp" alt="Northeast Nirvana"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            6 Days / 5 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 12,000
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Meghalaya
                        </span>
                        - India
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            Northeast Nirvana
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z">
                            </path>
                        </svg>
                        New
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 35,000
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 23,000
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/family-trips/7-days-6-nights-of-northeast-adventure-book-with-enjoy-karado/"
                    data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/672f810529ca5.webp" alt="7 Days, 6 Nights of Northeast Adventure – Book with Enjoy Karado"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            7 Days / 6 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 2,000
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Meghalaya
                        </span>
                        - India
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            7 Days, 6 Nights of Northeast Adventure – Book with Enjoy Karado
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                        5.00 - 2 reviews
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 24,999
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 22,999
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] w-full">
                <a href="/domestic-trips/assam-meghalaya-arunachal-pradesh-tour-package/"
                    data-discover="true">
                    <div class="relative">
                        <img src="https://cdn.enjoykarado.com/packages/672f802d78ca0.webp" alt="Assam Meghalaya Arunachal Pradesh Tour Package"
                            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                        <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                            <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z">
                                    </path>
                                    <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z">
                                    </path>
                                </svg>
                                Customize
                            </div>
                        </div>
                        <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z">
                                </path>
                            </svg>
                            11 Days / 10 Nights
                        </div>
                        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                </path>
                            </svg>
                            Save Rs. 1,800
                        </div>
                    </div>
                    <div class="text-sm font-medium mt-3 text-gray-500">
                        <span>
                            Arunachal Pradesh,
                        </span>
                        <span>
                            Assam
                        </span>
                        ... - India
                    </div>
                    <div class="flex place-items-center mt-1 overflow-hidden h-14">
                        <h2 class="text-lg font-medium line-clamp-2">
                            Assam Meghalaya Arunachal Pradesh Tour Package
                        </h2>
                    </div>
                    <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                            class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                        4.75 - 4 reviews
                    </div>
                    <div class="mt-2">
                        <s class="me-2 text-gray-500">
                            Rs. 56,299
                        </s>
                        <span class="text-green-500 font-semibold">
                            Rs. 54,499
                        </span>
                    </div>
                </a>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <div class="flex gap-2">
                            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z">
                                    </path>
                                </svg>
                                Request a Callback
                            </button>
                        </div>
                    </div>
                    <div class="me-2 md:hidden">
                        <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold"
                            href="tel:+918628931277">
                            Call Us
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z">
                                </path>
                                <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-16 bg-yellow-50 py-16">
    <div class="container mx-auto max-w-screen-xl px-2">
        <img src="https://traventureclub.com/wp-content/uploads/2025/03/Header-Logo-1024x233.png" width="180" alt="Enjoy Kara Do Recent Trips Logo"
            class="mx-auto mb-6">
        <h2 class="text-2xl font-bold text-center underline underline-offset-2 decoration-yellow-400">
            Recent Trips
        </h2>
        <p class="text-gray-600 text-center mt-3 max-w-4xl mx-auto">
            Check out the recent trips of our customers, featuring images and travel
            dates. Celebrate their journeys and get inspired for your next adventure
            with us!
        </p>
        <div class="relative mt-8 h-custom">
            <div class="absolute left-0 z-30 h-full flex items-center md:px-4">
                <button class="recent-trips-button-prev flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full"
                    aria-label="Previous">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="absolute right-0 z-30 h-full flex items-center md:px-4">
                <button class="recent-trips-button-next flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full"
                    aria-label="Next">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="swiper swiper3 swiper-initialized swiper-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(-440px, 0px, 0px);">
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="8" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/677930346f25c.webp" alt="Kerala &amp; Under Sea"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Kerala &amp; Under Sea
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="9" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fb8ae4196.webp" alt="Kerala"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Kerala
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="10" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fdee0404f.webp" alt="Andaman"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Andaman
                        </h3>
                    </div>
                    <div class="swiper-slide swiper-slide-prev  md:w-56" data-swiper-slide-index="11"
                        style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fc85e0ded.webp" alt="Jibhi"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Jibhi
                        </h3>
                    </div>
                    <div class="swiper-slide swiper-slide-active  md:w-56" data-swiper-slide-index="0"
                        style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/67790123c5d2f.webp" alt="Manali"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Manali
                        </h3>
                    </div>
                    <div class="swiper-slide swiper-slide-next  md:w-56" data-swiper-slide-index="1"
                        style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/67792f9d86efe.webp" alt="Bali &amp; Ladakh"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Bali &amp; Ladakh
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="2" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fe54d14b8.webp" alt="Himachal"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Himachal
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="3" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/677900e8a3653.webp" alt="Dharamshala"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Dharamshala
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="4" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fcf54e984.webp" alt="Darjeeling"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Darjeeling
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="5" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778ffe204f24.webp" alt="Kashmir"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Kashmir
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="6" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/6778fb18b3ef1.webp" alt="Ladakh"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Ladakh
                        </h3>
                    </div>
                    <div class="swiper-slide  md:w-56" data-swiper-slide-index="7" style="margin-right: 16px;">
                        <img src="https://cdn.enjoykarado.com/gallery/67793064edbf9.webp" alt="Himachal &amp; Kashmir"
                            class=" md:w-56 aspect-[4/6] object-cover rounded-3xl border-r-4 border-b-4 border-yellow-400">
                        <h3 class="mt-2 font-medium text-center">
                            Himachal &amp; Kashmir
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto max-w-screen-xl px-2 mb-8">
    <div class="">
        <h2 class="text-2xl font-bold text-center underline underline-offset-2 decoration-yellow-400">
            What Our Customers Say
        </h2>
        <p class="text-gray-600 text-center max-w-4xl mx-auto mt-3 mb-8">
            Hear from our happy customers about their amazing journeys.
        </p>
        <div class="relative mt-8 customHeight">
            <div class="absolute left-0 z-30 h-full flex items-center md:px-4">
                <button class="reviews-button-prev flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full"
                    aria-label="Previous">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="absolute right-0 z-30 h-full flex items-center md:px-4">
                <button class="reviews-button-next flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full"
                    aria-label="Next">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="swiper swiper2 swiper-initialized swiper-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(-453.312px, 0px, 0px);">
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="10"
                        style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Zeeshan Nadaf
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                We recently booked a Jaipur Ranthambore trip with Enjoy Kara Do, and I
                                couldn't be happier with the experience! From start to finish, the team
                                ensured a seamless journey. Our guide was incredibly knowledgeable about
                                the history and culture of both destinations, making the trip both informative
                                and enjoyable. The accommodations were comfortable, and the itinerary was
                                well-planned, allowing us to explore each site fully. I highly recommend
                                Enjoy Kara Do for anyone looking for a hassle-free and unforgettable travel
                                experience. Thank you for the memories!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev w-2/3 md:w-1/3" data-swiper-slide-index="11"
                        style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Rajeev Mishra
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                Raman ji, It was very pleasant to be part of a guest, enjoying your hospitality
                                consulting services. You tried well to offer me best what i can expect
                                from u in my odd health condition and even on tour of hill station.?Pratiyogita
                                darpan top management.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active w-2/3 md:w-1/3" data-swiper-slide-index="0"
                        style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Riya Agarwal
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                Went on my first solo trip with EnjoyKaraDo and I am 100% confident that
                                this was the best travel experience I have ever had, the safety, the views,
                                the stay, the easy booking procedure, everything was entireky taken care
                                of by the team. After coming across this page on instagram, I was fairly
                                excited to book my trip and they surely stood by what they promised.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next w-2/3 md:w-1/3" data-swiper-slide-index="1"
                        style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Nikhil Agarwal
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                I was traveling solo and booked a trip to Meghalaya and Kaziranga with
                                EKD. The accommodation was good in all the places.The local tour guide
                                was also very helpful and made sure we cover all the places. Our trip captain
                                also made sure that all the people in our group are enjoying equally. Looking
                                forward to many more trips with them.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="2" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Om Patil
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                My Gujarat-Rajasthan tour with enjoy kara do was fantastic! The well-crafted
                                itinerary, knowledgeable guides, and seamless logistics made every moment
                                memorable. From vibrant Gujarat to regal Rajasthan, the journey was a captivating
                                adventure. Personalized touches and outstanding customer service set enjoy
                                kara do apart. Highly recommend for an unforgettable experience!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="3" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Akshay Sameria
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                I've completed my Kashmir trip with my family today. I had a lot of trust
                                issues when I was thinking to take the package but these guys are completely
                                trustworthy and they value your time and money. You just tell them where
                                you want to go and let them manage everything and you just relax like me
                                ? Everything was awesome, their representative Mr. Raman lakhanpal was
                                in my touch everytime he asked me every single day that the trip was good
                                or not how was the behaviour of the hotel staff and the cab he arranged
                                for me I mean yar kaun puchta h 1 bar paise lene ke baad but he was so
                                good, kind and humble for me!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="4" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Kirti Kolay
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                Recently went on a trip planned by Enjoy Kara Do and it is etched in our
                                memories. The whole experience was extremely stress free as the complete
                                itinerary was planned out by them. The team of Enjoy Kara Do was extremely
                                compliant with our requirements and made our trip extremely relaxing.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="5" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Zeeshan Nadaf
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                We recently booked a Jaipur Ranthambore trip with Enjoy Kara Do, and I
                                couldn't be happier with the experience! From start to finish, the team
                                ensured a seamless journey. Our guide was incredibly knowledgeable about
                                the history and culture of both destinations, making the trip both informative
                                and enjoyable. The accommodations were comfortable, and the itinerary was
                                well-planned, allowing us to explore each site fully. I highly recommend
                                Enjoy Kara Do for anyone looking for a hassle-free and unforgettable travel
                                experience. Thank you for the memories!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="6" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Arjun Nair
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                I’m so glad I booked this 7-day tour of the Northeast! The stunning landscapes,
                                the warm hospitality, and the thrilling experiences like boating in Dawki
                                made it unforgettable.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="7" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Aditya Gupta
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                From seamless booking to expertly curated itineraries. The attention to
                                detail and personalized service exceeded our expectations. Our journey
                                was enriched with unforgettable memories, thanks to their knowledgeable
                                guides and top-notch accommodations. Highly recommend for anyone seeking
                                a truly remarkable travel adventure!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="8" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Gurugaurab Mishra
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                Our experience with Enjoy Kara Do in our Gangtok &amp;amp; Darjeeling
                                trip was outstanding. The coordinator was incredibly attentive, ensuring
                                smooth transitions between destinations and promptly addressing any concerns.
                                The itinerary was expertly crafted, highlighting the best of Gangtok &amp;amp;
                                Darjeeling. Accommodations exceeded expectations, offering comfortable
                                rooms with stunning views especially 3 Nights at Palri Boutique in Gangtok.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide w-2/3 md:w-1/3" data-swiper-slide-index="9" style="margin-right: 16px;">
                        <div class="bg-white border rounded-lg p-4 shadow-md flex flex-col items-center text-center">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">
                                Kaushlendra Shukla
                            </h3>
                            <p class="mt-2 text-yellow-500">
                                ★★★★★
                            </p>
                            <p class="mt-4 text-gray-600 text-center line-clamp-3">
                                Our visit to Himachal was well planned by Enjoy kara do team. Everything
                                from start to end was perfect and that too at a very reasonable price.
                                Will be going to plan our all future vacations through enjoy kara do only.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryButtons = document.querySelectorAll('.swiper1-slide button');
        const tourCards = document.querySelectorAll('.tour-card');

        // Function to show cards of a selected category
        function filterCardsByCategory(selectedCategory) {
            tourCards.forEach(card => {
                card.style.display = card.getAttribute('data-category') === selectedCategory ? 'block' : 'none';
            });

            // Highlight selected button
            categoryButtons.forEach(btn => btn.classList.remove('opacity-100', 'border-b-yellow-400'));
            document.querySelector(`button[data-category="${selectedCategory}"]`)
                .classList.add('opacity-100', 'border-b-yellow-400');
        }

        // Set default category on load
        const defaultCategory = "Honeymoon Trips";
        filterCardsByCategory(defaultCategory);

        // Add click event to each category button
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedCategory = button.getAttribute('data-category');
                filterCardsByCategory(selectedCategory);
            });
        });
    });
</script>
@endsection