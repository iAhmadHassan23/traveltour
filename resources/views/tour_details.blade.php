@extends('layouts.master')
@section('title', 'Travel Tour')
@section('style')
@endsection
@section('ogimage', 'https://ozcleaningperth.com.au/assets/images/home-banner.jpg')
@section('mainContent')



<div class="container mx-auto max-w-screen-xl px-2 my-4">
    <div class="mb-4">
        <nav aria-label="Breadcrumb" class="overflow-x-auto">
            <ul class="flex text-sm text-gray-700 whitespace-nowrap">
                <li class="flex items-center"><a class="hover:text-yellow-500 transition duration-200" href="/" data-discover="true">Home</a><span class="mx-2 text-gray-400">/</span></li>
                <li class="flex items-center"><a class="hover:text-yellow-500 transition duration-200" href="/adventure-trips/" data-discover="true">@if(isset($tour->tour_category)) {{$tour->tour_category->title}} @endif</a><span class="mx-2 text-gray-400">/</span></li>
                <li class="flex items-center"><span class="font-bold">{{ $tour->title ?? ''}}</span></li>
            </ul>
        </nav>
    </div>
    <div class="hidden md:grid grid-cols-2 -m-1">
        @if($media && isset($media->full_image))
        <div class="h-96 m-1 bg-gray-200 rounded-2xl" style="background-image: url('{{ asset('media/' . $media->full_image) }}'); background-size: cover; background-position: center center;"></div>
        @endif
        <div class="grid grid-cols-2">
            <div class="bg-gray-200 rounded-2xl m-1" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d96401d.webp&quot;); background-size: cover; background-position: center center;"></div>
            <div class="bg-gray-200 rounded-2xl m-1" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d95f6e5.webp&quot;); background-size: cover; background-position: center center;"></div>
            <div class="bg-gray-200 rounded-2xl m-1" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d96224e.webp&quot;); background-size: cover; background-position: center center;"></div>
            <div class="bg-gray-200 rounded-2xl m-1" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d95a754.webp&quot;); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
    <div class="block md:hidden relative">
        <div class="absolute left-2 z-30 h-full flex items-center md:px-4">
            <button class="photos-button-prev flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full" aria-label="Previous">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                </svg>
            </button>
        </div>
        <div class="absolute right-2 z-30 h-full flex items-center md:px-4">
            <button class="photos-button-next flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full" aria-label="Next">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                </svg>
            </button>
        </div>
        <div class="swiper swiper-initialized swiper-horizontal swiper-ios">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms;">
                <div class="swiper-slide" data-swiper-slide-index="0">
                    <div class="h-96 rounded-2xl" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d95a754.webp&quot;); background-size: cover; background-position: center center;"></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="1">
                    <div class="h-96 rounded-2xl" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d96401d.webp&quot;); background-size: cover; background-position: center center;"></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2">
                    <div class="h-96 rounded-2xl" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d95f6e5.webp&quot;); background-size: cover; background-position: center center;"></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3">
                    <div class="h-96 rounded-2xl" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d96224e.webp&quot;); background-size: cover; background-position: center center;"></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="4">
                    <div class="h-96 rounded-2xl" style="background-image: url(&quot;https://cdn.enjoykarado.com/packages/661b97d95a754.webp&quot;); background-size: cover; background-position: center center;"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="mt-8 text-center md:text-start">
        <h1 class="text-4xl font-extrabold underline underline-offset-4 decoration-yellow-400 decoration-4">{{ $tour->title ?? ''}}</h1>
    </div>
    <div class="grid grid-cols-10 my-8 gap-8">
        <div class="col-span-10 md:col-span-7">
            <div class="flex flex-wrap md:flex-nowrap gap-x-8 gap-y-4 md:gap-12 justify-center md:justify-start">
                <div class="w-full md:w-auto mb-4 md:mb-0">
                    <div class="flex gap-2">
                        <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative mx-auto">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                            </svg>
                            Request a Callback
                        </button>
                    </div>
                </div>
                <div class="flex gap-4 place-items-center w-auto">
                    <div class="h-10 aspect-square rounded-full flex justify-center place-items-center border-2 border-yellow-200 bg-yellow-300 text-black text-lg">
                        <span class="text-2xl">$</span>
                    </div>
                    <div>
                        <div class="text-sm mb-0 text-gray-600 line-through">Rs. {{ $tour->price ?? ''}}</div>
                        <div class="text-green-500 font-semibold">Rs. {{ $tour->discounted_price ?? ''}}</div>
                    </div>
                </div>
                <div class="flex gap-3 place-items-center font-medium w-auto">
                    <div class="h-10 aspect-square rounded-full flex justify-center place-items-center border-2 border-yellow-200 bg-yellow-300 text-black text-lg">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71-1.42 1.41z"></path>
                        </svg>
                    </div>
                    {{ $tour->number_of_days ?? '' }} Days / {{ $tour->number_of_nights ?? ''}} Nights
                </div>
                <div class="flex gap-3 place-items-center">
                    <div class="h-10 aspect-square rounded-full flex justify-center place-items-center border-2 border-yellow-200 bg-yellow-300 text-black text-lg">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm d-block mb-0">Pickup / Drop</div>
                        <div class="font-medium">@if(isset($tour->pickup)) {{ $tour->pickup}} @endif </div> / <div class="font-medium">@if(isset($tour->drop)) {{ $tour->drop}} @endif </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4 justify-center">
                    @if(isset($tour->transportation) && $tour->transportation === 1)
                    <div class="border-2 border-yellow-300 rounded-3xl text-center py-4 shadow shadow-yellow-300">
                        <img src="https://cdn.enjoykarado.com/features/654e34eb16275.webp" alt="Transportation" class="h-8 mx-auto mb-2">
                        <p>Transportation</p>
                    </div>
                    @endif
                    @if(isset($tour->meals) && $tour->meals === 1)
                    <div class="border-2 border-yellow-300 rounded-3xl text-center py-4 shadow shadow-yellow-300">
                        <img src="https://cdn.enjoykarado.com/features/654e347b56bd8.webp" alt="Meals" class="h-8 mx-auto mb-2">
                        <p>Meals</p>
                    </div>
                    @endif
                    @if(isset($tour->stay_included) && $tour->stay_included === 1)
                    <div class="border-2 border-yellow-300 rounded-3xl text-center py-4 shadow shadow-yellow-300">
                        <img src="https://cdn.enjoykarado.com/features/654e33b45f2bb.webp" alt="Stay Included" class="h-8 mx-auto mb-2">
                        <p>Stay Included</p>
                    </div>
                    @endif
                    @if(isset($tour->sight_seeing) && $tour->sight_seeing === 1)
                    <div class="border-2 border-yellow-300 rounded-3xl text-center py-4 shadow shadow-yellow-300">
                        <img src="https://cdn.enjoykarado.com/features/654e36c8ca901.webp" alt="Sight Seeing" class="h-8 mx-auto mb-2">
                        <p>Sight Seeing</p>
                    </div>
                    @endif
                    @if(isset($tour->assistance) && $tour->assistance === 1)
                    <div class="border-2 border-yellow-300 rounded-3xl text-center py-4 shadow shadow-yellow-300">
                        <img src="https://cdn.enjoykarado.com/features/657dfd3552d9d.webp" alt="24 X 7 Assistance" class="h-8 mx-auto mb-2">
                        <p>24 X 7 Assistance</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="mt-8">
                <div class="flex justify-around flex-wrap gap-4 text-xl">
                    <button class="tab-btn w-auto px-6 py-2 font-semibold border-b-4 border-yellow-400" onclick="openTab('itinerary')">Itinerary</button>
                    <button class="tab-btn w-auto px-6 py-2 font-semibold border-b-4 border-white opacity-60" onclick="openTab('highlights')">Highlights</button>
                    <button class="tab-btn w-auto px-6 py-2 font-semibold border-b-4 border-white opacity-60" onclick="openTab('other-info')">Other Info</button>
                </div>
                <div class="mt-8 tab-content" id="itinerary">
                    <div>
                        <h2 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-2">Overview</h2>
                        <div>
                            <p>{!! $tour->itenary_overview ?? '' !!}</p>
                            <!-- <p><i>Embark on an enchanting 8-day expedition through the pristine landscapes of Sikkim and Darjeeling. Begin at Bagdogra Airport or NJP Railway Station, traversing alongside the picturesque Teesta River to Gangtok. Explore the bustling streets of Gangtok, savoring local delicacies and shopping at MG Marg. Journey to iconic sights like Tsomgo Lake and Baba Mandir, then venture to the serene village of Lachung. Delve into the breathtaking Yumthang Valley before heading to Ravangla and Pelling, where cultural treasures await. Conclude in Darjeeling, witnessing the sunrise at Tiger Hill. This comprehensive journey promises unforgettable experiences amidst nature, culture, and spirituality.</i></p> -->
                        </div>
                        @if($itenary)
                        <h2 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-2 mt-8">Itinerary</h2>

                        <div class="mt-6 bg-white shadow-md rounded-lg p-6 border-l-6 border-2 border-yellow-400 flex gap-8">
                            <div class="text-center">
                                <div class="font-semibold mb-2">Day</div>
                                <div class="h-16 aspect-square rounded-full flex justify-center place-items-center border-2 border-yellow-200 bg-yellow-300 text-black text-xl font-bold">{{ $itenary->day_number ?? ''}}</div>
                            </div>
                            <div>
                                @php
                                $words = explode(' ', strip_tags($itenary->short_description));
                                $wordCount = count($words);
                                @endphp
                                <h3 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2"> {{ $itenary->title ?? ''}}</h3>
                                <div class="mt-2 text-gray-700 leading-relaxed">
                                    <div id="text-container" class="overflow-hidden transition-all duration-100 ease-in-out max-h-20" style="will-change: max-height;">
                                        <p class="inline">
                                        <div>

                                            @if($wordCount > 30)
                                            <p>
                                                {{ implode(' ', array_slice($words, 0, 30)) }}...
                                                <span class="read-more" style="display: none;">{{ implode(' ', array_slice($words, 30)) }}</span>
                                                <a class="read-more-btn text-black font-medium hover:underline ml-2 inline font-semibold"
                                                    href="javascript:void(0);">Read more</a>
                                            </p>
                                            @else
                                            {{ $itenary->short_description ?? '' }}
                                            @endif
                                        </div>
                                        <!-- <ul class="list-inside list-disc">
                                            <li>The vacation starts with the immersive experience of the Light &amp; Sound Show of freedom fighters at the Cellular Jail.
                                            </li>
                                            <li>The jail shares a glimpse of historical as well as cultural significance, which is a once-in-a-lifetime experience.
                                            </li>
                                            <li>The night brings a seaside dining experience with delicious cuisines.
                                            </li>
                                            <li>Have a restful sleep at one of the best hotels in the location.
                                            </li>
                                        </ul> -->
                                        <div><br></div>
                                        <div>
                                        </div>
                                        </p>
                                    </div>
                                    <!-- <button id="read-more-btn" class="read-more-btn text-black font-medium hover:underline ml-2 inline font-semibold">Read More</button> -->
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 w-full mt-4">

                                    @if(isset($itenary->itenaryExclusives))
                                    @php
                                    $stay = $itenary->itenaryExclusives->where('title', 'stay')->first();
                                    $transportation_by = $itenary->itenaryExclusives->where('title', 'transportation_by')->first();
                                    $meals = $itenary->itenaryExclusives->where('title', 'meals')->first();
                                    $sight_seeing = $itenary->itenaryExclusives->where('title', 'sight_seeing')->first();

                                    @endphp
                                    @if(isset($stay))
                                    <div class="col-span-1">
                                        <div class="bg-white p-4 rounded-lg shadow-md">
                                            <div class="text-sm font-medium text-muted text-uppercase flex gap-3 items-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 32C0 14.3 14.3 0 32 0L480 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 384c17.7 0 32 14.3 32 32s-14.3 32-32 32l-176 0 0-48c0-26.5-21.5-48-48-48s-48 21.5-48 48l0 48L32 512c-17.7 0-32-14.3-32-32s14.3-32 32-32L32 64C14.3 64 0 49.7 0 32zm96 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8l144 0z"></path>
                                                </svg>
                                                {{$stay->title}}
                                            </div>
                                            <h5 class="mt-1">{{$stay->heading}}</h5>
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($meals))
                                    <div class="col-span-1">
                                        <div class="bg-white p-4 rounded-lg shadow-md">
                                            <div class="text-sm font-medium text-muted text-uppercase flex gap-3 items-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M416 0C400 0 288 32 288 176l0 112c0 35.3 28.7 64 64 64l32 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 0-112 0-208c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7L80 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224.4c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16l0 134.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8L64 16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"></path>
                                                </svg>
                                                {{$meals->title}}
                                            </div>
                                            <h5 class="mt-1">{{$meals->heading}}</h5>
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($transportation_by))
                                    <div class="col-span-1">
                                        <div class="bg-white p-4 rounded-lg shadow-md">
                                            <div class="text-sm font-medium text-muted text-uppercase flex gap-3 items-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M416 320h-96c-17.6 0-32-14.4-32-32s14.4-32 32-32h96s96-107 96-160-43-96-96-96-96 43-96 96c0 25.5 22.2 63.4 45.3 96H320c-52.9 0-96 43.1-96 96s43.1 96 96 96h96c17.6 0 32 14.4 32 32s-14.4 32-32 32H185.5c-16 24.8-33.8 47.7-47.3 64H416c52.9 0 96-43.1 96-96s-43.1-96-96-96zm0-256c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zM96 256c-53 0-96 43-96 96s96 160 96 160 96-107 96-160-43-96-96-96zm0 128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path>
                                                </svg>
                                                {{$transportation_by->title}}
                                            </div>
                                            <div class="mt-1">
                                                <h5 class="mt-1">{{$transportation_by->heading}} </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @if(isset($sight_seeing))
                                <div class="grid md:grid-cols-2 justify-center gap-2 mt-4">
                                    <div class=" bg-white p-4 rounded-lg shadow-md">
                                        <div class="text-sm font-medium text-muted text-uppercase flex gap-3 items-center mb-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M128 32l32 0c17.7 0 32 14.3 32 32l0 32L96 96l0-32c0-17.7 14.3-32 32-32zm64 96l0 320c0 17.7-14.3 32-32 32L32 480c-17.7 0-32-14.3-32-32l0-59.1c0-34.6 9.4-68.6 27.2-98.3C40.9 267.8 49.7 242.4 53 216L60.5 156c2-16 15.6-28 31.8-28l99.8 0zm227.8 0c16.1 0 29.8 12 31.8 28L459 216c3.3 26.4 12.1 51.8 25.8 74.6c17.8 29.7 27.2 63.7 27.2 98.3l0 59.1c0 17.7-14.3 32-32 32l-128 0c-17.7 0-32-14.3-32-32l0-320 99.8 0zM320 64c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 32-96 0 0-32zm-32 64l0 160-64 0 0-160 64 0z"></path>
                                            </svg>
                                            {{$sight_seeing->title}}
                                        </div>
                                        <span class="me-3">{{$sight_seeing->heading}}</span>
                                    </div>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div>
                                <h2 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-2 mt-8">Inclusions</h2>
                                <div class="list-inside list-disc">
                                    <ul class="list-inside list-disc">
                                        <li>Travel as per the itinerary in a hatchback/SUV (as per group size).</li>
                                        <li>Accommodation for 7 nights, including 2 nights in Gangtok, 1 night in Lachung, 2 nights in Pelling, and 2 nights in Darjeeling.</li>
                                        <li>Meals, including breakfast for all stays and APAI (All Meals) in North Sikkim.</li>
                                        <li>Driver charges, permits, tolls, fuel, and parking charges.</li>
                                        <li>Airport/railway station pickup and drop.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h2 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-2 mt-8">Exclusions</h2>
                                <div class="list-inside list-disc">
                                    <ul class="list-inside list-disc">
                                        <li>GST (5%) applicable extra.</li>
                                        <li>Vehicle and permit charges for visiting Nathu-La Pass and Zero Point.</li>
                                        <li>Any food and beverages not included in the package, such as alcoholic drinks, mineral water, and highway meals/refreshments.</li>
                                        <li>Personal expenses like tips to drivers, entry fees to monuments and monasteries, camera/video camera charges, laundry, telephone bills, etc.</li>
                                        <li>Costs arising due to natural calamities like landslides, roadblocks, etc. (to be borne by the customer on the spot).</li>
                                        <li>Anything not mentioned in the inclusions.</li>
                                        <li>Airfares/train tickets.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 tab-content hidden" id="highlights">
                    <div class="mt-4 text-center font-semibold">
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>Cellular Jail</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>Light and Sound Show in Cellular Jail</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>Radhanagar Beach</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>Elephant Beach</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>snorkeling</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>scuba diving</p>
                        </div>
                        <div class="border-2 border-yellow-300 rounded-3xl text-center py-12 px-10 shadow shadow-yellow-300 mx-2 my-2 inline-block ">
                            <p>sea walking</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 tab-content hidden" id="other-info">
                    <div>
                        <div>
                            <h2 class="text-xl font-semibold">Things to Carry</h2>
                            <div>
                                <ul class="list-inside list-disc">
                                    <li>Sunscreen and moisturiser&nbsp;</li>
                                    <li>Suitable beach clothes</li>
                                    <li>Valid ID proof</li>
                                    <li>Camera&nbsp;</li>
                                    <li>Cash while visiting havelock or Neil Island</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Cancellation Policy</h2>
                            <div>
                                <p><span style="background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">At EnjoyKarado.com, we strive to provide a fair and transparent cancellation policy for our valued customers. Please review the following guidelines regarding cancellations and refunds for our services.</span><br></p>
                                <p><br></p>
                                <p><span style="background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);"><b>Cancellation Timelines and Charges:</b></span><br></p>
                                <ul class="list-inside list-disc">
                                    <li>If the cancellation is made 30 days before the start date of the trip 50% of the trip cost will be charged as cancellation fees</li>
                                    <li>If the cancellation is made 15-30 days before the start date of the trip 75% of the trip cost will be charged as cancellation fees</li>
                                    <li>If the cancellation is made 0-15 days before the start date of the trip 100% of the trip cost will be charged as cancellation fees&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>
                                </ul>
                                <p>Refund will be made interms of Credit note.</p>
                                <p><b>Refund:</b></p>
                                <ul class="list-inside list-disc">
                                    <li>In case of refund it will take 7-15 days to reflect amount in payment source</li>
                                </ul>
                                <p><b>Non-Refundable Deposits:</b></p>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; Some services may require a non-refundable deposit or booking fee. This amount is non-refundable under all circumstances.</p>
                                <p><br></p>
                                <p><b>COVID-19 Flexibility:</b></p>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; For cancellations related to COVID-19, we offer flexible options for rescheduling or providing credits for future travel. Reach out to us for assistance.</p>
                                <p><br></p>
                                <p><b>Special Circumstances:</b></p>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; In cases of natural disasters, political unrest, or other unforeseen events, we will work with you to provide the best possible resolution, which may include rescheduling, cancellation, or credits for future travel.</p>
                                <p><br></p>
                                <p><b>Communication of Cancellation:</b></p>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; All cancellations must be communicated to EnjoyKarado.com through email at contact@enjoykarado.com or by calling our customer support helpline.</p>
                                <p><br></p>
                                <p><b>NOTE: We recommend reviewing the cancellation policy before making a booking. By confirming a booking with EnjoyKarado.com, you acknowledge and agree to abide by this cancellation policy.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-10 md:col-span-3">
            <div class="border-2 border-yellow-300 rounded-3xl shadow shadow-yellow-300 p-10 relative">
                <h2 class="text-3xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-4">Enquire</h2>
                <div class="absolute top-2 right-2 flex gap-2 justify-center place-items-center text-white text-lg mb-4 text-center font-bold z-10 bg-green-500 px-4 py-1 rounded-3xl">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                    </svg>
                    <div>Save Rs. 7,000</div>
                </div>
                <div class="text-2xl">
                    <div class="flex place-items-center"><span class="text-sm line-through me-2 text-gray-500">Rs. 36,499</span><span class="text-green-500 font-semibold">Rs. 29,499</span></div>
                </div>
                <div class="mt-4">
                    <h4 class="font-medium mb-3">Enquire about this Package:</h4>
                    <form>
                        <div class="mb-4"><label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label><input type="text" id="name" placeholder="Enter your name" name="name" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 border-gray-300"></div>
                        <div class="mb-4"><label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label><input type="email" id="email" placeholder="Enter your email" name="email" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 border-gray-300"></div>
                        <div class="mb-4"><label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label><input type="tel" id="phone" placeholder="Enter your phone number" name="phone" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 border-gray-300"></div>
                        <div class="mb-4">
                            <label for="travelDate" class="block text-sm font-medium text-gray-700 mb-1">Choose Date of Travel</label>
                            <div class="react-datepicker-wrapper w-full mt-1">
                                <div class="react-datepicker__input-container"><input type="text" name="travelDate" placeholder="Choose Date of Travel" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 border-gray-300" value=""></div>
                            </div>
                        </div>
                        <div class="mb-4"><label for="numPeople" class="block text-sm font-medium text-gray-700 mb-1">Number of People</label><input type="number" id="numPeople" placeholder="Enter number of people" name="numPeople" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 border-gray-300"></div>
                        <div class="mb-4"><label for="remarks" class="block text-sm font-medium text-gray-700 mb-1">Remarks</label><textarea name="remarks" placeholder="Enter any remarks" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 border-gray-300 "></textarea></div>
                        <div class="col-md-12 mt-3">
                            <div>
                                <div>
                                    <div class="grecaptcha-badge" data-style="bottomleft" style="width: 256px; height: 60px; display: block; transition: left 0.3s; position: fixed; bottom: 14px; left: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                        <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-ew9woicupm08" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdGzGkqAAAAADCqj4JrKmIP06qylCVG5llKC9pt&amp;co=aHR0cHM6Ly93d3cuZW5qb3lrYXJhZG8uY29tOjQ0Mw..&amp;hl=en&amp;type=image&amp;v=hbAq-YhJxOlTnqb9r_mc_r5R&amp;theme=light&amp;size=invisible&amp;badge=bottomleft&amp;cb=12p8rh6h8ymk"></iframe></div>
                                        <div class="grecaptcha-error"></div>
                                        <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                    <iframe style="display: none;"></iframe>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="bg-yellow-400 rounded-xl px-6 relative mt-6 w-full py-3 font-medium">Enquire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="relative my-14 overflow-hidden">
        <h2 class="text-2xl font-semibold underline underline-offset-2 decoration-yellow-400 decoration-2 mb-8 text-center">Similar Packages</h2>
        <div class="absolute left-0 z-30 h-full flex items-center md:px-4">
            <button class="latest-blogs-button-prev flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full" aria-label="Previous">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                </svg>
            </button>
        </div>
        <div class="absolute right-0 z-30 h-full flex items-center md:px-4">
            <button class="latest-blogs-button-next flex items-center justify-center h-8 w-8 transition duration-200 text-gray-600 hover:text-black border-2 border-gray-100 bg-white shadow-md rounded-full" aria-label="Next">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                </svg>
            </button>
        </div>
        <div class="swiper4 swiper-initialized swiper-horizontal swiper-ios px-6 swiper-backface-hidden">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active md:w-1/4" data-swiper-slide-index="0" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/recharge-in-rishikesh-yoga-meditation-adventure-4-days/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/662381f27f760.webp" alt="Recharge in Rishikesh: Yoga | Meditation | Adventure [4 Days]" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    4 Days / 3 Nights
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Uttarakhand</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Recharge in Rishikesh: Yoga | Meditation | Adventure [4 Days]</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2">
                                <div class="flex gap-1 place-items-center">
                                    Request Price
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next md:w-1/4" data-swiper-slide-index="1" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/5-days-kasol-retreat/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/660fac1793b38.webp" alt="5 Days Kasol Retreat" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    5 Days / 4 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 8,000
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Himachal Pradesh</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">5 Days Kasol Retreat</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 21,999</s><span class="text-green-500 font-semibold">Rs. 13,999</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="2" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/sikkim-symphony/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/65a3bde8d0534.webp" alt="Sikkim Symphony" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    6 Days / 5 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 2,001
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Sikkim</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Sikkim Symphony</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 26,000</s><span class="text-green-500 font-semibold">Rs. 23,999</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="3" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/agra-mathura-vrindavan-tour-package-5-days-and-4-nights-/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/66e1dd586ee15.webp" alt="Agra Mathura Vrindavan Tour Package 5 Days and 4 Nights " class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    3 Days / 2 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 7,601
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Delhi, </span><span>Uttar Pradesh</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Agra Mathura Vrindavan Tour Package 5 Days and 4 Nights </h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 18,000</s><span class="text-green-500 font-semibold">Rs. 10,399</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="4" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/gangtok-lachung-darjeeling-tour-7d/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/663dfe11252a5.webp" alt="Gangtok | Lachung | Darjeeling tour 7d" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    7 Days / 6 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 4,000
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span></span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Gangtok | Lachung | Darjeeling tour 7d</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 41,499</s><span class="text-green-500 font-semibold">Rs. 37,499</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="5" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/delhi-to-amritsar-7-days-6-nights-tour-package/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/65fab75362d85.webp" alt="Delhi to Amritsar 7 Days 6 Nights Tour Package" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    7 Days / 6 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 8,000
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Himachal Pradesh</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Delhi to Amritsar 7 Days 6 Nights Tour Package</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 42,999</s><span class="text-green-500 font-semibold">Rs. 34,999</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="6" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/rishikesh-3-days-weekend-trip/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/662296e7b3879.webp" alt="Rishikesh : 3 Days [Weekend Trip]" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    3 Days / 2 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 2,000
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Uttarakhand</span> - India</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Rishikesh : 3 Days [Weekend Trip]</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 8,000</s><span class="text-green-500 font-semibold">Rs. 6,000</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide md:w-1/4" data-swiper-slide-index="7" style="margin-right: 16px;">
                    <div>
                        <a href="/adventure-trips/discover-bhutan-7-day-adventure-tour-from-phuentsholing-to-paro/" data-discover="true">
                            <div class="relative">
                                <img src="https://cdn.enjoykarado.com/packages/65a3b7cfa6b26.webp" alt="Discover Bhutan: 7-Day Adventure Tour from Phuentsholing to Paro" class="w-full aspect-[6/7] object-cover rounded-3xl mb-2" loading="lazy">
                                <div class="absolute top-3 left-3 lg:top-2 lg:left-2 text-base lg:text-xs z-10 backdrop-blur">
                                    <div class="flex gap-2 place-items-center bg-black/30 text-white px-2 py-1 rounded-3xl">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M3 3h8v8H3zm10 0h8v8h-8zM3 13h8v8H3zm15 0h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                                        </svg>
                                        Customize
                                    </div>
                                </div>
                                <div class="flex gap-2 place-items-center absolute bottom-3 left-3 lg:bottom-2 lg:left-2 text-base lg:text-sm text-white z-10 bg-black/30 backdrop-blur px-4 py-1 rounded-3xl">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M256 23c-3.7 0-7.4.1-11.1.27l.8 17.98c3.4-.16 6.8-.25 10.3-.25 118.8 0 215 96.2 215 215s-96.2 215-215 215c-89.6 0-166.35-54.7-198.65-132.6l27.63-8.3-48.43-34.3-19.05 54.5 22.55-6.7C74.68 428.8 158.4 489 256 489c128.6 0 233-104.4 233-233S384.6 23 256 23zm-30.8 2.04c-13.3 1.75-26.1 4.6-38.6 8.48l5.6 17.09c11.4-3.54 23.3-6.15 35.4-7.75l-2.4-17.82zm-57 15.12c-12.4 5.05-24.2 11.12-35.4 18.12l9.5 15.21c10.3-6.44 21.2-12.03 32.6-16.67l-6.7-16.66zM116.4 69.5a234.139 234.139 0 0 0-29.35 26.12l13.05 12.28c8.3-8.77 17.4-16.81 27-24.06l-4.8-6.57-5.9-7.77zm69.5 8.58l-4.4 17.44 217 55.48 4.4-17.4-217-55.52zM74.07 110.5c-8.19 10.2-15.54 21.2-21.94 32.7l15.65 8.8c5.91-10.7 12.69-20.8 20.26-30.3l-13.97-11.2zm127.63 8.8c-3.9 26 2.8 55.2 14.2 79.2 6.4 13.4 14.2 25.2 21.9 33.8 4.2 4.7 8.4 8.3 12.2 10.9l-5.4 21.2c-4.6.4-10 1.6-16 3.7-10.9 3.8-23.4 10.4-35.4 19.1-21.6 15.6-41.4 37.9-50.4 62.6l167.5 42.9c3.9-26-2.8-55.2-14.2-79.2-6.4-13.4-14.2-25.2-21.9-33.8-4.2-4.7-8.4-8.3-12.2-10.9l5.4-21.2c4.5-.5 10-1.6 16-3.7 10.9-3.8 23.4-10.4 35.4-19.1 21.6-15.6 41.4-37.9 50.4-62.6l-167.5-42.9zM43.24 160.9c-5.33 12-9.7 24.4-13 37.3l17.48 4.2c3.03-11.8 7.04-23.2 11.95-34.2l-16.43-7.3zM26.2 217.5C24.11 230 23 242.9 23 256v.9l18-.2v-.7c0-12.1 1.02-24 2.95-35.6l-17.75-2.9zM113.5 361l-4.4 17.4 217 55.5 4.4-17.4-217-55.5z"></path>
                                    </svg>
                                    7 Days / 6 Nights
                                </div>
                                <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                    </svg>
                                    Save Rs. 9,000
                                </div>
                            </div>
                            <div class="text-sm font-medium mt-3 text-gray-500"><span>Phuentsholing, </span><span>Thimpu</span>... - Bhutan</div>
                            <div class="flex place-items-center mt-1 overflow-hidden h-14">
                                <h2 class="text-lg font-medium line-clamp-2">Discover Bhutan: 7-Day Adventure Tour from Phuentsholing to Paro</h2>
                            </div>
                            <div class="flex place-items-center text-sm font-medium mt-1 text-gray-500">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-yellow-500 me-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                                </svg>
                                New
                            </div>
                            <div class="mt-2"><s class="me-2 text-gray-500">Rs. 55,000</s><span class="text-green-500 font-semibold">Rs. 46,000</span></div>
                        </a>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative w-full">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                                        </svg>
                                        Request a Callback
                                    </button>
                                </div>
                            </div>
                            <div class="me-2 md:hidden">
                                <a class="flex gap-1 place-items-center justify-center rounded-xl py-2 px-4 font-bold" href="tel:+918628931277">
                                    Call Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-3 right-3 md:hidden z-50">
        <div class="flex gap-2">
            <button class="flex gap-2 place-items-center justify-center bg-yellow-400 rounded-xl py-2 px-6 font-medium relative">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480z"></path>
                </svg>
                Request a Callback
            </button>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.read-more-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const readMoreText = this.previousElementSibling;
                if (readMoreText.style.display === 'none') {
                    readMoreText.style.display = 'inline';
                    this.textContent = 'Read less';
                } else {
                    readMoreText.style.display = 'none';
                    this.textContent = 'Read more';
                }
            });
        });
    });
</script>
<script>
    function openTab(tabId) {
        // Hide all tab content
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => content.classList.add('hidden'));

        // Remove active class from all buttons
        const tabButtons = document.querySelectorAll('.tab-btn');
        tabButtons.forEach(button => {
            button.classList.remove('border-yellow-400', 'opacity-100');
            button.classList.add('border-white', 'opacity-60');
        });

        // Show the selected tab
        document.getElementById(tabId).classList.remove('hidden');

        // Set the clicked button as active
        const activeBtn = Array.from(tabButtons).find(btn => btn.getAttribute('onclick').includes(tabId));
        if (activeBtn) {
            activeBtn.classList.remove('border-white', 'opacity-60');
            activeBtn.classList.add('border-yellow-400', 'opacity-100');
        }
    }

    // Optional: Show the first tab by default on page load
    document.addEventListener('DOMContentLoaded', function() {
        openTab('itinerary');
    });
</script>
@endsection