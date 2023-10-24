<x-app-layout>
    <div class="max-w-7xl mx-auto flex flex-row mt-16">
        <div class="content w-9/12">
            <div class="header-information">
                <div class="flex flex-row justify-between max-w-3xl">
                    <a href="" class="text-5xl font-bold">Notifications</a>
                </div>

                <div class="container mx-auto mt-10" x-data="{ activeTab: 1 }">
                    <div class="max-w-3xl">
                        <ul class="flex border-b-[1px]">
                            <li class="-mb-px mr-1">
                                <a class="inline-block py-2 px-4" @click="activeTab = 1"
                                    :class="{ 'border-b-[1px] border-black': activeTab === 1 }" href="#">All</a>
                            </li>
                            <li class="-mb-px mr-1">
                                <a class="inline-block py-2 px-4" @click="activeTab = 2"
                                    :class="{ 'border-b-[1px] border-black': activeTab === 2 }"
                                    href="#">Response</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div x-show="activeTab === 1" id="tab-content-1" class="tab-content">
                            <div class="mt-12">
                                <div class="max-w-3xl px-10 space-y-4">
                                    @for ($i = 0; $i < 5; $i++)
                                        <div class="flex flex-row items-center gap-3">
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-10 w-10 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                            <div class="flex flex-col">
                                                <p class="text-[15px]">Citra Marcellina <span
                                                        class="text-slate-600">started following
                                                        you</span></p>
                                                <p class="text-[14px] text-slate-600 font-medium">Jun 20, 2018</p>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="flex flex-row justify-between max-w-3xl px-10 mt-8">
                                    <a href=""
                                        class="text-green-700 font-normal text-[15px] hover:text-black">Other
                                        Notifications</a>
                                    <a href=""
                                        class="text-green-700 font-normal text-[15px] hover:text-black">Your
                                        Stats</a>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 2" id="tab-content-2" class="tab-content">
                            <div class="mt-16">

                                <div class="flex flex-col max-w-3xl space-y-10 px-10">
                                    <div class="flex flex-row justify-between max-w-3xl">
                                        <a href="" class="text-slate-700 font-normal text-[15px]">You're all
                                            caught up.</a>
                                        <a href="" class="text-green-700 font-normal text-[15px]">Your Stats</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="rightbar space-y-4">
            <div class="flex flex-col justify-between h-full pl-14 border-l-[1px]">
                <div class="sticky" id="sidbarright-nav">
                    <button
                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-[100px] w-[100px] rounded-full object-cover"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                    <div class="flex flex-col pb-5 mt-5 w-[276px]">
                        <p class="text-lg font-semibold">
                            Gusti Giustianto
                        </p>
                        <p class="text-[16px] font-medium text-zinc-500 mb-2">
                            23 Follower
                        </p>
                        <p class="text-[16px] font-medium text-zinc-500">
                            Can’t stop sharing my experience and knowledge with other people. I write my
                            thoughts on startups, technology, and marketing.
                        </p>
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
                    <div class="mt-10 mb-5">
                        <h3 class="font-bold text-lg mb-3">Following</h3>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-row items-center gap-2">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-6 w-6 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                    <a href="#"
                                        class="text-sm text-slate-600 font-normal hover:text-black hover:underline">Gusti
                                        Giustianto</a>
                                </div>


                                <!--Code Block for white tooltip starts-->
                                <a tabindex="0" role="link" aria-label="tooltip 1"
                                    class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-20 md:mt-0"
                                    onmouseover="showTooltip(1)" onfocus="showTooltip(1)" onmouseout="hideTooltip(1)">
                                    <div class="cursor-pointer mb-2">
                                        <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-info-circle flex justify-center items-center"
                                            width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="#A0AEC0" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="12" y1="8" x2="12.01" y2="8" />
                                            <polyline points="11 12 12 12 12 16 13 16" />
                                        </svg>
                                    </div>
                                    <div id="tooltip1" role="tooltip"
                                        class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 rounded hidden">
                                        <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px"
                                            height="16px" viewBox="0 0 9 16" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)"
                                                    fill="#FFFFFF">
                                                    <g id="Group-3-Copy-16"
                                                        transform="translate(850.000000, 975.000000)">
                                                        <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                            <polygon id="Triangle"
                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="flex flex-row items-center gap-2">
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-10 w-10 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                            <p class="text-lg font-bold">Gusti Giustianto</p>
                                        </div>

                                        <p class="text-xs leading-4 text-gray-600 pb-3 pt-3">Hello my name is Gutsi
                                            Giustianto, I'm Backend Developer</p>

                                        <div class="flex justify-between">
                                            <div class="flex items-center">
                                                <span class="text-sm font-normal text-zinc-500">31
                                                    Followers</span>
                                            </div>
                                            <div class="flex items-center">

                                                <button onblur="hideTooltip(1)"
                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-green-700 focus:bg-green-400 focus:outline-none bg-green-700 transition duration-150 ease-in-out hover:bg-green-600 rounded text-white px-5 py-1 text-xs">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--Code Block for white tooltip ends-->


                            </div>
                        @endfor
                    </div>
                    <a href="#" class="text-[14px] text-slate-600 font-normal hover:text-black">See all (11)</a>
                </div>

                <div class="flex flex-row flex-wrap gap-3 leading-[10px] font-bold !mb-5 fixed bottom-2 max-w-[300px]">
                    <p class="text-slate-500 text-[11px]">Help</p>
                    <p class="text-slate-500 text-[11px]">Status</p>
                    <p class="text-slate-500 text-[11px]">About</p>
                    <p class="text-slate-500 text-[11px]">Careers</p>
                    <p class="text-slate-500 text-[11px]">Blog</p>
                    <p class="text-slate-500 text-[11px]">Privacy</p>
                    <p class="text-slate-500 text-[11px]">Terms</p>
                    <p class="text-slate-500 text-[11px]">Text To Speach</p>
                    <p class="text-slate-500 text-[11px]">Teams</p>
                </div>
            </div>

        </div>
    </div>


</x-app-layout>

<script>
    function showTooltip(flag) {
        switch (flag) {
            case 1:
                document.getElementById("tooltip1").classList.remove("hidden");
                break;
        }
    }

    function hideTooltip(flag) {
        switch (flag) {
            case 1:
                document.getElementById("tooltip1").classList.add("hidden");
                break;
        }
    }

    const fixedBoxCategory = document.getElementById('sidbarright-nav');
    const topLimit = fixedBoxCategory.offsetTop - 92;
    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const newPosition = Math.max(0, 40 - scrollY)
        if (topLimit <= scrollY) {
            fixedBoxCategory.style.transform = `translateY(${newPosition}%)`;
            fixedBoxCategory.classList.add('fixed', 'top-10', 'w-[276px]', 'duration-300');
        } else {
            fixedBoxCategory.classList.remove('fixed', 'top-0', 'w-[276px]', 'duration-300');
            fixedBoxCategory.style = null;
        }
    })
</script>
