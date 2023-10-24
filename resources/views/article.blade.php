<x-app-layout>
    <div class="w-full min-h-screen mx-auto bg-zinc-100">
        <div class="w-full mt-16">
            {{-- <div class="h-fit bg-yellow-600">
                <p class="max-w-3xl text-xl font-black mx-auto bg-red-400">Member-only Story</p>
            </div> --}}

            <div class="h-fit w-full bg-white pb-24">
                <div class="max-w-3xl mx-auto">
                    <h1 class="text-5xl font-[1000] leading-tight mx-auto text-black">
                        20 Laravel Features You Should Know in 2023
                    </h1>

                    {{-- INFORMATION USER --}}
                    <div class="card-header flex flex-row items-center gap-2 mt-8">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-11 w-11 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                        <div class="flex flex-col">
                            <p class="text-[17px]">
                                Gusti Giustianto ·
                                <button type="button"
                                    class="rounded text-teal-600 font-normal text-[17px] hover:text-teal-700">Follow</button>
                            </p>

                            <p class="text-[16px] text-slate-600">
                                Published in Level Up Coding · 9 min read · Aug 24
                            </p>
                        </div>
                    </div>

                    {{-- MENU ICON HEADER --}}
                    <div
                        class="flex flex-row justify-between py-3 border-t-slate-200 border-b-slate-200 border-[1px] border-r-0 border-l-0 mt-8">
                        <div class="left-icon flex flex-row gap-8">
                            <a href="">Icon 1</a>
                            <a href="">Icon 2</a>
                        </div>

                        <div class="right-icon flex flex-row gap-8">
                            <a href="">Icon 3</a>
                            <a href="">Icon 4</a>
                            <a href="">Icon 5</a>
                        </div>

                    </div>

                    {{-- THUMBNAILS --}}
                    <div class="content-artcile mt-16">
                        <div class="card-thumbnail">
                            <img src="https://placehold.co/900/png" alt="" class="w-full h-[480px]">
                        </div>
                        <p class="text-center py-3 font-medium">Image Tilte (Optional)</p>
                    </div>

                    {{-- CONTENT BODY --}}
                    <div class="text-[21px] leading-7 mt-8">
                        <div>
                            Almost two years ago, I wrote a blog post comparing React Native and Flutter at a time when
                            I
                            was still somewhat new to Flutter. I had spoken very highly of it, but also paid some
                            respect to
                            React Native.
                        </div>

                        <div class="mt-8">
                            Almost two years ago, I wrote a blog post comparing React Native and Flutter at a time when
                            I
                            was still somewhat new to Flutter. I had spoken very highly of it, but also paid some
                            respect to
                            React Native.
                        </div>
                    </div>

                    {{-- CATEGORY --}}
                    <div class="flex flex-row gap-4 mt-16">
                        <a href="" class="py-2 px-4 bg-zinc-100 rounded-full text-[15px]">Category 1</a>
                        <a href="" class="py-2 px-4 bg-zinc-100 rounded-full text-[15px]">Category 2</a>
                        <a href="" class="py-2 px-4 bg-zinc-100 rounded-full text-[15px]">Category 3</a>
                        <a href="" class="py-2 px-4 bg-zinc-100 rounded-full text-[15px]">Category 4</a>
                    </div>

                    {{-- MENU ICON FOOTER --}}
                    <div class="flex flex-row justify-between py-3 mt-8">
                        <div class="left-icon flex flex-row gap-8">
                            <a href="" class="flex flex-row gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                <p>13</p>
                            </a>
                            <a href="" class="flex flex-row gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                </svg>
                                <p>3</p>
                            </a>
                        </div>

                        <div class="right-icon flex flex-row gap-8">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="h-fit w-full bg-zinc-100">
                <div class="max-w-3xl mx-auto  flex flex-col gap-8">
                    {{-- INFORMATION USER --}}
                    <div class="card-header flex flex-col gap-2 mt-8">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-24 w-24 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                        <div class="flex flex-row justify-between items-start mt-3">
                            <div class="flex flex-col space-y-2">
                                <h3 class="text-2xl font-bold">Written by Gusti Giustianto</h3>
                                <h4 class="text-[16px] text-slate-700">23 Followers</h4>
                                <h4 class="text-[16px] text-slate-700">Software Developer | Tecnical Writer</h4>
                            </div>
                            <div class="flex flex-row gap-5">
                                <button type="button"
                                    class="rounded-full text-white bg-green-700 font-bold text-[15px] px-4 py-2 hover:bg-green-800">
                                    Follow
                                </button>

                                <button type="button"
                                    class="rounded-full text-white bg-green-700 font-bold text-[15px] px-2 py-2 hover:bg-green-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr class="h-[2px] bg-slate-200" />

                    {{-- MORE ARTICLES --}}
                    <div class="space-y-8">
                        <h1 class="font-black text-[17px]">More from Gusti Giustianto</h1>
                        <div class="grid grid-cols-2 gap-8">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="space-y-3 mb-8">
                                    <img src="https://placehold.co/200/png" alt="" class="w-full h-[250px]">
                                    <div class="flex flex-row items-center gap-2">
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        <p class="text-[14px]">
                                            Gusti Giustianto
                                        </p>
                                    </div>
                                    <div class="space-y-1">
                                        <h1 class="font-black text-xl">20 Open Source Projects You Didn’t Know You
                                            Could
                                            Contribute
                                        </h1>
                                        <h4 class="text-slate-600 text-[17px]">
                                            Open source projects are a great way to contribute to the development of
                                            a software
                                        </h4>
                                    </div>
                                    <p class="text-[14px] text-slate-600">4 min read · 5 days ago</p>
                                    <div class="flex flex-row justify-between pt-2">
                                        <div class="flex flex-row gap-4">
                                            <a href="" class="flex flex-row gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                                <p>13</p>
                                            </a>
                                            <a href="" class="flex flex-row gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                                </svg>
                                                <p>3</p>
                                            </a>
                                        </div>
                                        <div class="flex flex-row gap-4">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                                                </svg>
                                            </a>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <hr class="h-[2px] bg-slate-200" />
                        <button
                            class="px-5 py-2 text-[15px] text-slate-800 rounded-full bg-white border-b border-[1px] border-slate-600 hover:text-black hover:border-black">See
                            all from Gusti
                            Giustianto</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer w-full mx-auto bg-zinc-100 mt-20 border-t-2 border-slate-200 py-7">
            <div class="flex flex-row gap-4 max-w-3xl mx-auto text-sm text-slate-600">
                <a href="" class="hover:text-slate-900">Help</a>
                <a href="" class="hover:text-slate-900">Status</a>
                <a href="" class="hover:text-slate-900">About</a>
                <a href="" class="hover:text-slate-900">Careers</a>
                <a href="" class="hover:text-slate-900">Blog</a>
                <a href="" class="hover:text-slate-900">Privacy</a>
                <a href="" class="hover:text-slate-900">Terms</a>
                <a href="" class="hover:text-slate-900">Text to speech</a>
                <a href="" class="hover:text-slate-900">Teams</a>
            </div>
        </div>
    </div>
</x-app-layout>
