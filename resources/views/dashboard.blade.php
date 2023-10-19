<x-app-layout>
    {{-- <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot> --}}

    <div class="pt-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 md:px-10">
            <div class="bg-white dark:bg-white overflow-hidden sm:rounded-lg">
                <div class="flex flex-row">
                    <div class="flex flex-col lg:w-8/12 w-full gap-5">
                        <div class="flex flex-row items-center gap-5 px-4 py-6 !ml-4 w-[768px] bg-white fixed border-b-[1px] z-10 ease-out !h-12"
                            id="category-nav">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] text-zinc-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>

                            </a>
                            <a href="#" class="font-extralight text-zinc-500 hover:text-black text-[14px]">
                                For you
                            </a>
                            <a href="#"
                                class="font-light text-zinc-500 hover:text-black text-[14px]">Following</a>
                            <a href="#" class="font-light text-zinc-500 hover:text-black text-[14px]">Category
                                1</a>
                            <a href="#" class="font-light text-zinc-500 hover:text-black text-[14px]">Category
                                2</a>
                            <a href="#" class="font-light text-zinc-500 hover:text-black text-[14px]">Category
                                3</a>
                        </div>

                        {{-- CONTENT --}}
                        <div class="pt-[33px] mt-[33px]" id="content-article">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="flex flex-col">
                                    <div class="card py-3 space-y-2 px-5">
                                        <div class="card-header flex flex-row items-center gap-2">
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-7 w-7 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                            <p class="text-[14px]">Gusti Giustianto · <span
                                                    class="text-slate-500 text-[14px]">Aug
                                                    7</span></p>
                                        </div>
                                        <div class="card-body flex flex-row">
                                            <div class="card-content space-y-2 w-full">
                                                <h1 class="font-extrabold lg:text-xl md:text-lg text-md">
                                                    4 Lessons learned from using NextJS 13 in production
                                                </h1>
                                                <h3
                                                    class="lg:block md:block sm:block hidden max-w-xl text-[15px] text-slate-700">
                                                    Why You Should Not Use Next.js 13. Yes, for Next.js enthusiasts, in
                                                    this article, I will do my best to present the arguments I
                                                    encountered when using Next.js 13. I have loved Next.js, and in
                                                    fact, many of my
                                                </h3>
                                            </div>
                                            <div class="card-thumbnail flex items-center lg:w-56 justify-center">
                                                <img src="https://placehold.co/400/png" alt=""
                                                    class="w-32 h-28">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between px-4 pb-5 pt-2">
                                        <div class="flex flex-row items-center gap-3 w-full">
                                            <button
                                                class="border bg-zinc-100 rounded-full shadow-sm px-2 text-sm hover:bg-zinc-200 hover:cursor-pointer">
                                                Nextjs
                                            </button>
                                            <h4 class="text-slate-500 font-extralight text-[13px]">7 min read
                                                <span
                                                    class="lg:inline-block md-custom:inline-block sm:inline-block hidden">
                                                    ·
                                                    Based on your reading history
                                                </span>
                                            </h4>
                                        </div>
                                        <div class="tools-action flex flex-row gap-4 lg:w-56 justify-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6 text-gray-600 hover:text-red-600 hover:cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6  text-gray-600 hover:text-blue-600 hover:cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                                </svg>
                                            </span>
                                            <span>
                                                <div class="flex items-center justify-center">
                                                    <div class="relative inline-block tools-icon">
                                                        <a to="" class="hover:text-gray-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor"
                                                                class="w-6 h-6 text-gray-600 hover:text-black hover:cursor-pointer">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="flex flex-col p-4 bg-white shadow-md w-28 h-fit rounded-md z-20 absolute right-0 invisible tools-icon-item">
                                                            <ul class="list-disc space-y-2">
                                                                <li class="flex items-start">
                                                                    <a href=""
                                                                        class="font-medium text-sm text-gray-500 hover:text-black">
                                                                        Share Link </a>
                                                                </li>
                                                                <li class="flex items-start">
                                                                    <a href=""
                                                                        class="font-medium text-sm text-gray-500 hover:text-black">
                                                                        Mute User </a>
                                                                </li>
                                                                <li class="flex items-start">
                                                                    <a href=""
                                                                        class="font-medium text-sm text-gray-500 hover:text-black">
                                                                        Report </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="shadow-xs" />
                            @endfor
                        </div>

                    </div>

                    <div class="lg:w-1/3 md:w-1/3 lg:block md-custom:block hidden z-20">
                        <div class="px-5 py-5 space-y-10 lg:w-[410px] md:w-[410px] ">

                            {{-- Staff Pick --}}
                            <div class="space-y-4">
                                <h2 class="font-extrabold text-md mb-4">Staff Picks</h2>
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1">
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-7 w-7 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <p class="text-[13px] w-80 font-extrabold text-slate-800">
                                            Sara Wachter-Boettcher in Nice Work</p>
                                    </div>
                                    <p class="font-black lg:text-[15px] w-80 mt-1 md-custom:text-sm">
                                        4 Lessons learned from using NextJS 13 in production
                                    </p>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1">
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-7 w-7 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <p class="text-[13px] w-80 font-extrabold text-slate-800">
                                            Ethan Siegel in Starts With A Bang!</p>
                                    </div>
                                    <p class="font-black lg:text-[15px] w-80 mt-1 md-custom:text-sm">
                                        Attosecond spectroscopy wins 2023’s Nobel Prize in Physics
                                    </p>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1">
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-7 w-7 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <p class="text-[13px] w-80 font-extrabold text-slate-800">
                                            Jackie Colburn in Better Humans</p>
                                    </div>
                                    <p class="font-black lg:text-[15px] w-80 mt-1 md-custom:text-sm">
                                        How I Got Into And Managed to Walk Away from Burnout
                                    </p>
                                </div>

                                <div class="pt-2">
                                    <a href="#" class="text-green-600 font-medium text-sm hover:text-black ">
                                        See the full list
                                    </a>
                                </div>
                            </div>

                            {{-- Recommended Topics --}}
                            <div class="space-y-4">
                                <h2 class="font-extrabold text-md">Recommended topics</h2>

                                <div class="flex flex-wrap gap-3">
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Data Science
                                    </button>
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Self Improvement
                                    </button>
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Writing
                                    </button>
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Relationship
                                    </button>
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Machin Learning
                                    </button>
                                    <button
                                        class="border md-custom:text-[12px] lg:text-[14px] bg-slate-100 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-200 hover:cursor-pointer">
                                        Machin Learning
                                    </button>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="text-green-600 font-medium text-sm hover:text-black ">
                                        See more topics
                                    </a>
                                </div>
                            </div>

                            {{-- Who to Follow --}}
                            <div class="space-y-4">
                                <h2 class="font-extrabold text-md">Who to follow</h2>


                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-row items-center gap-3">
                                        <button
                                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="lg:h-auto w-9 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <div class="flex flex-col">
                                            <p class="lg:text-md md-custom:text-sm font-bold">Gusti Giustianto
                                            </p>
                                            <p class="text-xs lg:block md-custom:hidden hidden text-slate-700">All the
                                                advice I give
                                                is
                                                based on my own
                                                experience.
                                            </p>
                                        </div>

                                    </div>
                                    <div>
                                        <button
                                            class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-green-500 hover:ring-0 hover:cursor-pointer">
                                            Follow
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-row items-center gap-3">
                                        <button
                                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="lg:h-auto w-9 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <div class="flex flex-col">
                                            <p class="lg:text-md md-custom:text-sm font-bold">Gusti Giustianto
                                            </p>
                                            <p class="text-xs lg:block md-custom:hidden hidden text-slate-700">All the
                                                advice I give
                                                is
                                                based on my own
                                                experience.
                                            </p>
                                        </div>

                                    </div>
                                    <div>
                                        <button
                                            class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-green-500 hover:ring-0 hover:cursor-pointer">
                                            Follow
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-row items-center gap-3">
                                        <button
                                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="lg:h-auto w-9 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <div class="flex flex-col">
                                            <p class="lg:text-md md-custom:text-sm font-bold">Gusti Giustianto
                                            </p>
                                            <p class="text-xs lg:block md-custom:hidden hidden text-slate-700">All the
                                                advice I give
                                                is
                                                based on my own
                                                experience.
                                            </p>
                                        </div>

                                    </div>
                                    <div>
                                        <button
                                            class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-green-500 hover:ring-0 hover:cursor-pointer">
                                            Follow
                                        </button>
                                    </div>
                                </div>


                                <div class="pt-2">
                                    <a href="#" class="text-green-600 font-medium text-sm hover:text-black ">
                                        See more topics
                                    </a>
                                </div>
                            </div>

                            {{-- Bookmarks --}}
                            <div class="space-y-4">
                                {{-- <h2 class="font-extrabold text-md">Reading list</h2> --}}
                                <h2 class="font-extrabold text-md">Recently saved</h2>
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="flex flex-col space-y-2">
                                        <div class="flex flex-row items-center gap-1">
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                            <p class="text-sm font-semibold">Gusti Giustianto</p>
                                        </div>
                                        <p class="font-black lg:text-[16px] text-black mt-1 md-custom:text-sm">
                                            Living Color: Designing through synesthesia
                                        </p>
                                        <p class="text-slate-500 font-extralight text-[13px] !mt-1">
                                            May 28 · 8 min read
                                        </p>
                                    </div>
                                @endfor

                                <div class="pt-2 pb-3">
                                    <a href="#" class="text-green-600 font-medium text-sm hover:text-black ">
                                        See all (3)
                                    </a>
                                </div>

                                <div class="flex flex-row flex-wrap gap-3 leading-[10px] !mb-5">
                                    <p class="text-slate-500 text-[11px] font-medium">Help</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Status</p>
                                    <p class="text-slate-500 text-[11px] font-medium">About</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Careers</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Blog</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Privacy</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Terms</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Text To Speach</p>
                                    <p class="text-slate-500 text-[11px] font-medium">Teams</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const fixedBoxCategory = document.getElementById('category-nav');
    const contentArcticle = document.getElementById('content-article');
    const topLimit = fixedBoxCategory.offsetTop - 92;
    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const newPosition = Math.max(0, 40 - scrollY)
        if (topLimit <= scrollY) {
            fixedBoxCategory.style.transform = `translateY(${newPosition}%)`;
            fixedBoxCategory.classList.add('fixed', 'top-0', 'h-12', 'w-[768px]', 'duration-300');
        } else {
            contentArcticle.classList.remove('pt-[33px]', 'mt-[33px]');
            fixedBoxCategory.classList.remove('fixed', 'top-0', 'w-[768px]', 'duration-300');
            fixedBoxCategory.style = null;
        }
    })
</script>
