<x-guest-layout>
    <x-slot name="header">
        {{-- Hero Section --}}
        <div class="w-full h-[480px] flex items-center">
            <div class="flex flex-col max-w-7xl mx-auto w-full space-y-4">
                <h1 class="lg:text-8xl lg:mb-2 md:mb-0 xs:mb-3 md:text-8xl text-8xl font-medium font-serif">Stay
                    curious.
                </h1>
                <h3 class="text-2xl leading-6 font-thin max-w-md !mb-5 ml-2">
                    Discover stories, thinking, and expertise from writers on any topic.
                </h3>
                <button class="items-center w-fit px-11 py-2 font-bold ml-1 text-lg bg-black text-white rounded-full">
                    Start Reading
                </button>
            </div>
        </div>
    </x-slot>


    {{-- Trending Section --}}
    <div class="max-w-7xl mx-auto px-10 mt-5 mb-12" id="trending">

        <h3 class="text-black font-bold pt-6 mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 inline-block bg-transparent ring-1 text-slate-800 ring-slate-500 py-0.5 rounded-full mr-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
            </svg>
            Trending on Medium
        </h3>

        <div class="grid grid-cols-3 mx-auto gap-6">
            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">01</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">A personal, non-partisan perspective on
                        the
                        Israel-Hamas war
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>

            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">02</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">A personal, non-partisan perspective on
                        the
                        Israel-Hamas war
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>

            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">03</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">A personal, non-partisan perspective on
                        the
                        Israel-Hamas war
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>

            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">04</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">Data engineering at Meta: High-Level Overview of the internal tech
                        stack
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>

            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">05</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">A personal, non-partisan perspective on
                        the
                        Israel-Hamas war
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>

            <div class="flex flex-row gap-4">
                <h1 class="text-3xl font-extrabold text-slate-200">06</h1>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-row items-center gap-1">
                        <button
                            class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="lg:h-auto w-6 rounded-full object-cover"
                                src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                alt="Gusti" />
                        </button>
                        <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                    </div>
                    <h3 class="text-black font-black">A personal, non-partisan perspective on
                        the
                        Israel-Hamas war
                    </h3>
                    <p class="font-light text-slate-500 text-xs">Oct 12 · 11 min read</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    {{-- Article and Category --}}
    <div class="flex flex-row max-w-7xl mx-auto px-10 mt-12 mb-12">

        <div class="flex flex-col w-8/12 gap-12">
            @for ($i = 0; $i < 40; $i++)
                <div class="flex flex-row">
                    {{-- arctile --}}
                    <div class="flex flex-col space-y-1">
                        <div class="flex flex-row items-center gap-1">
                            <button
                                class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="lg:h-auto w-6 rounded-full object-cover"
                                    src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                                    alt="Gusti" />
                            </button>
                            <p class="font-medium text-xs text-slate-900">Gusti Giustianto</p>
                        </div>
                        <h1 class="text-black font-black text-[20px]">
                            How I Got Into And Managed to Walk Away from Burnout
                        </h1>
                        <p class="text-slate-500 font-light text-md">
                            My story and practical tips to help you get out of burnout
                        </p>

                        <div class="flex flex-row justify-between !mt-3">
                            <p class="text-slate-500 font-light text-[13px]">Sep 29 · 8 min read ·
                                <span
                                    class="bg-zinc-200 rounded-full py-1 px-3 text-[13px] font-light hover:cursor-pointer">Burnout</span>
                            </p>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6  text-slate-500 hover:text-blue-800 hover:cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- image --}}
                    <div class="card-thumbnail flex items-center lg:w-56 justify-center">
                        <img src="https://placehold.co/400/png" alt="" class="w-40 h-32">
                    </div>
                </div>
            @endfor
        </div>

        <div class="w-1/3 h-64">
            <div class="space-y-3 transition-all duration-700 top-[92px] z-30" id="fixed-box">
                <h1 class="font-bold text-black text-lg">Discover more of what matters to you</h1>
                <div class="flex flex-wrap gap-3">
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Data Science
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Self Improvement
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Writing
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Relationship
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Machin Learning
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Writing
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Writing
                    </button>
                    <button
                        class="text-black border md-custom:text-[12px] lg:text-[14px] bg-slate-200 rounded-full w-fit shadow-sm text-[14px] px-4 py-2 hover:bg-slate-300 hover:cursor-pointer">
                        Machin Learning
                    </button>
                </div>
                <div class="pt-2">
                    <a href="#" class="text-green-600 font-medium text-sm hover:text-black ">
                        See more topics
                    </a>
                </div>

                <hr class="!mt-6 !mb-6">

                <div class="flex flex-row flex-wrap gap-4 leading-3">
                    <p class="text-slate-500 text-sm font-medium">Help</p>
                    <p class="text-slate-500 text-sm font-medium">Status</p>
                    <p class="text-slate-500 text-sm font-medium">About</p>
                    <p class="text-slate-500 text-sm font-medium">Careers</p>
                    <p class="text-slate-500 text-sm font-medium">Blog</p>
                    <p class="text-slate-500 text-sm font-medium">Privacy</p>
                    <p class="text-slate-500 text-sm font-medium">Terms</p>
                    <p class="text-slate-500 text-sm font-medium">Text To Speach</p>
                    <p class="text-slate-500 text-sm font-medium">Teams</p>
                </div>
            </div>
        </div>

    </div>


</x-guest-layout>

<script>
    const fixedBox = document.getElementById('fixed-box');
    const topLimit = fixedBox.offsetTop - 92;
    window.addEventListener('scroll', function() {
        if (topLimit <= scrollY) {
            fixedBox.classList.add('fixed', 'top-[92px]', 'h-64', 'w-[400px]');
        } else {
            fixedBox.classList.remove('fixed', 'top-[92px]', 'w-[400px]');
        }
    })

    const limitChange = document.getElementById('trending');
    const navLimit = limitChange.offsetTop - 92;
    const navBg = document.getElementById('nav-bg');
    const btnGetStarted = document.getElementById('btnGetStarted');
    window.addEventListener('scroll', function() {
        if (navLimit <= scrollY) {
            navBg.classList.remove('bg-[#ffc017]');
            navBg.classList.remove('dark:bg-[#ffc017]');
            navBg.classList.add('bg-white', 'transition-all', 'duration-400', 'ease-in');
            btnGetStarted.classList.add('bg-green-700', 'transition-all', 'duration-400', 'ease-in');
        } else {
            navBg.classList.add('bg-[#ffc017]');
            navBg.classList.add('dark:bg-[#ffc017]');
            navBg.classList.remove('bg-white');
            btnGetStarted.classList.remove('bg-green-700');
        }
    })

    trending
</script>
