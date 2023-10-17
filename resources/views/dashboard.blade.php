<x-app-layout>
    {{-- <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 md:px-10">
            <div class="bg-white dark:bg-white overflow-hidden sm:rounded-lg">
                <div class="flex flex-row">
                    <div class="flex flex-col lg:w-8/12 w-full gap-5">
                        <div class="flex flex-row items-center gap-5 px-4 py-5 shadow w-full">
                            <a href="#">+</a>
                            <a href="#" class="font-extralight text-zinc-500 hover:text-black text-[15px]">For
                                you</a>
                            <a href="#"
                                class="font-extralight text-zinc-500 hover:text-black text-[15px]">Following</a>
                            <a href="#"
                                class="font-extralight text-zinc-500 hover:text-black text-[15px]">Category 1</a>
                            <a href="#"
                                class="font-extralight text-zinc-500 hover:text-black text-[15px]">Category 2</a>
                            <a href="#"
                                class="font-extralight text-zinc-500 hover:text-black text-[15px]">Category 3</a>
                        </div>

                        {{-- CONTENT --}}
                        <div>
                            <div class="card py-3 space-y-2 px-5">
                                <div class="card-header flex flex-row items-center gap-3">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-7 w-7 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                    <div>Gusti Giustianto · Aug 7</div>
                                </div>
                                <div class="card-body flex flex-row">
                                    <div class="card-content space-y-2 w-full">
                                        <h1 class="font-extrabold lg:text-xl md:text-lg text-md">
                                            4 Lessons learned from using NextJS 13 in production
                                        </h1>
                                        <h3 class="lg:block md:block sm:block hidden max-w-xl">
                                            We’ve recently rebuilt our website with NextJS V13 app directory, and what a
                                            journey it was! As the app directory is(at the time of writing this article)
                                            in beta, it wasn’t all smooth sailing, but once we got the hang o
                                        </h3>
                                    </div>
                                    <div class="card-thumbnail flex items-center lg:w-56 justify-center">
                                        <img src="https://placehold.co/400/png" alt="" class="w-32 h-28">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between px-5 pb-5 pt-2">
                                <div class="flex flex-row items-center gap-3 w-full">
                                    <button
                                        class="border bg-slate-200 rounded-full shadow-sm px-2 text-sm hover:bg-slate-300 hover:cursor-pointer">
                                        Nextjs
                                    </button>
                                    <h4 class="text-sm">7 min read
                                        <span class="lg:inline-block md-custom:inline-block sm:inline-block hidden"> ·
                                            Based on your reading history
                                        </span>
                                    </h4>
                                </div>
                                <div class="tools-action flex flex-row gap-4 lg:w-56 justify-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-gray-600 hover:text-red-600 hover:cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
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
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-gray-600 hover:text-black hover:cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </a>
                                                <div
                                                    class="flex flex-col p-4 bg-white shadow-md w-28 h-fit rounded-md z-20 absolute right-0 invisible tools-icon-item ">
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
                        <hr class="shadow-xs">

                    </div>
                    <div class="px-5 py-5 shadow space-y-10 lg:w-1/3 md:w-1/3 lg:block md-custom:block hidden">

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
                                    <p class="text-sm font-semibold">Gusti Giustianto</p>
                                </div>
                                <p class="font-extrabold lg:text-[16px] mt-1 md-custom:text-sm">
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
                                    <p class="text-sm font-semibold">Gusti Giustianto</p>
                                </div>
                                <p class="font-extrabold lg:text-[16px] mt-1 md-custom:text-sm">
                                    A personal, non-partisan perspective on the Israel-Hamas war
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
                                    <p class="text-sm font-semibold">Gusti Giustianto</p>
                                </div>
                                <p class="font-extrabold lg:text-[16px] mt-1 md-custom:text-sm">
                                    Living Color: Designing through synesthesia
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
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                                    Data Science
                                </button>
                                <button
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                                    Self Improvement
                                </button>
                                <button
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                                    Writing
                                </button>
                                <button
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                                    Relationship
                                </button>
                                <button
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                                    Machin Learning
                                </button>
                                <button
                                    class="border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
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
                                        <p class="text-xs lg:block md-custom:hidden hidden">All the advice I give is
                                            based on my own
                                            experience.
                                        </p>
                                    </div>

                                </div>
                                <div>
                                    <button
                                        class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-slate-300 hover:cursor-pointer">
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
                                        <p class="text-xs lg:block md-custom:hidden hidden">All the advice I give is
                                            based on my own
                                            experience.
                                        </p>
                                    </div>

                                </div>
                                <div>
                                    <button
                                        class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-slate-300 hover:cursor-pointer">
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
                                        <p class="text-xs lg:block md-custom:hidden hidden">All the advice I give is
                                            based on my own
                                            experience.
                                        </p>
                                    </div>

                                </div>
                                <div>
                                    <button
                                        class="border ring-1 md-custom:px-3 ring-slate-500 font-medium bg-white rounded-full w-fit shadow-sm text-[14px] px-4 py-1 hover:bg-slate-300 hover:cursor-pointer">
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

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
