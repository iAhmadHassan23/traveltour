<a href="{{route('tour.details', [$tour->slug]) }}"
    data-discover="true">
    <div class="relative">
        @php
        if($tour->media){
        $media = json_decode($tour->media);
        }
        @endphp
        @if($media && isset($media->full_image))
        <img src="{{ asset('media/' . $media->full_image) }}" alt="Bali Honeymoon 7 Days 6 Nights Tour Package"
            class="w-full aspect-[6/7] object-cover rounded-3xl mb-2">
        @endif
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
            {{ $tour->number_of_days ?? '' }} Days / {{ $tour->number_of_nights ?? '' }} Nights
        </div>
        <div class="flex gap-1 place-items-center absolute top-3 right-3 lg:top-2 lg:right-2 text-white font-bold z-10 bg-green-500 px-3 py-1 rounded-3xl text-lg lg:text-sm">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                </path>
            </svg>
            @php
            // Remove commas and convert to float
            $price = floatval(str_replace(',', '', $tour->price));
            $discounted = floatval(str_replace(',', '', $tour->discounted_price));
            $saved_price = $discounted - $price;
            @endphp
            Save Rs. {{ $saved_price }}
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
            {{ $tour->title ?? ''}}
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
            Rs. {{ $tour->price ?? ''}}
        </s>
        <span class="text-green-500 font-semibold">
            Rs. {{ $tour->discounted_price ?? ''}}
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